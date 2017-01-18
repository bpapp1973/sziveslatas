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
use App\Models\Rooms;
use App\Models\Menucards;
use App\Models\Comments;
use App\Models\Favourites;
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
use Debugbar;

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
        $ads = new Ads;
        $rooms = new Rooms;
        $menucards = new Menucards;
        $cats = Categories::whereNull('parent_id')->get(['name','id']);
        $categories = array();
        foreach ($cats as $element) {
            $categories[$element->id]=$element->name;
        }
        $subcategories = Categories::pluck('name','id');
        $cities = Cities::pluck('name','id');
        $counties = Counties::pluck('name', 'id');
        return view('models.ads.create', ['ads' => $ads,
                                    'rooms' => $rooms,
                                    'menucards' => $menucards,
                                    'user' => Auth::user(), 
                                    'counties' => $counties, 
                                    'cities' => $cities,
                                    'categories' => $categories,
                                    'subcategories' => $subcategories
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
        $this->saveRooms($_REQUEST['hiddenrooms'], $ads->id);
        $this->saveMenucards($_REQUEST['hiddenmenucards'], $ads->id);


        Flash::overlay('A hirdetést rögzítettük');

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
        $menucards = $ads->menucards;
        
        $menucardsArray = array();
        foreach ($menucards as $element) {
            $menucardsArray[$element->id]=$element->title;
        }

        $rooms = $ads->rooms;
        $roomsArray = array();
        foreach ($rooms as $element) {
            $roomsArray[$element->id]=$element->name;
        }

        $userid = -1;
        if(Auth::user()){
            $userid = Auth::user()->id;
        }

        $favourite = Favourites::where([['ads_id',$id],
                                        ['users_id',$userid],
                                        ['deleted_at',null]
                                        ])->first();

        $owner = $ads->company->users->first();
        if ($userid == $owner->id) {
            $comments = $ads->comments;
        } else {
            $comments = $ads->comments->where('approved',1);
        }

        $isordered = false;
        if($userid>1) {
            $orders = Auth::user()->orders;
            foreach (Auth::user()->orders as $element) {
                if($element->ads_id == $id) {
                    $isordered = true;
                    break;
                }
            }
        }


        //Debugbar::addMessage('Comments', json_encode($comments));
        
        return view('models.ads.show')->with(['ads' => $ads,
                                              'images' => $images,
                                              'rooms' => $rooms,
                                              'roomsArray' => $roomsArray,
                                              'menucards' => $menucards,
                                              'menucardsArray' => $menucardsArray,
                                              'owner' => $owner,
                                              'comments' => $comments,
                                              'favourite' => $favourite,
                                              'isordered' => $isordered]
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

        $rooms = $ads->rooms;
        $menucards = $ads->menucards;
        $comments = $ads->comments;

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
                                    'images' => $imagesDB,
                                    'rooms' => $rooms,
                                    'menucards' => $menucards,
                                    'comments' => $comments
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

        $rooms = $this->saveRooms($_REQUEST['hiddenrooms'], $id);

        $menucards = $this->saveMenucards($_REQUEST['hiddenmenucards'], $id);

        $flash=$this->storeImages($ads->id);

        $this->sendNotifications($id);

        Flash::overlay('A hirdetést módosítottuk');

        return redirect(route('ads.edit', $ads->id));
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

        Flash::overlay('A hirdetést töröltük ');

        return redirect(route('ads.index'));
    }

    protected function sendNotifications($id) {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            Flash::error('A hirdetést nem találjuk');

            return redirect(route('ads.index'));
        }

        $favourites = Favourites::where('ads_id',$id)->get();
        Debugbar::addMessage('Favourites', json_encode($favourites));
        foreach ($favourites as $favourite) {
            $user = User::find($favourite->users_id);
            $user->sendAdChangedNotification($id);
        }
    }

    public function uploadFiles(Request $request) {
 
        $input = Input::all();
 
        $rules = array(
            'file' => 'image|max:'.env('MAX_FILE_SIZE',2000),
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

    public function saveRooms($rooms, $id) {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            return redirect(route('ads.index'));
        }

        $roomsOld = $ads->rooms->toArray();
        $roomsNew = json_decode($rooms, true);

        $toUpdate=array();
        $toInsert=array();
        $toDelete=array();

        for ($i=0; $i < count($roomsNew); $i++) { 
            if (array_key_exists("id",$roomsNew[$i])) {
                array_push($toUpdate, $roomsNew[$i]);
            } else {
                array_push($toInsert, $roomsNew[$i]);
            }
        }

        for ($i=0; $i < count($roomsOld); $i++) { 
            $exists=false;
            for ($j=0; $j < count($toUpdate); $j++) { 
                if ($roomsOld[$i]["id"]==$toUpdate[$j]["id"]) {
                    $exists=true;
                }
            }
            if (!$exists) {
                array_push($toDelete,$roomsOld[$i]);
            }
        }

        for ($i=0; $i < count($toDelete); $i++) { 
            Rooms::find($toDelete[$i]["id"])->delete();
        }

        for ($i=0; $i < count($toUpdate); $i++) { 
            $room=Rooms::find($toUpdate[$i]["id"]);
            $room->ads_id      = $id;
            $room->name        = $toUpdate[$i]['name'];
            $room->area        = $toUpdate[$i]['area'];
            $room->seats       = $toUpdate[$i]['seats'];
            $room->assets      = $toUpdate[$i]['assets'];
            $room->price       = $toUpdate[$i]['price'];
            $room->description = $toUpdate[$i]['description'];
            $room->save();
        }

        foreach ($toInsert as $room) {
            Rooms::create([
                'ads_id'      => $id,
                'name'        => $room['name'],
                'area'        => $room['area'],
                'seats'       => $room['seats'],
                'assets'      => $room['assets'],
                'price'       => $room['price'],
                'description' => $room['description'],
            ]);
        }
    }

    private function saveMenucards($menucards, $id) {
        $ads = $this->adsRepository->findWithoutFail($id);

        if (empty($ads)) {
            return redirect(route('ads.index'));
        }

        $menucardsOld = $ads->menucards->toArray();
        $menucardsNew = json_decode($menucards, true);

        $toUpdate=array();
        $toInsert=array();
        $toDelete=array();

        for ($i=0; $i < count($menucardsNew); $i++) { 
            if (array_key_exists("id",$menucardsNew[$i])) {
                array_push($toUpdate, $menucardsNew[$i]);
            } else {
                array_push($toInsert, $menucardsNew[$i]);
            }
        }

        for ($i=0; $i < count($menucardsOld); $i++) { 
            $exists=false;
            for ($j=0; $j < count($toUpdate); $j++) { 
                if ($menucardsOld[$i]["id"]==$toUpdate[$j]["id"]) {
                    $exists=true;
                }
            }
            if (!$exists) {
                array_push($toDelete,$menucardsOld[$i]);
            }
        }

        for ($i=0; $i < count($toUpdate); $i++) { 
            $menucard=Menucards::find($toUpdate[$i]["id"]);
            $menucard['ads_id']     =$id;
            $menucard['label']      =$toUpdate[$i]["label"];
            $menucard['title']      =$toUpdate[$i]["title"];
            $menucard['subtitle']   =$toUpdate[$i]["subtitle"];
            $menucard['price']      =$toUpdate[$i]["price"];
            $menucard['pricedesc']  =$toUpdate[$i]["pricedesc"];
            $menucard['description']=$toUpdate[$i]["description"];
            $menucard->save();
        }

        for ($i=0; $i < count($toInsert); $i++) { 
            $menucard = $toInsert[$i];
            Menucards::create([
                'ads_id'        => $id,
                'label'         => $menucard['label'],
                'title'         => $menucard['title'],
                'subtitle'      => $menucard['subtitle'],
                'price'         => $menucard['price'],
                'pricedesc'     => $menucard['pricedesc'],
                'description'   => $menucard['description']
            ]);
        }

        for ($i=0; $i < count($toDelete); $i++) { 
            Menucards::find($toDelete[$i]["id"])->delete();
        }

    }


    function ary_diff( $ary_1, $ary_2 ) {
        // compare the value of 2 array
        // get differences that in ary_1 but not in ary_2
        // get difference that in ary_2 but not in ary_1
        // return the unique difference between value of 2 array
        $diff = array();

        // get differences that in ary_1 but not in ary_2
        foreach ( $ary_1 as $v1 ) {
            $flag = 0;
            foreach ( $ary_2 as $v2 ) {
                $flag |= ( $v1 == $v2 );
                if ( $flag ) break;
            }
            if ( !$flag ) array_push( $diff, $v1 );
        }

        return $diff;
    }
}
