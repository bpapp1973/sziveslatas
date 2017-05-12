<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Categories;
use App\Models\Cities;
use App\Models\Tags;
use App\Models\Highlights;
use Illuminate\Http\Request;

use Debugbar;

class SearchController extends Controller
{
    private $app_name;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->app_name = env('APP_NAME','szíveslátás.hu');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($this->app_name=='gyertekel.hu') {
            $categories = array();
            $subcats = Categories::where('parent_id',4)->get(['name','id']);
            $subcategories = array();
            foreach ($subcats as $element) {
                $subcategories[$element->id]=$element->name;
            }
        } else {
            $cats = Categories::whereNull('parent_id')->get(['name','id']);
            $categories = array();
            foreach ($cats as $element) {
                $categories[$element->id]=$element->name;
            }
            $subcategories = array();
        }
        $highlights = Highlights::where('site',$this->app_name)->get();
        return view('welcome', ['categories' => $categories,
                                'subcategories' => $subcategories,
                                'highlights' => $highlights
                                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function citysearch(Request $request)
    {
        $data = Cities::where("name","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function textsearch(Request $request)
    {
        $data = Tags::where([["name","LIKE","%{$request->input('query')}%"],
                             ['container_type', "=", 'ad']
            ])->get();
        return response()->json($data);
    }

    /**
     * Show the form for searchresults.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $input = $request->all();
        $query = [['isvalid','=',1]];
        $textsearch="";

        if($this->app_name=='gyertekel.hu') {
            $input['parent_id']=4;
        }
        if(isset($input['category']) && $input['category']!="") {
            array_push($query, ["categories_id","=",$input['category']]);
        }
        if(isset($input['when']) && $input['when']!="") {
            array_push($query, ['startdate','<=',$input['when']]);
            array_push($query, ['enddate','>=',$input['when']]);
        }
        if(isset($input['textsearch']) && $input['textsearch']!="") {
            $textsearch=$input['textsearch'];
        }
        //http://laravel.io/forum/09-18-2014-orm-query-where-clause-on-related-table
        //https://github.com/jarektkaczyk/eloquence
        $ads = Ads::with('city','category','tag', 'company','rooms')
                ->where($query)
                ->where(function ($query) use ($textsearch) {
                    $query->where("title","LIKE","%".$textsearch."%")
                          ->orWhere("description","LIKE","%".$textsearch."%")
                          ->orWhere(function($q) use ($textsearch) {
                                $q->whereHas('tag', function($cq) use ($textsearch) {
                                    $cq->where([['name', $textsearch],
                                                ['container_type', 'ad']
                                        ]);
                                });
                          })
                          ->orWhere(function($q) use ($textsearch) {
                                $q->whereHas('company', function($cq) use ($textsearch) {
                                    $cq->where('name',"LIKE","%".$textsearch."%");
                                });
                          })
                          ->orWhere(function($q) use ($textsearch) {
                                $q->whereHas('rooms', function($cq) use ($textsearch) {
                                    $cq->where('assets',"LIKE","%".$textsearch."%");
                                });
                          })
                          ;
                })
                ->where(function($q) use ($input) {
                    if(isset($input['citysearch']) && $input['citysearch']!="") {
                        $q->whereHas('city', function($cq) use ($input) {
                            $cq->where('name', $input["citysearch"]);
                        });
                }
                })
                ->where(function($q) use ($input){
                    if(isset($input['parent_id']) && $input['parent_id']!="") {
                        $q->whereHas('category', function($cq) use ($input) {
                            $cq->where('parent_id', $input["parent_id"]);
                        });
                    }
                })
                ->paginate(env('PAGINATION_SIZE'));
        return view('models.ads.index')->with('ads', $ads);
    }
}
