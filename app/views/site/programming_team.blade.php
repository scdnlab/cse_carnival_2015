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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/pc_banner.png')}}');">
        <div class="header-wrapper">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Teams</a></li>
                            <li class="active">Programming Contest Teams</li>
                        </ol>

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Team Number</th>
                            <th>Team Name</th>
                            <th>University Name</th>
                            <th>Status</th>
                            <th>Team Details</th>
                        </tr>
                        <?php $count=1; ?>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$team->team_name}}</td>
                            <td>{{$team->university}}</td>
                            @if($team->status == 0)
                            <td style="color:red">Pending</td>
                            @elseif($team->status == 1)
                            <td style="color:red">Waiting for Payment</td>
                            @endif
                            <td><a href="#programmingTeam{{$team->id}}" class="btn btn-default fancybox">View Details</a></td>
                        </tr>
                        <?php $count++; ?>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!--  Team Details Pop up -->

    @foreach($teams as $team)
    <div id="programmingTeam{{$team->id}}" class="container text-center" style="display: none;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <img src="{{asset("uploads/registration/$team->coach_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Team Coach">
                    <h4><em>{{$team->coach_name}}</em></h4>
                    <p>Coach, {{$team->team_name}}</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team->member1_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team->member1_name}}</em></h4>
                        <p>Participant 1, {{$team->team_name}}</p>
                    </div>

                    <div class='col-md-4'>
                        <img src="{{asset("uploads/registration/$team->member2_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team->member2_name}}</em></h4>
                        <p>Participant 2, {{$team->team_name}}</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset("uploads/registration/$team->member3_photo")}}" style="width: 150px; height: 150px;" class="img-circle img-responsive center-block" alt="Participant 1">
                        <h4><em>{{$team->member3_name}}</em></h4>
                        <p>Participant 3, {{$team->team_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

 

    

    
    
    <!-- <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Not selected yet</h2>
                </div>
            </div>
        </div>
    </section> -->



    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
