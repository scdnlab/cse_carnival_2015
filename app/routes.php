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

Route::group(['prefix' => 'admin'], function(){
	Route::get('/',function(){
		return Redirect::route('dashboard');
	});

});


Route::group(['before' => 'guest','prefix' => 'admin'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'AuthController@login']);
	Route::post('login', array('uses' => 'AuthController@doLogin'));


});

Route::group(array('before' => 'auth','prefix' => 'admin'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));


});
Route::get('/',function(){
	return View::make('site.home')
				->with('title','CSE Carnival 2015');

});

Route::get('/events',function(){
	return View::make('site.events')
				->with('title','CSE Carnival 2015');

});

Route::get('/schedule',function(){
	return View::make('site.schedule')
				->with('title','CSE Carnival 2015');

});

Route::get('/programmingteam',function(){
	return View::make('site.programming_team')
				->with('title','CSE Carnival 2015');

});

Route::get('/softwareteam',function(){
	return View::make('site.software_team')
				->with('title','CSE Carnival 2015');

});

Route::get('/projectteam',function(){
	return View::make('site.project_team')
				->with('title','CSE Carnival 2015');

});

Route::get('/gameteam',function(){
	return View::make('site.game_team')
				->with('title','CSE Carnival 2015');

});

Route::get('/programmingresult',function(){
	return View::make('site.programming_result')
				->with('title','CSE Carnival 2015');

});

Route::get('/softwareresult',function(){
	return View::make('site.software_result')
				->with('title','CSE Carnival 2015');

});

Route::get('/projectresult',function(){
	return View::make('site.project_show_result')
				->with('title','CSE Carnival 2015');

});

Route::get('/gameresult',function(){
	return View::make('site.game_result')
				->with('title','CSE Carnival 2015');

});

Route::get('/programming_registration',function(){
	return View::make('site.programming_registration')
				->with('title','CSE Carnival 2015');

});

Route::get('/software_registration',function(){
	return View::make('site.software_registration')
				->with('title','CSE Carnival 2015');

});

Route::get('/project_show_registration',function(){
	return View::make('site.project_show_registration')
				->with('title','CSE Carnival 2015');

});

Route::get('/game_registration',function(){
	return View::make('site.game_registration')
				->with('title','CSE Carnival 2015');

});