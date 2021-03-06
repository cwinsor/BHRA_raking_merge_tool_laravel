<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
Route::get('/', function () {
    return view('welcome');
});

//Route::get('bhra', function () {
//    return view('bhra/home');
//});

Route::get('bhra-gett', 'BhraController@gett');
Route::get('bhra-gett-view', 'BhraController@gettView');

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('articles', 'ArticlesController@index');

Route::get('volunteerrakers', 'VolunteerRakersController@index');
Route::get('volunteerraker/create', 'VolunteerRakersController@create');
Route::get('volunteerraker/{id}', 'VolunteerRakersController@show');
Route::post('volunteerraker', 'VolunteerRakersController@store');
