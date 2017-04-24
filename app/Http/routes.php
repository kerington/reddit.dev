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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     return view('my-first-view');
// });

//TO ECHO A NAME//
Route::get('/sayhello/{name?}', function($name) {

	$data = ['name'=> $name];

    return view('my-first-view', $data);
});

// Route::get('/sayhello', function()
// {
//     return "Hello, Codeup!";
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     return "Hello, $name!";
// });

// Route::get('/sayhello/{name?}', function($name = 'World')
// {
//     return "Hello, $name!";
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris") {
//         return redirect('/');
//     }

//     return "Hello, $name!";
// });

//UPPERCASE//
// Route::get('/uppercase/{word}', function($word) {
// 	return strtoupper($word);
// });

//INCREMENT//
// Route::get('/increment/{number}', function($number) {
// 	if(is_numeric($number)) {
// 		return $number + 1;
// 	} else {
// 		return $number . "is not a number and cannot be incremented.";
// 	}
// });

//ADD//
// Route::get('/add/{num1}/{num2}', function ($num1, $num2) {
// 	if(is_numeric($num1) && is_numeric($num2)) {
// 		return $num1 + $num2;
// 		} else {
// 			return "Both parameters must be numeric.";
// 		}
// });

//RANDOM NUMBER//
Route::get('/rolldice/{guess?}', function($guess=null) {
    $random = mt_rand(1,6);
    $data = array('random' => $random, 'guess' => $guess);

    return view('roll-dice', $data);
});

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris") {
//         return Redirect::to('/');

//     }

//     $data = array('name' => $name);
//     return view('my-first-view', $data);
// });





