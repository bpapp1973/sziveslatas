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
        
        if(isset($input['citysearch']) && $input['citysearch']!="") {
            $city = Cities::where("name","=",$input['citysearch'])->get();
            array_push($query, ["cities_id","=",$city[0]->id]);
        }
        
        if(isset($input['textsearch']) && $input['textsearch']!="") {
            array_push($query, ["title","LIKE","%".$input['textsearch']."%"]);
        }
        $ads = Ads::where($query)->get();
        return view('models.ads.index')->with('ads', $ads);
    }

}
