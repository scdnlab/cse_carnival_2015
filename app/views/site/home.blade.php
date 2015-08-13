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

                        <a href="registration.html" class="btn btn-registeration text-capitalize">
                            Registration now
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
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
                            <small>Shortest way to explore what will happen on Curnival</small>
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
                        <li>
                            <a href="#DayThree" data-toggle="tab">
                                <div class="dayNumber">Day 3</div>
                                <div class="date">10/10/2013</div>
                            </a>
                        </li>
                    </ul> <!-- end of nav-tabs -->

                    <!-- Parent Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="DayOne">

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#DayOne-1" data-toggle="tab">Auditorium 1</a></li>
                                <li><a href="#DayOne-2" data-toggle="tab">Auditorium 2</a></li>
                                <li><a href="#DayOne-3" data-toggle="tab">Auditorium 3</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="DayOne-1">
                                    <div class="panel-group timeline-schedule" id="panelTimelineOne">
                                        <div class="panel panel-default">
                                            <div class="speaker-wrapper">
                                                <img src="assets/img/speaker-01.jpg" class="img-responsive img-circle" alt="speaker-1" />
                                            </div>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <div class="time"><i class="fa fa-clock-o"></i> 2:20 PM</div>
                                                    <a data-toggle="collapse" data-parent="#panelTimelineOne" href="#itemOne">
                                                        Starting your own business
                                                        <div class="pull-right fa fa-angle-up"></div>
                                                        <div class="pull-right fa fa-angle-down"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="itemOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <article>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, magni nobis? Recusandae explicabo numquam voluptatibus corrupti maxime tempora omnis eos reprehenderit. Sequi iusto amet id, similique ab dolor quod dolore.</p>
                                                        <p class="author"><a href="#"><strong><i class="fa fa-user"></i>John Doe</strong></a></p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="speaker-wrapper">
                                                <img src="assets/img/speaker-02.jpg" class="img-responsive img-circle" alt="speaker-2" />
                                            </div>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <div class="time"><i class="fa fa-clock-o"></i> 5:40 PM</div>
                                                    <a data-toggle="collapse" data-parent="#panelTimelineOne" href="#itemTwo" class="collapsed">
                                                        Scaling into crowded space
                                                        <div class="pull-right fa fa-angle-up"></div>
                                                        <div class="pull-right fa fa-angle-down"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="itemTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <article>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, saepe magni totam nobis neque ipsum voluptates ullam dolorum debitis excepturi itaque placeat quisquam sed nihil natus perspiciatis eveniet dolorem temporibus!</p>
                                                        <p class="author"><a href="#"><strong><i class="fa fa-user"></i>Nicole Doe</strong></a></p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="speaker-wrapper">
                                                <img src="assets/img/speaker-03.jpg" class="img-responsive img-circle" alt="speaker-3" />
                                            </div>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <div class="time"><i class="fa fa-clock-o"></i> 5:40 PM</div>
                                                    <a data-toggle="collapse" data-parent="#panelTimelineOne" href="#itemThree" class="collapsed">
                                                        Close your eyes around the world
                                                        <div class="pull-right fa fa-angle-up"></div>
                                                        <div class="pull-right fa fa-angle-down"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="itemThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <article>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci soluta officia temporibus eveniet autem reprehenderit distinctio vitae quasi quas nesciunt architecto, voluptas quis saepe ducimus nobis voluptatibus iste, minima corrupti.</p>
                                                        <p class="author"><a href="#"><strong><i class="fa fa-user"></i>Nick Doe</strong></a></p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="speaker-wrapper">
                                                <img src="assets/img/speaker-04.jpg" class="img-responsive img-circle" alt="speaker-4" />
                                            </div>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <div class="time"><i class="fa fa-clock-o"></i> 5:40 PM</div>
                                                    <a data-toggle="collapse" data-parent="#panelTimelineOne" href="#itemFour" class="collapsed">
                                                        Passion and people
                                                        <div class="pull-right fa fa-angle-up"></div>
                                                        <div class="pull-right fa fa-angle-down"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="itemFour" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <article>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, similique, est? A quo odit enim illum totam iusto, provident aperiam doloribus magni dolores architecto debitis, soluta, fugit. At, minus, voluptatum.</p>
                                                        <p class="author"><a href="#"><strong><i class="fa fa-user"></i>Vicky Doe</strong></a></p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="DayOne-2">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayOne-3">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayOne-4">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                            </div> <!-- end of tab-content -->
                            <div class="clearfix"></div>

                        </div> <!-- end of .tab-pane #DayOne -->
                        <div class="tab-pane fade" id="DayTwo">

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#DayTwo-1" data-toggle="tab">Auditorium 1</a></li>
                                <li><a href="#DayTwo-2" data-toggle="tab">Auditorium 2</a></li>
                                <li><a href="#DayTwo-3" data-toggle="tab">Auditorium 3</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="DayTwo-1">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayTwo-2">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayTwo-3">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayTwo-4">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                            </div> <!-- end of tab-content -->

                        </div> <!-- end of .tab-pane #DayTwo -->
                        <div class="tab-pane fade" id="DayThree">

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#DayThree-1" data-toggle="tab">Auditorium 1</a></li>
                                <li><a href="#DayThree-2" data-toggle="tab">Auditorium 2</a></li>
                                <li><a href="#DayThree-3" data-toggle="tab">Auditorium 3</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="DayThree-1">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayThree-2">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayThree-3">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="DayThree-4">
                                    <article>
                                        <p>No schedule yet.</p>
                                    </article>
                                </div>
                            </div> <!-- end of tab-content -->

                        </div> <!-- end of .tab-pane #DayThree -->
                    </div> <!-- end of tab-content of parent tab-pane -->
                </section> <!-- end of nav-tabs-default -->
            </div> <!-- end of .container -->
        </div>
    </section>
    <!--  end of #schedule  -->


    <!-- begin: Top Speakers -->
    <section id="speakers">
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
    </section> <!--  end of #speakers  -->



    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop