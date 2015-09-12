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
                                                <option value="sust">Shahjalal University of Science &amp; Technology, SUST</option>
                                                <option value="buet">Bangladesh University of Engineering &amp; Technology, BUET</option>
                                                <option value="kuet">Khulna University of Engineering &amp; Technology, KUET</option>
                                                <option value="cuet">Chittagong University of Engineering &amp; Technology, CUET</option>
                                                <option value="ruet">Rajshahi University of Engineering &amp; Technology, RUET</option>
                                                <option value="du">Dhaka University, DU</option>
                                                <option value="ju">Jahangirnagar University, JU</option>
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