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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('login', array('as' => 'login', 'uses' => 'loginController@getLogin'));
Route::post('login', array('uses' => 'loginController@postLogin'));


//restrict home pages
Route::group(['middleware' => 'App\http\Middleware\UserMiddleware'], function(){

	Route::get('Saleperson/{users1}', array('as' => 'saleperson', function($users1){
			return View('home.saleperson', ['name' => $users1]);
		}));
	Route::get('Production/{users1}', array('as' => 'production', function($users1){
	 		return View('home.production', ['name' => $users1]);
		}));
  Route::get('Admin/{users1}', array('as' => 'manager', function($users1){
	 		return View('home.saleperson', ['name' => $users1]);
		}));

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
