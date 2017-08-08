<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/results', 'PagesController@results');

//Route::resource('search', 'SearchController');

Route::get('/search', 'SearchController@search');

Route::get('/searchrecipes', 'SearchController@searchrecipes');

Route::get('/selectedrecipe/{id}', 'SearchController@selectedrecipe');

Route::get('/saved', 'SearchController@index');

//Route::post('/saved', 'SearchController@store');

//Route::get('/save-recipe/{id}', 'SearchController@saverecipe');

Route::get('/save-recipe/{id}/{title}/{image}', 'SearchController@saverecipe')->where('image', '(.*)');

Route::get('/selectsaved/{id}', 'SearchController@selectsaved');

Route::post('save-notes/{id}/{notes}');