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

Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'home'
]);

Route::get('about', 'PagesController@about');

Route::group(array('prefix' => 'articles'), function(){

	Route::get('/', 'ArticlesController@index');
	Route::get('/api', 'ArticlesController@api');
	Route::get('/{id}', 'ArticlesController@show');
});



Route::group(array('prefix' => 'admin'), function(){
	Route::get('/', 'ArticlesController@index');
});
