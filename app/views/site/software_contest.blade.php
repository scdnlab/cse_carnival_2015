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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/sc_banner.png')}}');">
        <div class="header-wrapper" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Software Contest</li>
                        </ol>

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">

            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Contest Format</h2>
                        <ol>
                            <li>
                                Track: <b>Web [PHP/ASP.NET/Java] and Mobile [Android/iOS/Windows]</b>
                            </li>
                            <li>
                                Every Team must has to contain 3 members
                            </li>
                            <li>
                            <b>24</b> Hours Long [12 PM - 12 PM] 
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Participants Rules</h2>
                        <ol>
                            <li>
                                Only One Team from a University can participate in a Single Track, so Two team for Two Tracks
                            </li>
                            <li>
                                Every Team has to develop a System within the Time Limit
                            </li>
                            <li>
                                An Online based MCQ Test will be taken
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Registration Fees</h2>
                            <p>Registration Fee <b>2000.00 BDT</b> per team(3 members).</p>
                    </div>
                </div>
            </section>

            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Important Dates</h2>

                        <table class="text-center table table-bordered " >
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                            </tr>

                            <tr>
                                <td>1 September 2015</td>
                                <td>Registration Start</td> 
                            </tr>
                            <tr>
                                <td>15 September 2015</td>
                                <td>Registration Close</td> 
                            </tr>
                            <tr>
                                <td>17 September 2015</td>
                                <td>Selected Team List will be Published</td> 
                            </tr>
                            <tr>
                                <td>20 September 2015</td>
                                <td>Payment Deadline</td> 
                            </tr>

                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop