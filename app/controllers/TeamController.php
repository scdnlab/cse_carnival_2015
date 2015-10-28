<?php

class TeamController extends \BaseController {

	//programming contest
	public function pc(){

		$teams = Registration::where('contest','=', 'pc')->orderBy('university', 'ASC')->get();

		return View::make('site.programming_team')
				->with('teams',$teams)
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. SUST Inter University Programming Contest');
	}


	//software contest
	public function sc(){
		$teams = Registration::where('contest','=', 'sc')->orderBy('university', 'ASC')->get();

		return View::make('site.software_team')
				->with('teams',$teams)
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. SUST Inter University Software Contest');
	}


	//project showcase 
	public function ps(){
		$teams = Registration::where('contest','=', 'ps')->orderBy('university', 'ASC')->get();

		return View::make('site.project_team')
				->with('teams',$teams)
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. Project Showcasing');
	}



	//gaming 
	public function gc(){
		$teams = RegistrationGames::orderBy('id', 'ASC')->get();

		return View::make('site.game_team')
				->with('teams',$teams)
				->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. Gaming Contest');
	}

	//gaming cs
	public function gc_cs(){
		$teams = RegistrationGamesCS::orderBy('id', 'ASC')->get();

		return View::make('site.game_cs_team')
			->with('teams',$teams)
			->with('title','IPvision SUST CSE Carnival 2015 ::. Team ::. Gaming Contest ::. Counter Strike');
	}

}