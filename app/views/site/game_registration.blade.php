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
                            <li class="active">Gaming Competition Registration</li>
                        </ol> <!-- end of /.breadcrumb -->

                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->

    <section class="main-content">
        <div class="container">
            <div class="contact-form">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" >
                            <div class="form-group">
                                <input type="text" class="form-control empty iconified" name="ParticipantName" id="name" required="required" placeholder="&#xf183;   Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control empty iconified" name="ParticipantEmail" id="email" required="required" placeholder="&#xf0e0;   E-mail">
                            </div>

                            <div class="form-group">
                                <input type="tel" class="form-control empty iconified" name="ParticipantMobile" id="mobile" required="required" placeholder="&#xf10b;   Mobile No.">
                            </div>

                            <div class="checkbox">
                                <h4>Which game do you want to play?</h4>
                                <label>
                                    <input type="checkbox" value="NFS">
                                    Need For Speed (NFS)
                                </label>
                                <label>
                                    <input type="checkbox" value="FIFA">
                                    FIFA 15
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="studentId">Upload Scan Copy of Your Student ID</label>
                                <input type="file" class="form-control empty iconified" name="ParticipantId" id="studentId" required="required">
                            </div>

                            <div class="form-group">
                                <label for="photo">Upload Your Photo</label>
                                <input type="file" class="form-control empty iconified" name="ParticipantPhoto" id="photo" required="required">
                            </div>

                            <button type="submit" id="submit" name="submit" class="btn btn-black center-block">Submit <i class="fa fa-paper-plane"></i></button>
                        </form> <!-- form end -->
                    </div>
                </div>
            </div> <!-- end of /.contact-form -->
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop