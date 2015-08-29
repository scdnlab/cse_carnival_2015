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
<header class="page-head">
    <div class="header-wrapper" style="background-image: url('{{asset('img/menu_banner.png')}}');">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Events</li>
                    </ol> 

                </div>
            </div>
        </div> --> <!-- /.container -->
    </div> <!-- /.header-wrapper -->
</header> <!-- /.page-head (header end) -->


<section id="events" class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>All Our Events
                    <small>The Event Description of This Programme</small>
                </h2>
            </div>
        </div>

        <div class="event-description">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive center-block" src="assets/img/bla.jpg" alt="Event Featured Image">
                </div>

                <div class="col-md-6">
                    <h3>SUST Inter University Programming Contest (SIUPC)</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <a href="programming_registration.html" class="btn btn-black">Registration Now</a>
                </div>
            </div>
        </div>

        <div class="event-description">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <img class="img-responsive center-block" src="assets/img/bla.jpg" alt="Event Featured Image">
                </div>

                <div class="col-md-6 col-md-pull-6">
                    <h3>SUST Inter University Software Contest (SIUSC)</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <a href="software_registration.html" class="btn btn-black">Registration Now</a>
                </div>
            </div>
        </div>


        <div class="event-description">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive center-block" src="assets/img/bla.jpg" alt="Event Featured Image">
                </div>

                <div class="col-md-6">
                    <h3>Project Showcasing Event</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <a href="product_showcase_registration.html" class="btn btn-black">Registration Now</a>
                </div>
            </div>
        </div>


        <div class="event-description">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <img class="img-responsive center-block" src="assets/img/bla.jpg" alt="Event Featured Image">
                </div>

                <div class="col-md-6 col-md-pull-6">
                    <h3>Gaming Competition</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <a href="game_registration.html" class="btn btn-black">Registration Now</a>
                </div>
            </div>
        </div>

    </div>
</section>


<!--  Necessary scripts  -->
<!--  Necessary scripts  -->

@include('site_includes.footer')
@stop