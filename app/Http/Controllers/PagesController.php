<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function results(){
        $title = 'Results';
        return view('pages.results')->with('title', $title);
    }
}
