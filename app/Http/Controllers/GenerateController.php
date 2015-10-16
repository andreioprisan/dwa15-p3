<?php
namespace App\Http\Controllers;

// Used for text generation
use Badcow\LoremIpsum\Generator as LoremIpsum;
// User for profile generation
use Faker\Factory as Faker;

class GenerateController extends Controller
{
	/**
	 * Generate a number of text paragraphs and return via JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		// Show valid endpoints and parameters
		return response()->json("Please use either /generate/paragraphs/{count} or /generate/profile/{count}/{profile}/{birthdate}/{address} functions.");
	}

	/**
	 * Generate a number of text paragraphs and return via JSON
	 *
	 * @return Response in JSON
	 */
	public function text($paragraphs = 1) 
	{
		$generator = new LoremIpsum;
		// Generate desired number of text paragraphs
		$paragraphs = $generator->getParagraphs($paragraphs);		
		return response()->json(array('text' => $paragraphs));
	}

	/**
	 * Generate a number of test profiles and return via JSON
	 *
	 * @return Response in JSON
	 */
	public function profile($count = 1, $profile = 1, $birthdate = 1, $address = 1)
	{
		$generator = Faker::create();
		// Create a results array based on required fake data to create
		$results = array();
		for($i = 1; $i<= $count; $i++) {
			array_push(
				$results, 
				array(
					'name' => $generator->name,
					'profile' => $profile ? $generator->text(200) : null,
					'birthdate' => $birthdate ? $generator->dateTimeThisCentury->format('m/d/y') : null ,
					'address' => $address ? nl2br($generator->address) : null
				)
			);
		}

		return response()->json(array('users' => $results));
	}

}