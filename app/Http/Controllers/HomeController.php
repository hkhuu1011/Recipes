<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unirest\Request as Unirest;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Unirest::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/random?limitLicense=false&number=20",
            array(
                "X-Mashape-Key" => "9ub7D5HCt5mshVvYO5Gq6ApS1GvRp1ZIouOjsnN9KNREY35tAc",
                "Accept" => "application/json"
            )
        );
        $prepared_data = [];
//        foreach ($response->body as $item => $result) {
//            echo '<pre>';
//            print_r($item) . print_r($result);
//
//        }
//        die;

//        print_r($response);

//        return view('home');
//        return view('home', ['data' => $response->body]);
        return view('home')->withRecipes($response->body->recipes);
    }
}
