<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Categories;
use App\Models\Cities;
use App\Models\Tags;
use Illuminate\Http\Request;

use Debugbar;

class SearchController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Categories::whereNull('parent_id')->get(['name','id']);
        $categories = array();
        foreach ($cats as $element) {
            $categories[$element->id]=$element->name;
        }
        $subcategories = Categories::pluck('name','id');
        return view('welcome', ['categories' => $categories,
                                'subcategories' => $subcategories
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
        $query = [];

        if(isset($input['category']) && $input['category']!="") {
            array_push($query, ["categories_id","=",$input['category']]);
        }
        if(isset($input['textsearch']) && $input['textsearch']!="") {
            array_push($query, ["title","LIKE","%".$input['textsearch']."%"]);
        }
        //http://laravel.io/forum/09-18-2014-orm-query-where-clause-on-related-table
        $ads = Ads::with('city','category')
                ->where($query)
                ->when($input['citysearch'], function($q) use ($input) {
                    $q->whereHas('city', function($cq) use ($input) {
                        $cq->where('name', $input["citysearch"]);
                });
                })
                ->when($input['parent_id'], function($q) use ($input){
                    $q->whereHas('category', function($cq) use ($input) {
                        $cq->where('parent_id', $input["parent_id"]);
                });
                })
                ->paginate(4);
        return view('models.ads.index')->with('ads', $ads);
    }
}
