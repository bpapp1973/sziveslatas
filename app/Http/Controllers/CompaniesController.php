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
use Auth;
use Input;
use App\Http\Requests\CreateCompaniesRequest;
use App\Http\Requests\UpdateCompaniesRequest;
use App\Repositories\CompaniesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Debugbar;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CompaniesController extends AppBaseController
{
    /** @var  CompaniesRepository */
    private $companiesRepository;

    public function __construct(CompaniesRepository $companiesRepo)
    {
        $this->companiesRepository = $companiesRepo;
    }

    /**
     * Display a listing of the Companies.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->companiesRepository->pushCriteria(new RequestCriteria($request));
        $companies = $this->companiesRepository->all();

        return view('models.companies.index')
            ->with('companies', $companies);
    }

    /**
     * Show the form for creating a new Companies.
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
        $subcategories = ['' => ''];
        $cities = ['' => ''];
        $counties = Counties::pluck('name', 'id');
        $payment = $this->getList('models.companies.create','payment');
        $subscriptiontype = $this->getList('models.companies.create','subscriptiontype');
        return view('models.companies.create', ['user' => Auth::user(), 
                                    'counties' => $counties, 
                                    'cities' => $cities,
                                    'payment' => $payment,
                                    'subscriptiontype' => $subscriptiontype,
                                    'categories' => $categories,
                                    'subcategories' => $subcategories
                                    ]
                    );
    }

    /**
     * Store a newly created Companies in storage.
     *
     * @param CreateCompaniesRequest $request
     *
     * @return Response
     */
    public function store(CreateCompaniesRequest $request)
    {
        $input = $request->all();

        $companies = $this->companiesRepository->create($input);
        $user = User::find(Auth::user()->id);
        $user->roles_id=max(2, $user->roles_id);
        $user->save();

        Flash::success('A hirdetőt sikeresen létrehoztuk');

        return redirect(route('companies.edit', $companies->id));
    }

    /**
     * Display the specified Companies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            //Flash::error('A hirdetőt nem találtuk');

            return redirect(route('companies.index'));
        }

        $logo = $companies->images()->where([['container_type', 'company'],
                                         ['container_id', $companies->id],
                                         ['form', 'description'],
                                         ['control_id', 'logo'],
                                         ])->get(['filePath']);
        if (count($logo)==0) {
            $logo = 'http://fpoimg.com/200x200?text=Logo+feltöltés&font=calibri';
        } else {
            $logo = url('/').'/images/companies/'.$companies->id.'/'.$logo[0]->filePath;
        }

        $highlights = [];
        if($companies->highlight1) {
            array_push($highlights, $companies->highlight1ad);
        }
        if($companies->highlight2) {
            array_push($highlights, $companies->highlight2ad);
        }
        if($companies->highlight3) {
            array_push($highlights, $companies->highlight3ad);
        }
        //$highlights = $companies->ads->where('isvalid',1);
        //$highlights = $highlights->where('highlighted',1);

        return view('models.companies.show', ['companies' => $companies,
                                               'logo' => $logo,
                                               'highlights' => $highlights]);

    }

    /**
     * Show the form for editing the specified Companies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('A hirdetőt nem találtuk');

            return redirect(route('companies.index'));
        }

        $counties = Counties::pluck('name', 'id');
        $payment = $this->getList('models.companies.create','payment');
        $subscriptiontype = $this->getList('models.companies.create','subscriptiontype');

        $cats = Categories::whereNull('parent_id')->get(['name','id']);
        $categories = array();
        foreach ($cats as $element) {
            $categories[$element->id]=$element->name;
        }
        
        $cities = Cities::pluck('name', 'id');
        $subcategories = Categories::pluck('name', 'id');

        $tags = Tags::where([['container_type', '=','company'],
                             ['container_id',   '=',$companies->id],
                            ])->get(['name','id']);
        $hidden= '';
        foreach ($tags as $element) {
            $hidden=$hidden."#".$element->name;
        }

        $address = $companies->address.' '.$companies->city->name;
        $companies->zip=$this->getZipcode($address);

        return view('models.companies.edit', ['companies' => $companies, 
                                    'counties' => $counties, 
                                    'cities' => $cities,
                                    'payment' => $payment,
                                    'subscriptiontype' => $subscriptiontype,
                                    'categories' => $categories,
                                    'subcategories' => $subcategories,
                                    'tags' => $tags,
                                    'hidden' => $hidden,
                                    ]
                    );

    }

    /**
     * Update the specified Companies in storage.
     *
     * @param  int              $id
     * @param UpdateCompaniesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompaniesRequest $request)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('A hirdetőt nem találtuk');

            return redirect(route('companies.index'));
        }

        $companies = $this->companiesRepository->update($request->all(), $id);

        $tags = $this->saveTags($_REQUEST['hiddentags'], $id);


        Flash::success('A hirdetői adatokat frissítettük');

        return redirect(route('companies.edit', $companies->id));
    }

    /**
     * Remove the specified Companies from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('A hirdetőt nem találtuk');

            return redirect(route('companies.index'));
        }

        $this->companiesRepository->delete($id);

        Flash::success('A hirdetőt töröltük');

        return redirect(route('home'));
    }

    /**
     * Show the company profile form.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('A hirdetőt nem találtuk');

            return redirect(route('companies.index'));
        }

        $logo = $companies->images()->where([['container_type', 'company'],
                                         ['container_id', $companies->id],
                                         ['form', 'description'],
                                         ['control_id', 'logo'],
                                         ])->get(['filePath']);
        if (count($logo)==0) {
            $logo = 'http://fpoimg.com/200x200?text=Logo+feltöltés&font=calibri';
        } else { 
            $logo = url('/').'/images/companies/'.$companies->id.'/'.$logo[0]->filePath;
        }

        $ads = Ads::where([['companies_id',$id],
                           ['isvalid','1']])->get(['id','title','summary','highlighted','description']);
        //$ads = $companies->ads->where('isvalid','1');
        //$ads = $ads->get(['title','summary']);


        return view('models.companies.profile', ['companies' => $companies,
                                               'logo' => $logo,
                                               'ads' => $ads]);
    }

    /**
     * Update the user instance after validation.
     *
     * @param  Request $request
     * @param  int $id
     * @return redirect
     */
    public function updateProfile($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('A hirdetőt nem találtuk');

            return redirect(route('companies.index'));
        }
        $companies->update(['description' => $_REQUEST['desc']]);
        
        Flash::success('A hirdetői adatokat frissítettük ');

        return redirect(route('companies.profile', ['id'=>$id]));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadImage()
    {

        $name='';

        $companies = $this->companiesRepository->findWithoutFail($_REQUEST['container_id']);
        if (empty($companies)) {
            Flash::error('A hirdetőt nem találtuk');

            return redirect(route('companies.index'));
        }

        if(Input::file('image')) {
            $file = Input::file('image');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/images/companies/'.$companies->id.'/', $name);
        }

        $image = Images::where([['container_type', 'company'],
                                ['container_id',   $_REQUEST['container_id']],
                                ['form',           'description'],
                                ['control_id',     'logo'],
            ])->first();
        if (count($image)==0) {
            $image = new Images();
        }
    
        $image->container_type = 'company';
        $image->container_id   = $_REQUEST['container_id'];
        $image->form           = 'description';
        $image->control_id     = 'logo';
        $image->filePath       = $name;
        $image->title          = $_REQUEST['title'];
        $image->description    = $_REQUEST['description'];
        $image->save();

        Flash::success('A képfeltöltés sikerült');

        return redirect(route('companies.profile', ['id'=>$_REQUEST['container_id']]));
    }

    private function getList($form, $control) {
        $list = Lists::where([
                    ['form',      '=', $form],
                    ['control',   '=', $control],
                    ['isenabled', '=', true]])->
                    orderBy('seqid')->
                    get(['value','seqid']);
        $retval = array();
        foreach ($list as $element) {
            $retval[$element->seqid-1]=$element->value;
        }
        return $retval;
    } 

    protected function saveTags($strtags, $id) {
        $newTags = array_unique(explode('#', $strtags));

        $oldTagsDb = Tags::where([['container_type', '=','company'],
                     ['container_id',   '=',$id],
                    ])->get(['name']);
        $oldTags = array();
        foreach ($oldTagsDb as $element) {
            array_push($oldTags,$element->name);
        }
        $oldTags = array_unique($oldTags);

        $toDelete = array_diff($oldTags,$newTags);
        $toInsert = array_diff($newTags,$oldTags);

        foreach ($toDelete as $name) {
            Tags::where([['container_type', '=','company'],
                         ['container_id',   '=',$id],
                         ['name',           '=',$name],
                        ])->delete();
        }

        foreach ($toInsert as $name) {
            if ($name!='') {
                $tag = Tags::create([
                        'container_type' => 'company',
                        'container_id'   => $id,
                        'name'           => $name,
                    ]);
            }
        }
    }

    private function getZipcode($address){
        if(!empty($address)){
            //Formatted address
            $formattedAddr = str_replace(' ','+',$address);
            //Send request and receive json data by address
            $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=true_or_false'); 
            $output1 = json_decode($geocodeFromAddr);
            //Get latitude and longitute from json data
            $latitude  = $output1->results[0]->geometry->location->lat; 
            $longitude = $output1->results[0]->geometry->location->lng;
            //Send request and receive json data by latitude longitute
            $geocodeFromLatlon = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.$latitude.','.$longitude.'&sensor=true_or_false');
            $output2 = json_decode($geocodeFromLatlon);
            if(!empty($output2)){
                $addressComponents = $output2->results[0]->address_components;
                foreach($addressComponents as $addrComp){
                    if($addrComp->types[0] == 'postal_code'){
                        return $addrComp->long_name;
                    }
                }
                return false;
            }else{
                return false;
            }
        }else{
            return false;   
        }
    }

 }
