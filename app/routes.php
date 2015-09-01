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





/**Event Module */

//programming contest
Route::get('event/programmingContest',['as' => 'event.pc', 'uses' => 'EventController@pc']);

//software contest
Route::get('event/softwareContest',['as' => 'event.sc', 'uses' => 'EventController@sc']);

//project showcasing
Route::get('event/projectShowcasing',['as' => 'event.ps', 'uses' => 'EventController@ps']);

//gaming contest
Route::get('event/gamingCompetition',['as' => 'event.gc', 'uses' => 'EventController@gc']);



/**Team Module */

//programming contest
Route::get('team/programmingContest',['as' => 'team.pc', 'uses' => 'TeamController@pc']);

//software contest
Route::get('team/softwareContest',['as' => 'team.sc', 'uses' => 'TeamController@sc']);

//project showcasing
Route::get('team/projectShowcasing',['as' => 'team.ps', 'uses' => 'TeamController@ps']);

//gaming contest
Route::get('team/gamingCompetition',['as' => 'team.gc', 'uses' => 'TeamController@gc']);




/**Result Module */

//programming contest
Route::get('result/programmingContest',['as' => 'result.pc', 'uses' => 'ResultController@pc']);

//software contest
Route::get('result/softwareContest',['as' => 'result.sc', 'uses' => 'ResultController@sc']);

//project showcasing
Route::get('result/projectShowcasing',['as' => 'result.ps', 'uses' => 'ResultController@ps']);

//gaming contest
Route::get('result/gamingCompetition',['as' => 'result.gc', 'uses' => 'ResultController@gc']);



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