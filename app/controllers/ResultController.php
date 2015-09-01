<?php

class ResultController extends \BaseController {

	//programming contest
	public function pc(){
		return View::make('site.programming_result')
				->with('title','CSE Carnival 2015');
	}


	//software contest
	public function sc(){
		return View::make('site.software_result')
				->with('title','CSE Carnival 2015');
	}


	//project showcase 
	public function ps(){
		return View::make('site.project_show_result')
				->with('title','CSE Carnival 2015');
	}



	//gaming 
	public function gc(){
		return View::make('site.game_result')
				->with('title','CSE Carnival 2015');
	}


}