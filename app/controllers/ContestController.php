<?php

class ContestController extends \BaseController {

	
	//programming contest
	public function pc(){
		return View::make('site.programming_registration')
				->with('title','CSE Carnival 2015');
	}

	public function pc_store(){
		$rules =[
			'team_name'		=> 'required|unique:registration',
			'university'	=>	'required',

			'coach_name'	=>	'required',
			'coach_email'	=>	'required',
			'coach_mobile'	=>	'required',	
			'coach_photo'	=>	'required|mimes:jpg,png,jpeg',	

			'member1_name'	=>	'required',
			'member1_email'	=>	'required',
			'member1_mobile'	=>	'required',	
			'member1_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member1_id_photo'	=>	'required|mimes:jpg,png,jpeg',

			'member2_name'	=>	'required',
			'member2_email'	=>	'required',
			'member2_mobile'	=>	'required',	
			'member2_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member2_id_photo'	=>	'required|mimes:jpg,png,jpeg',

			'member3_name'	=>	'required',
			'member3_email'	=>	'required',
			'member3_mobile'	=>	'required',	
			'member3_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member3_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('coach_photo') && Input::hasFile('member1_photo') 
				&& Input::hasFile('member1_id_photo') && Input::hasFile('member2_photo')
				&& Input::hasFile('member2_id_photo') && Input::hasFile('member3_photo')
				&& Input::hasFile('member3_id_photo'))
        	{
        	  //path
        	  $destinationPath = public_path('uploads/registration');



        	  $coach_photo = Input::file('coach_photo');
	          $coach_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($coach_photo->getClientOriginalName()).".".$coach_photo->getClientOriginalExtension();
	          $coach_photo->move($destinationPath, $coach_photo_fileName);

	          $member1_photo = Input::file('member1_photo');
	          $member1_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
	          $member1_photo->move($destinationPath, $member1_photo_fileName);

	          $member1_id_photo = Input::file('member1_id_photo');
	          $member1_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
	          $member1_id_photo->move($destinationPath, $member1_id_photo_fileName);


	          $member2_photo = Input::file('member2_photo');
	          $member2_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
	          $member2_photo->move($destinationPath, $member2_photo_fileName);

	          $member2_id_photo = Input::file('member2_id_photo');
	          $member2_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
	          $member2_id_photo->move($destinationPath, $member2_id_photo_fileName);


	          $member3_photo = Input::file('member3_photo');
	          $member3_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
	          $member3_photo->move($destinationPath, $member3_photo_fileName);

	          $member3_id_photo = Input::file('member3_id_photo');
	          $member3_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
	          $member3_id_photo->move($destinationPath, $member3_id_photo_fileName);



	          	$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				$reg->coach_name= $data['coach_name'];
				$reg->coach_email= $data['coach_email'];
				$reg->coach_mobile= $data['coach_mobile'];
				$reg->coach_photo= $coach_photo_fileName;

				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_mobile= $data['member1_mobile'];
				$reg->member1_photo= $member1_photo_fileName;
				$reg->member1_id_photo= $member1_id_photo_fileName;

				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_mobile= $data['member2_mobile'];
				$reg->member2_photo= $member2_photo_fileName;
				$reg->member2_id_photo= $member2_id_photo_fileName;

				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_mobile= $data['member3_mobile'];
				$reg->member3_photo= $member3_photo_fileName;
				$reg->member3_id_photo= $member3_id_photo_fileName;

				$reg->contest = 'pc';
				$reg->status=0;

				 if($reg->save())
		            return Redirect::route('reg.pc')
		                    ->with('success', "Registration Successful");
		         else
		            return Redirect::route('reg.pc')->with('error',"Photos error, Please Try Again");


        	}
        	else{
        		return Redirect::route('reg.pc')->with('error',"Photos error, Please Try Again");
        	}

		}

	}

	//software contest
	public function sc(){
		return View::make('site.software_registration')
				->with('title','CSE Carnival 2015');
	}

	public function sc_store(){
		$rules =[
			'team_name'		=> 'required|unique:registration',
			'university'	=>	'required',

			'coach_name'	=>	'required',
			'coach_email'	=>	'required',
			'coach_mobile'	=>	'required',	
			'coach_photo'	=>	'required|mimes:jpg,png,jpeg',	

			'member1_name'	=>	'required',
			'member1_email'	=>	'required',
			'member1_mobile'	=>	'required',	
			'member1_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member1_id_photo'	=>	'required|mimes:jpg,png,jpeg',

			'member2_name'	=>	'required',
			'member2_email'	=>	'required',
			'member2_mobile'	=>	'required',	
			'member2_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member2_id_photo'	=>	'required|mimes:jpg,png,jpeg',

			'member3_name'	=>	'required',
			'member3_email'	=>	'required',
			'member3_mobile'	=>	'required',	
			'member3_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member3_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('coach_photo') && Input::hasFile('member1_photo') 
				&& Input::hasFile('member1_id_photo') && Input::hasFile('member2_photo')
				&& Input::hasFile('member2_id_photo') && Input::hasFile('member3_photo')
				&& Input::hasFile('member3_id_photo'))
        	{
        	  //path
        	  $destinationPath = public_path('uploads/registration');



        	  $coach_photo = Input::file('coach_photo');
	          $coach_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($coach_photo->getClientOriginalName()).".".$coach_photo->getClientOriginalExtension();
	          $coach_photo->move($destinationPath, $coach_photo_fileName);

	          $member1_photo = Input::file('member1_photo');
	          $member1_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
	          $member1_photo->move($destinationPath, $member1_photo_fileName);

	          $member1_id_photo = Input::file('member1_id_photo');
	          $member1_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
	          $member1_id_photo->move($destinationPath, $member1_id_photo_fileName);


	          $member2_photo = Input::file('member2_photo');
	          $member2_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
	          $member2_photo->move($destinationPath, $member2_photo_fileName);

	          $member2_id_photo = Input::file('member2_id_photo');
	          $member2_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
	          $member2_id_photo->move($destinationPath, $member2_id_photo_fileName);


	          $member3_photo = Input::file('member3_photo');
	          $member3_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
	          $member3_photo->move($destinationPath, $member3_photo_fileName);

	          $member3_id_photo = Input::file('member3_id_photo');
	          $member3_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
	          $member3_id_photo->move($destinationPath, $member3_id_photo_fileName);



	          	$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				$reg->coach_name= $data['coach_name'];
				$reg->coach_email= $data['coach_email'];
				$reg->coach_mobile= $data['coach_mobile'];
				$reg->coach_photo= $coach_photo_fileName;

				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_mobile= $data['member1_mobile'];
				$reg->member1_photo= $member1_photo_fileName;
				$reg->member1_id_photo= $member1_id_photo_fileName;

				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_mobile= $data['member2_mobile'];
				$reg->member2_photo= $member2_photo_fileName;
				$reg->member2_id_photo= $member2_id_photo_fileName;

				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_mobile= $data['member3_mobile'];
				$reg->member3_photo= $member3_photo_fileName;
				$reg->member3_id_photo= $member3_id_photo_fileName;

				$reg->contest = 'sc';
				$reg->status=0;

				 if($reg->save())
		            return Redirect::route('reg.sc')
		                    ->with('success', "Registration Successful");
		         else
		            return Redirect::route('reg.sc')->with('error',"Photos error, Please Try Again");


        	}
        	else{
        		return Redirect::route('reg.sc')->with('error',"Photos error, Please Try Again");
        	}

		}

	}


	//project showcase 
	public function ps(){
		return View::make('site.project_show_registration')
				->with('title','CSE Carnival 2015');
	}

	public function ps_store(){
		$rules =[
			'team_name'		=> 'required|unique:registration',
			'university'	=>	'required',

			'coach_name'	=>	'required',
			'coach_email'	=>	'required',
			'coach_mobile'	=>	'required',	
			'coach_photo'	=>	'required|mimes:jpg,png,jpeg',	

			'member1_name'	=>	'required',
			'member1_email'	=>	'required',
			'member1_mobile'	=>	'required',	
			'member1_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member1_id_photo'	=>	'required|mimes:jpg,png,jpeg',

			'member2_name'	=>	'required',
			'member2_email'	=>	'required',
			'member2_mobile'	=>	'required',	
			'member2_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member2_id_photo'	=>	'required|mimes:jpg,png,jpeg',

			'member3_name'	=>	'required',
			'member3_email'	=>	'required',
			'member3_mobile'	=>	'required',	
			'member3_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member3_id_photo'	=>	'required|mimes:jpg,png,jpeg',

		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('coach_photo') && Input::hasFile('member1_photo') 
				&& Input::hasFile('member1_id_photo') && Input::hasFile('member2_photo')
				&& Input::hasFile('member2_id_photo') && Input::hasFile('member3_photo')
				&& Input::hasFile('member3_id_photo'))
        	{
        	  //path
        	  $destinationPath = public_path('uploads/registration');



        	  $coach_photo = Input::file('coach_photo');
	          $coach_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($coach_photo->getClientOriginalName()).".".$coach_photo->getClientOriginalExtension();
	          $coach_photo->move($destinationPath, $coach_photo_fileName);

	          $member1_photo = Input::file('member1_photo');
	          $member1_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_photo->getClientOriginalName()).".".$member1_photo->getClientOriginalExtension();
	          $member1_photo->move($destinationPath, $member1_photo_fileName);

	          $member1_id_photo = Input::file('member1_id_photo');
	          $member1_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member1_id_photo->getClientOriginalName()).".".$member1_id_photo->getClientOriginalExtension();
	          $member1_id_photo->move($destinationPath, $member1_id_photo_fileName);


	          $member2_photo = Input::file('member2_photo');
	          $member2_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_photo->getClientOriginalName()).".".$member2_photo->getClientOriginalExtension();
	          $member2_photo->move($destinationPath, $member2_photo_fileName);

	          $member2_id_photo = Input::file('member2_id_photo');
	          $member2_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member2_id_photo->getClientOriginalName()).".".$member2_id_photo->getClientOriginalExtension();
	          $member2_id_photo->move($destinationPath, $member2_id_photo_fileName);


	          $member3_photo = Input::file('member3_photo');
	          $member3_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_photo->getClientOriginalName()).".".$member3_photo->getClientOriginalExtension();
	          $member3_photo->move($destinationPath, $member3_photo_fileName);

	          $member3_id_photo = Input::file('member3_id_photo');
	          $member3_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member3_id_photo->getClientOriginalName()).".".$member3_id_photo->getClientOriginalExtension();
	          $member3_id_photo->move($destinationPath, $member3_id_photo_fileName);



	          	$reg = new Registration();
				$reg->team_name= $data['team_name'];
				$reg->university= $data['university'];

				$reg->coach_name= $data['coach_name'];
				$reg->coach_email= $data['coach_email'];
				$reg->coach_mobile= $data['coach_mobile'];
				$reg->coach_photo= $coach_photo_fileName;

				$reg->member1_name= $data['member1_name'];
				$reg->member1_email= $data['member1_email'];
				$reg->member1_mobile= $data['member1_mobile'];
				$reg->member1_photo= $member1_photo_fileName;
				$reg->member1_id_photo= $member1_id_photo_fileName;

				$reg->member2_name= $data['member2_name'];
				$reg->member2_email= $data['member2_email'];
				$reg->member2_mobile= $data['member2_mobile'];
				$reg->member2_photo= $member2_photo_fileName;
				$reg->member2_id_photo= $member2_id_photo_fileName;

				$reg->member3_name= $data['member3_name'];
				$reg->member3_email= $data['member3_email'];
				$reg->member3_mobile= $data['member3_mobile'];
				$reg->member3_photo= $member3_photo_fileName;
				$reg->member3_id_photo= $member3_id_photo_fileName;

				$reg->contest = 'ps';
				$reg->status=0;

				 if($reg->save())
		            return Redirect::route('reg.ps')
		                    ->with('success', "Registration Successful");
		         else
		            return Redirect::route('reg.ps')->with('error',"Photos error, Please Try Again");


        	}
        	else{
        		return Redirect::route('reg.ps')->with('error',"Photos error, Please Try Again");
        	}

		}

	}


	//gaming 
	public function gc(){
		return View::make('site.game_registration')
				->with('title','CSE Carnival 2015');
	}

	public function gc_store(){


		$rules =[

			'member_name'	=>	'required',
			'member_email'	=>	'required',
			'member_mobile'	=>	'required',	
			'member_photo'	=>	'required|mimes:jpg,png,jpeg',
			'member_id_photo'	=>	'required|mimes:jpg,png,jpeg',	
			'contest'	=>	'required',	


		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else{

			if (Input::hasFile('member_photo') && Input::hasFile('member_id_photo'))
        	{
        	  //path
        	  $destinationPath = public_path('uploads/registration');



        	  $member_photo = Input::file('member_photo');
	          $member_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member_photo->getClientOriginalName()).".".$member_photo->getClientOriginalExtension();
	          $member_photo->move($destinationPath, $member_photo_fileName);

	          $member_id_photo = Input::file('member_id_photo');
	          $member_id_photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($member_id_photo->getClientOriginalName()).".".$member_id_photo->getClientOriginalExtension();
	          $member_id_photo->move($destinationPath, $member_id_photo_fileName);

	         	
	          	foreach ($data['contest'] as $contest) {
	          		$flag_done=false;
	          		$reg = new RegistrationGames();
					$reg->member_name= $data['member_name'];
					$reg->member_email= $data['member_email'];
					$reg->member_mobile= $data['member_mobile'];
					$reg->member_photo= $member_photo_fileName;
					$reg->member_id_photo= $member_id_photo_fileName;
					$reg->contest=$contest;
					$reg->status=0;
					if($reg->save()){
						$flag_done=true;
					}
	          	}


				 if($flag_done)
		            return Redirect::route('reg.gc')
		                    ->with('success', "Registration Successful");
		         else
		            return Redirect::route('reg.gc')->with('error',"Photos error, Please Try Again");


        	}
        	else{
        		return Redirect::route('reg.gc')->with('error',"Photos error, Please Try Again");
        	}

		}

	}

}