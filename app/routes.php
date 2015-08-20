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

/*=============================================
		Event module
===============================================*/

Route::get('/programmingevent',function(){
	return View::make('site.programming_contest')
				->with('title','CSE Carnival 2015');

});

Route::get('/softwareevent',function(){
	return View::make('site.software_contest')
				->with('title','CSE Carnival 2015');

});

Route::get('/projectevent',function(){
	return View::make('site.project_showcasing')
				->with('title','CSE Carnival 2015');

});

Route::get('/gameevent',function(){
	return View::make('site.gaming_contest')
				->with('title','CSE Carnival 2015');

});


/*========================================
			Team Module
============================================*/

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



/**Registration Module */


//programming contest
Route::get('registration/programmingContest',['as' => 'reg.pc', 'uses' => 'ContestController@pc']);
Route::post('registration/programmingContest',['as' => 'reg.pc.store', 'uses' => 'ContestController@pc_store']);

//software contest
Route::get('registration/softwareContest',['as' => 'reg.sc', 'uses' => 'ContestController@sc']);
Route::post('registration/softwareContest',['as' => 'reg.sc.store', 'uses' => 'ContestController@sc_store']);

//project showcasing
Route::get('registration/projectShowcasing',['as' => 'reg.ps', 'uses' => 'ContestController@ps']);
Route::post('registration/projectShowcasing',['as' => 'reg.ps.store', 'uses' => 'ContestController@ps_store']);

//gaming contest
Route::get('registration/gamingCompetition',['as' => 'reg.gc', 'uses' => 'ContestController@gc']);
Route::post('registration/gamingContest',['as' => 'reg.gc.store', 'uses' => 'ContestController@gc_store']);


// conatact
Route::get('/contact',function(){
	return View::make('site.contact')
				->with('title','CSE Carnival 2015');

});