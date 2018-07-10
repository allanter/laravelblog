<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/hello', function () {
    // return view('welcome');
    return 'Hello world';
});
*/

/*
Route::get('/about', function(){
// '/about' gives lsapp.dev/about

    return view ('pages.about');
});

Route::get('/users/{id}', function($id){
    // from DB. Webpage will return "This is user 'id'"
    
        return 'This is user '.$id;
    });

Route::get('/users/{id}/{name}', function($id, $name){
    // from DB. Webpage will return "This is user 'ter' with an 'id' of '2'"
    
        return 'This is user '.$name.' with an id of ' .$id;
    });
*/

Route::get('/', 'PagesController@index' );

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
//automatically map routes to those function
    