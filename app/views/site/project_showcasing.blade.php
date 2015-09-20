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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/ps_banner.png')}}');">
        <div class="header-wrapper" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Project Showcasing</li>
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
                        <h2>Participants</h2>
                        <ol>
                            <li>
                                Maximum <b>3</b> Members in a Group
                            </li>
                            <li>
                                Open only for UNIVERSITY Students
                            </li>
                            <li>
                                Only registered projects will be allowed
                            </li>
                            <li>
                                Participants should bring their University ID Card Or Recommendation Letter when registering.

                            </li>
                        </ol>
                    </div>
                </div>
            </section>

            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Registration Fees</h2>
                            <p>Registration Fee <b>1200.00 BDT</b> per team(3 members).</p>
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
                                <td>21 September 2015</td>
                                <td>Registration Start</td> 
                            </tr>
                            <tr>
                                <td>7 October 2015</td>
                                <td>Registration Close</td> 
                            </tr>
                            <tr>
                                <td>8 October 2015</td>
                                <td>Selected Team List will be Published</td> 
                            </tr>
                            <tr>
                                <td>12 October 2015</td>
                                <td>Payment Deadline</td> 
                            </tr>

                        </table>
                    </div>
                </div>
            </section>

            <section class="quick-registration-link" align=center>
            <a href="{{route('reg.pc')}}" class="btn btn-black">Register Now</a>
            </section>
            
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop