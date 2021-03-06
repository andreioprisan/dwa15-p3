<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Default generator endpoint
Route::get('/generate', 'GenerateController@index');
// View for paragraph generation
Route::get('/generate/textbuild', 'GenerateController@textbuild');
// Generate a number of paragraphs based on the count parameter
Route::get('/generate/paragraphs/{count}', 'GenerateController@text');
// View for profile generation
Route::get('/generate/profilebuild', 'GenerateController@profilebuild');
// Generate a number of fake profiles based on 
Route::get('/generate/profile/{count}/{profile}/{birthdate}/{address}', 'GenerateController@profile');

