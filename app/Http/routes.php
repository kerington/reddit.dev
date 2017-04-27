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
// PageController
// Router
/*switch ($path) {
    case '/': // in Laravel it looks like Route::get('/', function () {
        // our controller logic
        return  view('welcome');
        break;
    case '/ads/new': // Route::get('/ads/new', function () {
        break;
    case '/ads/edit': // Route::get('/ads/edit', function () {
        break;
}*/

Route::get('/from/{start}/to/{end}', 'HomeController@showNumbers');

Route::get('/', 'HomeController@showWelcomePage');

Route::get('/sayhello/{name?}', 'HomeController@sayHello');

Route::get('/uppercase/{word}' /* path */, /* controller@method */'HomeController@uppercased');

Route::get('/rolldice/{guess}', 'ExampleController@rollDice');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::get('/add/{num1}/{num2}', 'ExampleController@addition');

/*// CRUD operations for posts
Route::get('/posts', 'PostsController@index'); // show all the posts
Route::get('/posts/create', 'PostsController@create'); // show the form to create a post
Route::post('/posts', 'PostsController@store'); // save the new post
Route::get('/posts/{posts}', 'PostsController@show'); // show a specific post (by id)
Route::get('/posts/{posts}/edit', 'PostsController@edit'); // show the form to edit a post
Route::put('/posts/{posts}', 'PostsController@update'); // update the post in the database
Route::delete('/posts/{posts}', 'PostsController@destroy'); // delete a post*/

Route::resource('posts', 'PostsController');  // A resource controller

// Route::resource('students', 'StudentsController');  // A resource controller

Route::get('orm-test', function ()
{
    /*$user = new \App\User();
    $user->name = 'Keri';
    $user->email = 'kmchesire@gmail.com';
    $user->password = 'password';
    $user->save();
    $post = new \App\Models\Post();
    $post->title = 'My second post';
    $post->content = 'My second post content';
    $post->url = 'http://codeup.com';
    $post->created_by = $user->id;
    $post->save();*/
    // return \App\Models\Post::all();
    $post = \App\Models\Post::find(3); // I will need to call find first if I want to update
    $post->content = 'Some other content';
    $post->save(); // update
});