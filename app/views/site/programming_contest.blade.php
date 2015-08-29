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
                            <li><a href="#">Events</a></li>
                            <li class="active">Programming Contest</li>
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
                        <p>
                            Teams including 3 members and a coach from different universities from all over the country will be participating in RUET NCPC 2015. Each contestant must be a student enrolled in a degree program at the participating institution with at least a half-time load. A representative of the participating university, typically a faculty member, must be designated as the team coach. The team coach certifies the eligibility of contestants and serves as the official point-of-contact with the team, prior to and during contest activities. Participating universities will be issued an invitation letter by postal mail.
                        </p>
                    </div>
                </div>
            </section>


            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Criteria for Team Slots</h2>
                        <ol>
                            <li>
                                Every university participating in International Collegiate Programming Contest (ICPC), Dhaka Regional Final 2014 will get at least one team.
                            </li>
                            <li>
                                For any university extra N team(s) will get the chance to participate, depending on ICPC 2014 Dhaka site event performance.
                            </li>
                            <li>
                                The program committee reserves all the rights to accept or reject any additional teams after fulfilling the above-mentioned criterion.
                            </li>
                            <li>
                                The contest hosting university may be allowed to additional teams, which will be decided by program committee.
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