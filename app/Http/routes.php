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

// Generate a number of paragraphs based on the count parameter
Route::get('/loremipsum/{count}', function($count = 1) {
	$generator = new Badcow\LoremIpsum\Generator;
	$paragraphs = $generator->getParagraphs($count);		
	return response()->json(array('text' => $paragraphs));
});

// Generate a number of fake profiles based on 
Route::get('/usergenerator/{count}/{profile}/{birthdate}/{address}', function($count = 1, $profile = 1, $birthdate = 0, $address = 0) {
	$generator = Faker\Factory::create();
	$results = array();
	for($i = 1; $i<= $count; $i++) {
		array_push(
			$results, 
			array(
				'name' => $generator->name,
				'profile' => $profile ? $generator->text(200) : null,
				'birthdate' => $birthdate ? $generator->dateTimeThisCentury->format('m/d/y') : null ,
				'address' => $address ? $generator->address : null,
			)
		);
	}

	return response()->json(array('users' => $results));
});

Route::get('/generate/profile/{count}/{profile}/{birthdate}/{address}', 'GenerateController@profile');

