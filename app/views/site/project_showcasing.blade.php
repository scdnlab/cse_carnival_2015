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
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Nothing is published yet</h2>
                </div>
            </div>

            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Important Dates</h2>

                        <table class="text-center table table-bordered">
                            <tr>
                                <th>Date</th>
                                <th>Programme Description</th>
                            </tr>

                            <tr>
                                <td>30/9/2015</td>
                                <td>Registration close</td> 
                            </tr>
                            <tr>
                                <td>09/10/2015</td>
                                <td>Programme Starts</td> 
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