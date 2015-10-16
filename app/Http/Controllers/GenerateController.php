<?php
namespace App\Http\Controllers;
use Faker\Factory;

class GenerateController extends Controller
{
	/**
	 * Generate a number of text paragraphs and return via JSON
	 *
	 * @return Response
	 */
	public function index($paragraphs = 1)
	{
		if (!is_integer($paragraphs)) {
			$paragraphs = 1;
		}

		$results = $this->generateParagraphs($paragraphs);

		return response()->json($results);
	}

	public function generateParagraphs($count) 
	{
		$generator = App::make('LoremIpsumGenerator');
		$paragraphs = $generator->getParagraphs($paragraphs);		
		$results = implode('<p>', $paragraphs);
		return $results;
	}

	public function profile($count = 1, $profile = 1, $birthdate = 1, $address = 1)
	{
		$generator = Faker\Factory::create();
		$results = array();
		for($i = 1; $i<= $count; $i++) {
			array_push(
				$results, 
				array(
					'name' => $generator->name,
					'profile' => $profile ? $generator->text(200) : null,
					'birthdate' => $birthdate ? $generator->dateTimeThisCentury->format('m/d/y') : null ,
					'address' => $address ? $generator->address : null
				)
			);
		}

		return response()->json(array('users' => $results));
	}

}