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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/contact_banner.png')}}');">
        <div class="header-wrapper" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ol> 

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <!-- <section class="main-content text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Co-ordinator</h2>
                    <p>Md. Saiful Islam</p>
                    <p>Lecturer, Dept. of CSE</p>
                    <p>Shahjalal University Of Science &amp; Technology</p>
                    <p>contact@csecarnival.com</p>
                    <p>info@csecarnival.com</p>
                    <p>saiful-cse@sust.edu</p>
                    <p>01555555007</p>
                    <p>01555555008</p>
                </div>
            </div>
        </div>
    </section> -->



    <!-- contact adresses section begin -->
    <div class="main-content">
        <div class="container">

            <!-- google map iframe -->
            <section class="g-map">
                <div class="row">
                    <div class="col-md-12">
                        <div class="google-map">
                            <div id="map-canvas"></div>
                        </div>
                    </div>
                </div>
            </section> <!-- /.g-map (google-map end) -->

            <script>
                function initialize() {
                    var mapCanvas = document.getElementById('map-canvas');
                    var mapOptions = {
                        center: new google.maps.LatLng(24.921212, 91.833073),
                        zoom: 16,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    var map = new google.maps.Map(mapCanvas, mapOptions)

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(24.921212, 91.833073),
                        title:"Shahjalal University of Science & Technology"
                    });

                    // To add the marker to the map, call setMap();
                    marker.setMap(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>


            <h2>Co-ordinator</h2>
            <section class="contact-address bg-white">
                <div class="row">

                    <div class="col-md-4 col-xs-12">
                        <div class="address-info">
                            <div class="row">

                                <div class="col-md-3 col-xs-3">
                                    <div class="address-info-icon text-center center-block bg-light-gray">
                                        <i class="fa fa-user"></i>
                                    </div> <!-- /.address-info-icon -->
                                </div>

                                <div class="col-md-9 col-xs-9 address-info-desc">
                                    <h3>Md.Saiful Islam</h3>
                                    <p>
                                        Lecturer, Dept. of CSE <br>
                                        Shahjalal University Of Science &amp; Technology
                                    </p>
                                </div> <!-- /.address-info-desc -->

                            </div>
                        </div> <!-- /.address-info -->
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="address-info">
                            <div class="row">

                                <div class="col-md-3 col-xs-3">
                                    <div class="address-info-icon text-center center-block bg-light-gray">
                                        <i class="fa fa-phone"></i>
                                    </div> <!-- /.address-info-icon -->
                                </div>

                                <div class="col-md-9 col-xs-9 address-info-desc">
                                    <h3>Phone Number</h3>
                                    <p>
                                        +8801555555007
                                        <br/>
                                        +8801555555008
                                    </p>
                                </div> <!-- /.address-info-desc -->

                            </div>
                        </div> <!-- /.address-info -->
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="address-info">
                            <div class="row">

                                <div class="col-md-3 col-xs-3">
                                    <div class="address-info-icon text-center center-block bg-light-gray">
                                        <i class="fa fa-envelope-o"></i>
                                    </div> <!-- /.address-info-icon -->
                                </div>

                                <div class="col-md-9 col-xs-9 address-info-desc">
                                    <h3>Email Address</h3>
                                    <p>
                                        contact@csecarnival.com <br>
                                        info@csecarnival.com <br>
                                        saiful-cse@sust.edu
                                    </p>
                                </div> <!-- /.address-info-desc -->

                            </div>
                        </div> <!-- /.address-info -->
                    </div>

                </div>
            </section> <!-- /.contact-address -->
        </div>
    </div>
            


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop