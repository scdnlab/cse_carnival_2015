@extends('carnival')

@section('content')


    <body>

    <!--
    =============================================
      top navigation bar
    =============================================
    -->

    @include('site_includes.topbar')
            <!-- top navigation bar FINISH-->

    <!--
    =============================================
        main navigation bar
    =============================================
    -->

    @include('site_includes.navbar')
            <!-- end of /#navigation -->
    <!-- header begin -->
    <!-- header begin -->
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/pc_banner.png')}}');">
        <div class="header-wrapper">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Registration</a></li>
                            <li class="active">Programming Contest Registration</li>
                        </ol> 

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <div class="contact-form">
            @include('site_includes.alert')
            {{ Form::open(array('route' => 'reg.pc.store', 'files' => true)) }}

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="team-info">

                                <div class="row">

                                    <h3 class="text-center">Team Info</h3>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::text('team_name', null, array('class' => 'form-control empty iconified', 'id'  => 'team_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf0c0;   Team Name')) }}
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <select class="form-control empty iconified" name="university" id="university" required="required">
                                                <option value="" selected disabled>Please Select Your University</option>
                                                <option>Ahsanullah University of Science and Technology</option>
                                                <option>America Bangladesh University</option>
                                                <option>American International University-Bangladesh</option>
                                                <option>Asa University Bangladesh</option>
                                                <option>Asian University of Bangladesh</option>
                                                <option>Atish Dipankar University of Science and Technology</option>


                                                <option>Bangabandhu Sheikh Mujibur Rahman Science and Technology University</option>
                                                <option>Bangladesh University of Engineering and Technology</option>
                                                <option>Begum Rokeya University</option>
                                                <option>Bangladesh Islami University</option>
                                                <option>Bangladesh University of Business and Technology</option>
                                                <option>Bangladesh University</option>
                                                <option>Begum Gulchemonara Trust University Bangladesh</option>
                                                <option>BRAC University</option>


                                                <option>Chittagong University of Engineering & Technology</option>
                                                <option>Comilla University</option>
                                                <option>Central Women's University</option>
                                                <option>Chittagong Independent University (CIU)</option>
                                                <option>City University, Bangladesh</option>
                                                <option>Coxs Bazar International University</option>


                                                <option>Dhaka University of Engineering & Technology</option>
                                                <option>Daffodil International University</option>
                                                <option>Darul Ihsan University</option>
                                                <option>Dhaka International University</option>

                                                <option>East Delta University</option>
                                                <option>East West University</option>
                                                <option>Eastern University, Bangladesh</option>
                                                <option>European University of Bangladesh</option>

                                                <option>Gono Bishwabidyalay</option>
                                                <option>Green University of Bangladesh</option>


                                                <option>Hajee Mohammad Danesh Science & Technology University</option>
                                                

                                                <option>Islamic University,Kushtia</option>
                                                <option>Islamic University of Technology</option>
                                                <option>IBAIS University</option>
                                                <option>Independent University, Bangladesh</option>
                                                <option>International Islamic University, Chittagong</option>
                                                <option>International University of Business Agriculture and Technology</option>


                                                <option>Jagannath University</option>
                                                <option>Jahangirnagar University</option>
                                                <option>Jatiya Kabi Kazi Nazrul Islam University</option>
                                                <option>Jessore University of Science & Technology</option>


                                                <option>Khulna University of Engineering & Technology</option>
                                                <option>Khulna University</option>
                                                <option>Khwaja Yunus Ali University</option>

                                                <option>Leading University</option>


                                                <option>Mawlana Bhashani Science and Technology University</option>
                                                <option>Military University of Science and Technology</option>
                                                <option>Mymensingh Engineering College</option>
                                                <option>Manarat International University</option>
                                                <option>Metropolitan University, Sylhet</option>
                                                <option>Millennium University</option>


                                                <option>Noakhali Science and Technology University</option>
                                                <option>North South University</option>
                                                <option>North Western University, Bangladesh</option>
                                                <option>Northern University, Bangladesh</option>
                                                <option>Notre Dame University Bangladesh</option>


                                                <option>Pabna University of Science and Technology</option>
                                                <option>Patuakhali Science and Technology University</option>
                                                <option>People's University of Bangladesh</option>
                                                <option>Port City International University</option>
                                                <option>Premier University, Chittagong</option>
                                                <option>Presidency University, Kolkata</option>
                                                <option>Prime University</option>
                                                <option>Primeasia University</option>

                                                <option>Queens University (Bangladesh)</option>


                                                <option>Rajshahi University of Engineering & Technology</option>
                                                <option>Royal University of Dhaka</option>


                                                <option>Shahjalal University of Science and Technology</option>
                                                <option>Sylhet Engineering College</option>
                                                <option>Shanto-Mariam University of Creative Technology</option>
                                                <option>Sonargaon University</option>
                                                <option>Southeast University (Bangladesh)</option>
                                                <option>Southern University, Bangladesh</option>
                                                <option>Stamford University Bangladesh</option>
                                                <option>State University of Bangladesh</option>
                                                <option>Sylhet International University</option>


                                                <option>University of Barisal</option>
                                                <option>University of Chittagong</option>
                                                <option>University of Dhaka</option>
                                                <option>University of Rajshahi</option>
                                                <option>United International University</option>
                                                <option>University of Asia Pacific (Bangladesh)</option>
                                                <option>University of Development Alternative</option>
                                                <option>University of Information Technology and Sciences</option>
                                                <option>University of Liberal Arts Bangladesh</option>
                                                <option>University of Science & Technology Chittagong</option>
                                                <option>University of South Asia, Bangladesh</option>
                                                <option>Uttara University</option>
                                                <option>Varendra University</option>
                                                <option>Victoria University of Bangladesh</option>
                                                <option>World University of Bangladesh</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of /.team-info -->

                    <div class="row">

                        <div class="coach-info">

                            <!-- <div class="col-md-12">
                                <h2>Coach Info :</h2>
                            </div> -->

                            <h3 class="text-center">Coach Info</h3>

                            <div class="col-md-3">
                                <div class="form-group">
                                    {{ Form::text('coach_name', null, array('class' => 'form-control empty iconified', 'id'  => 'coach_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf183;   Name')) }}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    {{ Form::email('coach_email', null, array('class' => 'form-control empty iconified', 'id'  => 'coach_email', 'required'  =>  'required', 'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    {{ Form::text('coach_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'coach_mobile', 'required'  =>  'required', 'placeholder'   =>  '&#xf10b;   Mobile No.')) }}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button class="file-input btn btn-file" id="">
                                        Upload Photo
                                    {{ Form::file('coach_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'coach_photo')) }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end of /.coach-info -->

                    <div class="row">
                        <div class="team-member-info">
                            
                            <div class="col-md-4">
                                <h3 class="text-center">Member1</h3>
                                <div class="form-group">
                                    {{ Form::text('member1_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf183;   Name')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::email('member1_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_email', 'required'  =>  'required', 'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::text('member1_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member1_mobile', 'required'  =>  'required', 'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                                <div class="form-group">
                                    <button class="file-input btn btn-file" id="">
                                        Upload Photo
                                        {{ Form::file('member1_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member1_photo')) }}
                                     </button>

                                </div>

                                <div class="form-group">
                                <button class="file-input btn btn-file" id="">
                                Upload Scan Copy of Student ID
                                {{ Form::file('member1_id_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member1_id_photo')) }}
                                </button>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h3 class="text-center">Member2</h3>
                                <div class="form-group">
                                    {{ Form::text('member2_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf183;   Name')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::email('member2_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_email', 'required'  =>  'required', 'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::text('member2_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member2_mobile', 'required'  =>  'required', 'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                                <div class="form-group">
                                    <button class="file-input btn btn-file" id="">
                                    Upload Photo
                                    {{ Form::file('member2_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member2_photo')) }}
                                    </button>
                                </div>

                                <div class="form-group">
                                <button class="file-input btn btn-file" id="">
                                Upload Scan Copy of Student ID
                                {{ Form::file('member2_id_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member2_id_photo')) }}
                                </button>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <h3 class="text-center">Member3</h3>
                                <div class="form-group">
                                    {{ Form::text('member3_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf183;   Name')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::email('member3_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_email', 'required'  =>  'required', 'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::text('member3_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member3_mobile', 'required'  =>  'required', 'placeholder'   =>  '&#xf10b;   Mobile No.')) }}                                </div>

                                <div class="form-group">
                                    <button class="file-input btn btn-file" id="">
                                    Upload Photo
                                    {{ Form::file('member3_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member3_photo')) }}
                                    </button>
                                </div>

                                <div class="form-group">
                                <button class="file-input btn btn-file" id="">
                                Upload Scan Copy of Student ID
                                {{ Form::file('member3_id_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member3_id_photo')) }}
                                </button>
                                </div>
                            </div>

                            
                        </div>
                    </div> <!-- end of /.team-memmber-info -->

                    <button type="submit" id="submit" name="submit" class="btn btn-black center-block" style="margin-bottom: 70px;">Submit <i class="fa fa-paper-plane"></i></button>
                </form> <!-- form end -->
            </div> <!-- end of /.contact-form -->
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop