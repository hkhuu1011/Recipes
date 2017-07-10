<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use Unirest\Request as Unirest;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function search() {
        return view('search.create');

    }

    public function searchrecipes(Request $request){
        $ingredient = $request -> input('ingredients');

        $response = Unirest::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/findByIngredients?fillIngredients=true&ingredients=" . urlencode($ingredient) . "&number=20",
               array(
                   "X-Mashape-Key" => "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc",
                   "Accept" => "application/json"
               )
            );

        return view('search.index')->withSearch($response->body);
    }

    public function selectedrecipe(Request $request){
        echo 'clicked link';
//        $id = $request -> click('$item->title');
//        $response = Unirest\::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/{id}/information?includeNutrition=true",
//            array(
//                "X-Mashape-Key" => "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc",
//                "Accept" => "application/json"
//            )
//        );
//
//        return view('search.show');
    }


    public function index()
    {
//        Grabbing from database
//        $search = Search::orderBy('created_at', 'desc')->get();
//        return view('search.index')->with('search', $search);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('search.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'ingredients' => 'required'
//        ]);
//
//        // Add Search Value
//        $search = new Search;
//        $search->ingredients = $request->input('ingredients');
//        $search->save();
//
//        return redirect('/search')->with('success', 'Searched!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
