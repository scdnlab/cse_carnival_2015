@extends('carnival')

@section('content')
    <body onload="countdown(year,month,day,hour,minute)">

    <section class="header">
        <div id="window-height">
            <div class="heading-wrapper">

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

                <div class="heading-content text-center">
                    <div class="container">
                        <div class="timer">

                            <div class="row">
                                <h1>Time Remains</h1>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                                    <div class="numbers" id="count2"></div>
                                </div>

                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 counter1 text-center" id="spacer1">
                                    <div class="day numbers" id="dday"></div>
                                    <div class="hr numbers" id="dhour"></div>
                                    <div class="min numbers" id="dmin"></div>
                                    <div class="sec numbers" id="dsec"></div>
                                </div>
                            </div>
                        </div>  <!--  end of .timer  -->

                        <a href="{{url('/events')}}" class="btn btn-registeration text-capitalize">
                            Register now
                        </a>
                    </div>  <!-- end of .heading-content-->
                </div>
            </div> <!-- end of .heading-wrapper -->
        </div>
    </section> <!-- end of header section -->


    <!-- begin:about -->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About The Event
                        <small>You need to do is very simple just join us</small>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="#"><i class="fa fa-home"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>Great Venue</h3>
                            <hr class="hover-extend">
                            <p>
                               
                            </p>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="#"><i class="fa fa-users"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>Qualityful Judges</h3>
                            <hr class="hover-extend">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="#"><i class="fa fa-briefcase"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>Evening Party</h3>
                            <hr class="hover-extend">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>24/7 Support</h3>
                            <hr class="hover-extend">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end:about -->


    <!-- begin: schedule -->
    <section id="schedule" class="section dark">
        <div class="schedule-wrapper">
            <div class="container">
                <div class= "row text-center">
                    <div class="col-md-12">
                        <h2>Full Schedule
                            <small>Shortest way to explore what will happen on Carnival</small>
                        </h2>
                    </div>
                </div>
                <section class="nav-tabs-default">
                    <!-- Parent Nav Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#DayOne" data-toggle="tab">
                                    <div class="dayNumber">Day 1</div>
                                    <div class="date">08/10/2013</div>
                                </a>
                            </li>
                            <li>
                                <a href="#DayTwo" data-toggle="tab">
                                    <div class="dayNumber">Day 2</div>
                                    <div class="date">09/10/2013</div>
                                </a>
                            </li>
                        </ul> <!-- end of nav-tabs -->
          
                        <!-- Parent Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="DayOne">
                                <table class="text-center table table-bordered">
                                    <tr>
                                        <th>Time</th>
                                        <th>Programme Description</th>
                                    </tr>

                                    <tr>
                                        <td>08:00 AM</td>
                                        <td>Buses Leave from Sylhet city</td> 
                                    </tr>
                                    <tr>
                                        <td>09:15 AM</td>
                                        <td>Breakfast</td> 
                                    </tr>
                                    <tr>
                                        <td>09:30 AM</td>
                                        <td>Reporting, Registration, Carnival Kit Collection (except programming contest)</td> 
                                    </tr>
                                    <tr>
                                        <td>09:45 AM</td>
                                        <td>Project Showcasing Setup</td> 
                                    </tr>
                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>Inauguration Ceremony</td> 
                                    </tr> 
                                    <tr>
                                        <td>11:00 AM</td>
                                        <td>Project Showcasing Start</td>
                                    </tr>
                                    <tr>
                                        <td>11:30 AM</td>
                                        <td>Gaming Contest Start</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Inter University Software Contest Start</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Seminar</td> 
                                    </tr>
                                    <tr>
                                        <td>1:00 PM</td>
                                        <td>Lunch and Prayer break</td> 
                                    </tr>
                                    <tr>
                                        <td>3:00 PM</td>
                                        <td>SUST Inter University Programming Contest Registration</td> 
                                    </tr>
                                    <tr>
                                        <td>03:30 PM</td>
                                        <td>SUST Inter University Programming Contest (Mock)</td> 
                                    </tr>
                                    <tr>
                                        <td>05:00 PM</td>
                                        <td>All Programs Pause excluding SIUSC</td> 
                                    </tr>
                                    <tr>
                                        <td>05:30 PM</td>
                                        <td>Buses leave from SUST to Sylhet City</td> 
                                    </tr>

                                </table>
                                
                                <div class="clearfix"></div>
                
                            </div> <!-- end of .tab-pane #DayOne -->
                            <div class="tab-pane fade" id="DayTwo">
                                <table class="text-center table table-bordered">
                                    <tr>
                                        <th>Time</th>
                                        <th>Programme Description</th>
                                    </tr>

                                    <tr>
                                        <td>08:00 AM</td>
                                        <td>Buses Leave from Sylhet city</td> 
                                    </tr>
                                    <tr>
                                        <td>08:30 AM</td>
                                        <td>Breakfast and Rest of the Registration</td> 
                                    </tr>
                                    <tr>
                                        <td>09:00 AM</td>
                                        <td>SUST Inter University Programming Contest</td> 
                                    </tr>
                                    <tr>
                                        <td>09:30 AM</td>
                                        <td>Project Showcasing Resume</td> 
                                    </tr>
                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>Gaming Contest Resume</td> 
                                    </tr>
                                    <tr>
                                        <td>11:00 AM</td>
                                        <td>Project Showcasing Start</td> 
                                    </tr>
                                    <tr>
                                        <td>11:00 AM</td>
                                        <td>Seminar</td> 
                                    </tr>
                                    <tr>
                                        <td>11:30 AM</td>
                                        <td>Gaming Contest Start</td> 
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Inter University Software Contest End</td> 
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Seminar</td> 
                                    </tr>
                                    <tr>
                                        <td>1:00 PM</td>
                                        <td>Lunch and Prayer break</td> 
                                    </tr>
                                    <tr>
                                        <td>02:00 PM</td>
                                        <td>SUST Inter University Programming Contest End</td> 
                                    </tr>
                                    <tr>
                                        <td>03:30 PM</td>
                                        <td>Closing and Prize Giving Ceremony</td> 
                                    </tr>
                                    <tr>
                                        <td>05:00 PM</td>
                                        <td>Buses leave from SUST to Sylhet City</td> 
                                    </tr>

                                </table>
                            </div> <!-- end of .tab-pane #DayTwo -->
                        </div> <!-- end of tab-content of parent tab-pane -->
                    </section> <!-- end of nav-tabs-default -->
            </div> <!-- end of .container -->
        </div>
    </section>
    <!--  end of #schedule  -->


    <!-- begin: Top Speakers -->
    <!-- <section id="speakers">
        <div class="container">
            <div class= "row">
                <div class="col-md-12">
                    <h2>Top Speakers
                        <small>Awesome section description goes here.</small>
                    </h2>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-3 col-sm-6  animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="700">
                    <div class="thumbnail do-up no-border">
                        <img src="assets/img/speaker1.jpg" class="img-responsive center-block" alt="">
                        <div class="caption">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h4 class="caption-title"><b>Dr.</b> Md. Zafar Iqbal</h4>
                                    <p class="caption-category">
                                        Head of EEE Dept, SUST
                                    </p>
                                    <p class="caption-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed magna vel velit
                                    </p>
                                    <p class="caption-buttons">
                                        <a target="_blank" href="https://facebook.com" class="caption-social">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="https://twitter.com/" class="caption-social">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="https://www.linkedin.com/" class="caption-social">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6  animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="700">
                    <div class="thumbnail do-up no-border">
                        <img src="assets/img/speaker2.jpg" class="img-responsive center-block" alt="">
                        <div class="caption">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h4 class="caption-title"><b>Nicole</b> Doe</h4>
                                    <p class="caption-category">
                                        Cheif Financial Officer
                                    </p>
                                    <p class="caption-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed magna vel velit
                                    </p>
                                    <p class="caption-buttons">
                                        <a target="_blank" href="https://facebook.com" class="caption-social">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="https://twitter.com/" class="caption-social">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="https://www.linkedin.com/" class="caption-social">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6  animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="700">
                    <div class="thumbnail do-up no-border">
                        <img src="assets/img/speaker3.jpg" class="img-responsive center-block" alt="">
                        <div class="caption">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h4 class="caption-title"><b>Nick</b> Doe</h4>
                                    <p class="caption-category">
                                        Chief Marketing Officer
                                    </p>
                                    <p class="caption-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed magna vel velit
                                    </p>
                                    <p class="caption-buttons">
                                        <a target="_blank" href="https://facebook.com" class="caption-social">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="https://twitter.com/" class="caption-social">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="https://www.linkedin.com/" class="caption-social">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6  animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="700">
                    <div class="thumbnail do-up no-border">
                        <img src="assets/img/speaker4.jpg" class="img-responsive center-block" alt="">
                        <div class="caption">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h4 class="caption-title"><b>Vicky</b> Doe</h4>
                                    <p class="caption-category">
                                        Senior Manager
                                    </p>
                                    <p class="caption-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed magna vel velit
                                    </p>
                                    <p class="caption-buttons">
                                        <a target="_blank" href="https://facebook.com" class="btn caption-social">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="https://twitter.com/" class="btn caption-social">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="https://www.linkedin.com/" class="btn caption-social">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --> <!--  end of #speakers  -->



    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop