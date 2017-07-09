<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $search = Search::orderBy('created_at', 'desc')->take(1)->get();
//        $ingredients =
//        $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/findByIngredients?fillIngredients=true&ingredients=$search&number=10",
//            array(
//                "X-Mashape-Key" => "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc",
//                "Accept" => "application/json"
//            )
//        );
//
//        return json_encode($response->body);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
