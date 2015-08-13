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
    <!-- header begin -->
    <header class="page-head">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Registration</a></li>
                            <li class="active">Project Showcasing Registration</li>
                        </ol> <!-- end of /.breadcrumb -->

                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <div class="contact-form">
                <form method="post" >
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="team-info">

                                <div class="row">

                                    <h3 class="text-center">Team Info</h3>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control empty iconified" name="TeamName" id="name" required="required" placeholder="&#xf0c0;   Team Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control empty iconified" name="UniversityName" id="name" required="required">
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

                            <h3 class="text-center">Advisor Info</h3>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control empty iconified" name="AdvisorName" id="name" required="required" placeholder="&#xf183;   Name">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="email" class="form-control empty iconified" name="AdvisorEmail" id="email" required="required" placeholder="&#xf0e0;   E-mail">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="tel" class="form-control empty iconified" name="AdvisorMobile" id="mobile" required="required" placeholder="&#xf10b;   Mobile No.">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="file" class="form-control empty" name="AdvisorPhoto" id="photo" required="required">
                                </div>
                            </div>
                        </div>

                    </div> <!-- end of /.coach-info -->

                    <div class="row">
                        <div class="team-member-info">
                            <div class="col-md-4">
                                <h3 class="text-center">Member1</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control empty iconified" name="Member1Name" id="name" required="required" placeholder="&#xf183;   Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control empty iconified" name="Member1Email" id="email" required="required" placeholder="&#xf0e0;   E-mail">
                                </div>

                                <div class="form-group">
                                    <input type="tel" class="form-control empty iconified" name="Member1Mobile" id="mobile" required="required" placeholder="&#xf10b;   Mobile No.">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control empty iconified" name="Member1Id" id="studentId" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control empty iconified" name="Member1Photo" id="photo" required="required">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h3 class="text-center">Member2</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control empty iconified" name="Member2Name" id="name" required="required" placeholder="&#xf183;   Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control empty iconified" name="Member2Email" id="email" required="required" placeholder="&#xf0e0;   E-mail">
                                </div>

                                <div class="form-group">
                                    <input type="tel" class="form-control empty iconified" name="Member2Mobile" id="mobile" required="required" placeholder="&#xf10b;   Mobile No.">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control empty iconified" name="Member2Id" id="studentId" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control empty" name="Member2Photo" id="photo" required="required">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h3 class="text-center">Member3</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control empty iconified" name="Member3Name" id="name" required="required" placeholder="&#xf183;   Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control empty iconified" name="Member3Email" id="email" required="required" placeholder="&#xf0e0;   E-mail">
                                </div>

                                <div class="form-group">
                                    <input type="tel" class="form-control empty iconified" name="Member3Mobile" id="mobile" required="required" placeholder="&#xf10b;   Mobile No.">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control empty iconified" name="Member3Id" id="studentId" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control empty" name="Member3Photo" id="photo" required="required" placeholder="Upload your photo">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of /.team-memmber-info -->

                    <button type="submit" id="submit" name="submit" class="btn btn-black center-block">Submit <i class="fa fa-paper-plane"></i></button>
                </form> <!-- form end -->
            </div> <!-- end of /.contact-form -->
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop