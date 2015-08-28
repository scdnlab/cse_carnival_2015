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
    <header class="page-head">
        <div class="header-wrapper" style="background-image: url('{{asset('img/menu_banner.png')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Gaming Contest</li>
                        </ol> <!-- end of /.breadcrumb -->

                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Fifa 14</h2>
                        <ol>
                            <li>
                                <h3>Registration</h3>
                                <p>
                                    Only individual registration is allowed.There are no teams.
                                    <br>
                                    At first online registration must be done.
                                </p>
                            </li>
                            <li>
                                <h3>Registration Fees</h3>
                                <p>Registration fee Tk. 400.00 per participant.</p>
                            </li>
                            <li>
                                <h3>Rules for the event</h3>
                                <p>
                                    The tournament will be on FIFA 15 which will be played on PC.
                                    <br>
                                    Competition method is (Game Pad Player vs Game Pad Player) or (GamePad Player vs Keyboard Player)
                                    <br>
                                    Each Game will be played on HOME-AWAY basis.
                                    <br>
                                    Players are requested to bring their own accessories like Game Pad, Headphone and Keyboard (recommended).
                                    <br>
                                    Defending style is Tactical.
                                    <br>
                                    In all cases, decisions taken by the Organizing Committee will be final.
                                    <br>
                                    Detail rules can be downloaded from     <a href="#">FIFA 14 Rules</a>
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop