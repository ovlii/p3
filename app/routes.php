<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use Paste\Pre;
use Badcow\LoremIpsum;
use Faker\Factory;
use Xi\RandomString;

Route::get('/', function()
{
     return View::make('index'); 
});

Route::get('/lorem', function()
{
     return View::make('lorem'); 
});

Route::post('/lorem', function() 
{
	$nums = Input::get('num_paragraphs');
    $generator = new LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($nums);
	
     return View::make('lorem')->with('paragraphs', $paragraphs);          
});

Route::get('/random', function()
{
     return View::make('random'); 
});

Route::post('/random', function() 
{
	 $results = array();
	 $data = array();
	 
	 $user = Input::get('num_users');
	 $add = Input::get('address');
	 $birthdate = Input::get('birthdate');
	 $profile = Input::get('profile');
     $faker = Faker\Factory::create();	
	 
   		 for ($i = 0 ; $i <= $user; $i++ ) {
		
			 $name = $faker->name;
			 $address = $faker->address;
			 $dob = $faker->dateTimeThisCentury->format('Y-m-d');	
			 $text = $faker->text;  
	   
			 $data['user'] = $name;
			 
			 if ($add == 1 ) {
				 $data['address'] = $address;
			 }
			 if ($birthdate == 1 ) {
				 $data['dob'] = $dob;
			 }
			 if ($profile == 1 ) {
				 $data['text'] = $text;
			 }
	   
			 $results[] = $data;
	   	  
 		}	 
		 return View::make('random')-> with('results',$results);    
 
	       
});

Route::get('/xkcdp', function()
{
	return View::make('xkcdp');
});

Route::post('xkcdp',function() {

 	$words = Input::get('num_words');
 	$random = Input::get('random_num');
 	$special_chars = Input::get('special_chars');
 	$separator = ( Input::get('separator') == '' ? '~' : 
				   Input::get('separator') );
	$make_upper = Input::get('make_upper');
	
	$result_password = '';
	
	    $faker = Faker\Factory::create();	
		for ( $i = 0 ; $i < $words ; $i++ ) {
		
			$result_password = ( $result_password == '' ? $faker->word: 
													   $result_password . $separator . $faker->word);				

		}
		if ($random == 1 ) {
			$result_password .= rand(0,9);  
		}
	
		if ($special_chars == 1) {
			$result_password .= chr(rand(33,47));
		}
	
		if ($make_upper == 1) {
			$result_password = strtoupper($result_password);
		}
	
		return View::make('xkcdp')->with('result_password',$result_password);
		
		
});