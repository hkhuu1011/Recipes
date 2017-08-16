<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\Note;
use Unirest\Request as Unirest;


class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function search()
    {
        return view('search.create');

    }

    public function searchrecipes(Request $request)
    {
        $ingredient = $request -> input('ingredients');

        $response = Unirest::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/findByIngredients?fillIngredients=true&ingredients=" . urlencode($ingredient) . "&number=21",
               array(
                   "X-Mashape-Key" => "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc",
                   "Accept" => "application/json"
               )
            );

        return view('search.index')->withSearch($response->body);
    }


    public function selectedrecipe($id)
    {
        $response = Unirest::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/" . $id . "/information?includeNutrition=true",
            array(
                "X-Mashape-Key" => "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc",
                "Accept" => "application/json"
            )
        );

//        print_r ($response->body->analyzedInstructions[0]);
//        return view('search.show', ['data' => $response->body]);

        return view('search.show')->withSelected($response->body);
    }

    public function saverecipe($id, $title, $image)
    {
        $search = new Search;
        $search->recipe_id = $id;
        $search->title = $title;
        $search->image = $image;
        $search->save();

//        $searches = Search::all();
        $searches = Search::orderBy('created_at', 'desc')->get();
        return redirect('/saved')->with('searches', $searches);

//        return redirect('/saved')->with('success', 'Recipe Saved!');
    }

    public function selectsaved($recipe_id)
    {
        $response = Unirest::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/" . $recipe_id . "/information?includeNutrition=true",
            array(
                "X-Mashape-Key" => "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc",
                "Accept" => "application/json"
            )
        );

//        print_r ($response->body->analyzedInstructions[0]);
//        return view('search.show', ['data' => $response->body]);
//        $notes = Note::all();
//        $notes = Note::find($recipe_id)->where('recipe_id');
        $notes = Note::where('recipe_id', '=', $recipe_id)->get();
        return view('search.edit')->withSelected($response->body)->with('notes', $notes);

    }

    public function savenotes($id, Request $request)
    {
        $this->validate($request, [
            'notes' => 'required'
        ]);

        // Create Notes
        $note = new Note;
        $note->recipe_id = $id;
        $note->notes = $request->input('notes');

        $note->save();

//        $notes = Note::orderBy('created_at', 'desc')->get();
        return redirect('/selectsaved/'. $id)->with('success', 'Notes Saved!');
//        return redirect('/selectsaved/'. $id)->with('notes', $notes);

    }

//    public function notes($id)
//    {
//        $notes = Note::all();
//        $notes = Note::orderBy('created_at', 'desc')->get();
//        return redirect('/selectsaved/'. $id)->withSelected('notes', $notes);
//    }


    public function index()
    {

        $searches = Search::all();
        return view('search.saved')->with('searches', $searches);

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
