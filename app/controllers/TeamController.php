<?php

class TeamController extends \BaseController {

	//programming contest
	public function pc(){
		return View::make('site.programming_team')
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. SUST Inter University Programming Contest');
	}


	//software contest
	public function sc(){
		return View::make('site.software_team')
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. SUST Inter University Programming Contest');
	}


	//project showcase 
	public function ps(){
		return View::make('site.project_team')
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. Project Showcasing');
	}



	//gaming 
	public function gc(){
		return View::make('site.game_team')
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. Gaming Contest');
	}

}