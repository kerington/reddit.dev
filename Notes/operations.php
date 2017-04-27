<?php

Route::get('/uppercase/{word}' /*path */ , /* controller@method*/'ExampleController@uppercased');
Route::get('/rolldice/{guess}', 'ExampleController@rollDice');
Route::get('/increment/{number?}', 'ExampleController@@increment');
Route::get('/add/{num1}/{num2}', 'ExampleController@addition');


//CRUD operations for posts
// Route::get('/posts', 'PostsController@index'); //show all the posts
// Route::get('/posts/create', 'PostsController@create'); //show the form to create a post
// Route::post('/posts', 'PostsController@store'); //save the new post
// Route::get('/posts/{posts}', 'PostsController@show'); //show a specific post
// Route::get('/posts/{posts}/edit', 'PostsController@edit'); //show the form to edit a post
// Route::put('/posts/{posts}', 'PostController@update'); //update the post in the database
// Route::delete('/posts/{posts}', 'PostsController@destroy'); //delete a post


Route::resource('posts', 'PostsController'); //A resource controller

// Add a return value to each of the methods in the PostsController that describes what the method should do based on the table in this lesson.
	// For example, we said that the index method should return a list of all posts, so going to reddit.dev/posts should return the string 'A listing of all posts'.

// Access the GET routes (using info from the table) and see if you get the appropriate returns.




public function create () {
	return view('students.create');
}







?>