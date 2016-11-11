<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Ads;
use App\Models\Categories;
use App\Models\Counties;
use App\Models\Cities;
use App\Models\Companies;
use App\Models\Lists;
use App\Models\UserCompanies;
use App\Models\Tags;
use App\Models\Images;
use App\Models\Calendars;
use Auth;
use Validator;
use Input;
use App\Http\Requests\CreateAdsRequest;
use App\Http\Requests\UpdateAdsRequest;
use App\Repositories\AdsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AdsController extends AppBaseController
{
    /** @var  AdsRepository */
    private $adsRepository;

    public function __construct(AdsRepository $adsRepo)
    {
        $this->adsRepository = $adsRepo;
    }

    /**
     * Display a listing of the Ads.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->adsRepository->pushCriteria(new RequestCriteria($request));
        $ads = $this->adsRepository->all();

        return view('models.ads.index')
            ->with('ads', $ads);
    }

    /**
     * Show the form for creating a new Ads.
     *
     * @return Response
     */
    public function create()
    {
        $cats = Categories::whereNull('parent_id')->get(['name','id']);
        $categories = array();
        foreach ($cats as $element) {
            $categories[$element->id]=$element->name;
        }
        $subcategories = Categories::pluck('name','id');
        $cities = Cities::pluck('name','id');
        $counties = Counties::pluck('name', 'id');
        return view('models.ads.create', ['user' => Auth::user(), 
                                    'counties' => $counties, 
                                    'cities' => $cities,
                                    'categories' => $categories,
                                    'subcategories' => $subcategories,
                                    ]);
    }

    /**
     * Store a newly created Ads in storage.
     *
     * @param CreateAdsRequest $request
     *
     * @return Response
     */
    public function store(CreateAdsRequest $request)
    {
        $input = $request->all();

        $ads = $this->adsRepository->create($input);

        $tags = $this->saveTags($_REQUEST['hiddentags'], $ads->id);
        $this->storeImages($ads->id);

        Flash::success('A hirdetést rögzítettük');

        return redirect(route('ads.edit', $ads->id));
    }

    /**
     * Display the specified Ads.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            //Flash::error('A hirdetést nem találjuk');

            return redirect(route('ads.index'));
        }

        $images = $this->getImagesArray($ads);
        
        return view('models.ads.show')->with(['ads' => $ads,
                                              'images' => $images]
                                            );
    }

    /**
     * Show the form for editing the specified Ads.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            Flash::error('A hirdetést nem találjuk');

            return redirect(route('ads.index'));
        }

        $cats = Categories::whereNull('parent_id')->get(['name','id']);
        $categories = array();
        foreach ($cats as $element) {
            $categories[$element->id]=$element->name;
        }
        $subcategories = Categories::pluck('name','id');
        $cities = Cities::pluck('name','id');
        $counties = Counties::pluck('name', 'id');
        $tags = Tags::where([['container_type', '=','ad'],
                             ['container_id',   '=',$ads->id],
                            ])->get(['name','id']);
        $hidden= '';
        foreach ($tags as $element) {
            $hidden=$hidden."#".$element->name;
        }

        $dir = url('/').'/images/companies/'.$ads->company->id.'/'.$id.'/';
        $imagesDB = Images::where([
                                ['container_type', 'ad'],
                                ['container_id',   $id],
                                ['form',           'ad'],
                                ['control_id',     'images'],
                                ['deleted_at', '=', null]
                            ])->get();
        $images = array();
        foreach ($imagesDB as $element) {
            array_push($images,$dir.$element->filePath);
        }
        return view('models.ads.edit')->with(['ads' => $ads,
                                    'user' => Auth::user(), 
                                    'counties' => $counties, 
                                    'cities' => $cities,
                                    'categories' => $categories,
                                    'subcategories' => $subcategories,
                                    'tags' => $tags,
                                    'hidden' => $hidden,
                                    'images' => $imagesDB
                                    ]);
    }

    /**
     * Update the specified Ads in storage.
     *
     * @param  int              $id
     * @param UpdateAdsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdsRequest $request)
    {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            Flash::error('A hirdetést nem találjuk');

            return redirect(route('ads.index'));
        }

        $ads = $this->adsRepository->update($request->all(), $id);

        $tags = $this->saveTags($_REQUEST['hiddentags'], $id);

        $flash=$this->storeImages($ads->id);

        Flash::success('A hirdetést módosítottuk - '.$flash);

        return redirect(route('ads.show', $ads->id));
        //return view('models.ads.show')->with('ads', $ads);
    }

    /**
     * Remove the specified Ads from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            Flash::error('A hirdetést nem találjuk');

            return redirect(route('ads.index'));
        }

        $this->adsRepository->delete($id);

        Flash::success('A hirdetést töröltük ');

        return redirect(route('ads.index'));
    }

    public function uploadFiles(Request $request) {
 
        $input = Input::all();
 
        $rules = array(
            'file' => 'image|max:1000',
        );
 
        $validation = Validator::make($input, $rules);
 
        if ($validation->fails()) {
            //return Response::make($validation->errors->first(), 400);
            return Response::json($validation->messages()->all(), 400);
        }
 
        $destinationPath = 'images/companies/'.Auth::user()->companies->first()->id.'/tmp';
        $fileName = Input::file('file')->getClientOriginalName(); 
        $upload_success = Input::file('file')->move($destinationPath, $fileName);

        if ($upload_success) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }

    protected function storeImages($id) {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            Flash::error('A hirdetést nem találjuk');

            return redirect(route('ads.index'));
        }

        $dir = 'images/companies/'.$ads->company->id.'/';
        $oldfolder = $dir.'tmp/';
        $files = scandir($oldfolder);
        $newfolder = $dir.$id.'/';
        if (!file_exists($newfolder)) {
            mkdir($newfolder,0775);
        }
        
        foreach($files as $file) {
            if (in_array($file, array(".",".."))) continue;
            rename($oldfolder.$file, $newfolder.$file);
            $image = new Images();
            $image->container_type = 'ad';
            $image->container_id   = $id;
            $image->form           = 'ad';
            $image->control_id     = 'images';
            $image->filePath       = $file;
            $image->save();
        }

        $newImages = scandir($newfolder);

        $imagesDB = Images::where([
                                ['container_type', 'ad'],
                                ['container_id',   $id],
                                ['form',           'ad'],
                                ['control_id',     'images']
                            ])->get(['filePath']);
        $images = array(".","..");
        foreach ($imagesDB as $element) {
            array_push($images,$element->filePath);
        }
        $toDelete = array();
        foreach ($newImages as $newImage) {
            if (!in_array($newImage, $images)) {
                $path = realpath($newfolder.$newImage);

                if(unlink($path))
                    array_push($toDelete, $newImage.' - véglegesen törölve');

            }
        }
        return json_encode($toDelete);

    }

    protected function getImagesArray($ads) {
        $dir = url('/').'/images/companies/'.$ads->company->id.'/'.$ads->id.'/';
        $imagesDB = Images::where([
                                ['container_type', 'ad'],
                                ['container_id',   $ads->id],
                                ['form',           'ad'],
                                ['control_id',     'images'],
                                ['deleted_at', '=', null]
                            ])->get(['filePath']);
        $images = array();
        foreach ($imagesDB as $element) {
            array_push($images,$dir.$element->filePath);
        }
        return $images;
    }

    protected function saveTags($strtags, $id) {
        $newTags = array_unique(explode('#', $strtags));

        $oldTagsDb = Tags::where([['container_type', '=','ad'],
                                  ['container_id',   '=',$id],
                                  ['deleted_at',   '=',null],
                                ])->get(['name']);
        $oldTags = array();
        foreach ($oldTagsDb as $element) {
            array_push($oldTags,$element->name);
        }
        $oldTags = array_unique($oldTags);

        $toDelete = array_diff($oldTags,$newTags);
        $toInsert = array_diff($newTags,$oldTags);

        foreach ($toDelete as $name) {
            Tags::where([['container_type', '=','ad'],
                         ['container_id',   '=',$id],
                         ['name',           '=',$name],
                        ])->delete();
        }

        foreach ($toInsert as $name) {
            if ($name!='') {
                $tag = Tags::create([
                        'container_type' => 'ad',
                        'container_id'   => $id,
                        'name'           => $name,
                    ]);
            }
        }
    }
}
