<?php
namespace App\Http\Controllers;

// Used for text generation
use Badcow\LoremIpsum\Generator as LoremIpsum;
// User for profile generation
use Faker\Factory as Faker;
// Parse form input
use Input;

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
	public function text($paragraphs = 1, $json = true) 
	{
		$generator = new LoremIpsum;
		// Generate desired number of text paragraphs
		$paragraphs = $generator->getParagraphs($paragraphs);

		// Return JSON or generic object response
		if ($json) {		
			return response()->json($paragraphs);
		} else {
			return $paragraphs;
		}
	}

	/**
	 * Generate a number of test profiles and return via JSON
	 *
	 * @return Response in JSON
	 */
	public function profile($count = 1, $profile = 1, $birthdate = 1, $address = 1, $json = true)
	{
		$generator = Faker::create();
		// Create a profiles array based on required fake data to create
		$profiles = array();
		for($i = 1; $i<= $count; $i++) {
			array_push(
				$profiles, 
				array(
					'name' 		=> $generator->name,
					'profile' 	=> $profile ? $generator->text(200) : null,
					'birthdate' => $birthdate ? $generator->dateTimeThisCentury->format('m/d/y') : null ,
					'address' 	=> $address ? nl2br($generator->address) : null
				)
			);
		}

		// Return JSON or generic object response
		if ($json) {		
			return response()->json($profiles);
		} else {
			return $profiles;
		}
	}

	public function textbuild()
	{
		$count = Input::get('count');
		// Check if we get integer input or default to 2
		if (!is_integer($count)) {
			$count = 2;
		}

		$results = $this->text($count, false);
		return view('textbuild')->with('text', $results)->with('json',json_encode($results));
	}

	public function profilebuild()
	{
		$count = Input::get('count');
		$profile = Input::get('profile');
		$birthdate = Input::get('birthdate');
		$address = Input::get('address');

		// Check if we get integer input or default to 2
		if (!is_integer($count)) {
			$count = 2;
		}

		$results = $this->profile($count, $profile, $birthdate, $address, false);
		return view('profilebuild')->with('profiles', $results)->with('json',json_encode($results));
	}

}