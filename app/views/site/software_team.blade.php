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
    <!-- header begin -->
    <header class="page-head">
        <div class="header-wrapper" style="background-image: url('{{asset('img/menu_banner.png')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Teams</a></li>
                            <li class="active">Software Contest Teams</li>
                        </ol> <!-- end of /.breadcrumb -->

                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <!-- <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Team Number</th>
                            <th>Team Name</th>
                            <th>University Name</th>
                            <th>Team Details</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>sust illutionist</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td><a href="#softwareTeam1" class="btn btn-default fancybox">View Details</a></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>sust illutionist</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td><a href="#softwareTeam2" class="btn btn-default fancybox">View Details</a></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>sust illutionist</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td><a href="#softwareTeam3" class="btn btn-default fancybox">View Details</a></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>sust illutionist</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td><a href="#softwareTeam4" class="btn btn-default fancybox">View Details</a></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>sust illutionist</td>
                            <td>shahjalal university of science &amp; technology</td>
                            <td><a href="#softwareTeam5" class="btn btn-default fancybox">View Details</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section> -->


    <!--  Team Details Pop up -->


    <!-- <div id="softwareTeam1" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <img src="assets/img/speaker1.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Team Coach">
                    <h4><em>Md. Saiful Islam Saif</em></h4>
                    <p>Coach, Team Name</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/speaker2.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Md. Al-amin Nowshad</em></h4>
                        <p>Participant 1, Team Name</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="assets/img/speaker3.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Md. Mustafijur Rahman Nebir</em></h4>
                        <p>Participant 2, Team Name</p>
                    </div>

                    <div class="col-md-4">
                        <img src="assets/img/speaker4.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Shoeb Alam</em></h4>
                        <p>Participant 3, Team Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="softwareTeam2" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <img src="assets/img/speaker1.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Team Coach">
                    <h4><em>Dr. Md. Zafar Iqbal</em></h4>
                    <p>Coach, Team Name</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/speaker2.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Foysal Ahmed Emon</em></h4>
                        <p>Participant 1, Team Name</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="assets/img/speaker3.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Abu Shahriar Ratul</em></h4>
                        <p>Participant 2, Team Name</p>
                    </div>

                    <div class="col-md-4">
                        <img src="assets/img/speaker4.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Shibbir Ahmed Osmani</em></h4>
                        <p>Participant 3, Team Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="softwareTeam3" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <img src="assets/img/speaker1.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Team Coach">
                    <h4><em>Dr. Md. Zafar Iqbal</em></h4>
                    <p>Coach, Team Name</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/speaker2.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Foysal Ahmed Emon</em></h4>
                        <p>Participant 1, Team Name</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="assets/img/speaker3.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Abu Shahriar Ratul</em></h4>
                        <p>Participant 2, Team Name</p>
                    </div>

                    <div class="col-md-4">
                        <img src="assets/img/speaker4.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Shibbir Ahmed Osmani</em></h4>
                        <p>Participant 3, Team Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="softwareTeam4" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <img src="assets/img/speaker1.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Team Coach">
                    <h4><em>Dr. Md. Zafar Iqbal</em></h4>
                    <p>Coach, Team Name</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/speaker2.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Foysal Ahmed Emon</em></h4>
                        <p>Participant 1, Team Name</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="assets/img/speaker3.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Abu Shahriar Ratul</em></h4>
                        <p>Participant 2, Team Name</p>
                    </div>

                    <div class="col-md-4">
                        <img src="assets/img/speaker4.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Shibbir Ahmed Osmani</em></h4>
                        <p>Participant 3, Team Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="softwareTeam5" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <img src="assets/img/speaker1.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Team Coach">
                    <h4><em>Dr. Md. Zafar Iqbal</em></h4>
                    <p>Coach, Team Name</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/speaker2.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Foysal Ahmed Emon</em></h4>
                        <p>Participant 1, Team Name</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="assets/img/speaker3.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Abu Shahriar Ratul</em></h4>
                        <p>Participant 2, Team Name</p>
                    </div>

                    <div class="col-md-4">
                        <img src="assets/img/speaker4.jpg" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>Shibbir Ahmed Osmani</em></h4>
                        <p>Participant 3, Team Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Not selected yet</h2>
                </div>
            </div>
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop