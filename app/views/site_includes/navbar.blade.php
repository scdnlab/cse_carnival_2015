<div id="navigation">
    <!-- main navigaion begin -->
    <nav class="yamm navbar navbar-default ">
        <div class="container">
            <!-- navbar header begin -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    CSE Curnival :)
                </a>
            </div>

            <!-- main navigation begin -->
            <div class="collapse navbar-collapse navHead pull-right" id="mainMenu">

                <ul class="nav navbar-nav">
                    <!-- HOME item: begin -->
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    <li>
                        <a href="{{url('/events')}}">Events</a>
                    </li>
                    <li>
                        <a href="{{url('/schedule')}}">Schedule</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Teams</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('/programmingteam')}}">Programmimg Contest Teams</a>
                            </li>
                            <li>
                                <a href="{{url('/softwareteam')}}">Software Contest Teams</a>
                            </li>
                            <li>
                                <a href="{{url('/projectteam')}}">Project Showcasing Teams</a>
                            </li>
                            <li>
                                <a href="{{url('/gameteam')}}">Gaming Competition Participant</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Results</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('/programmingresult')}}">Programmimg Contest Result</a>
                            </li>
                            <li>
                                <a href="{{url('/softwareresult')}}">Software Contest Result</a>
                            </li>
                            <li>
                                <a href="{{url('/projectresult')}}">Project Showcasing Result</a>
                            </li>
                            <li>
                                <a href="{{url('/gameresult')}}">Gaming Competition Result</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li>
                    <li class="dropdown registration">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Registration</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('/programming_registration')}}">Programming Contest</a>
                            </li>
                            <li>
                                <a href="{{url('/software_registration')}}">Software Contest</a>
                            </li>
                            <li>
                                <a href="{{url('/project_show_registration')}}">Project Showcasing</a>
                            </li>
                            <li>
                                <a href="{{url('/game_registration')}}">Gaming Competition</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li> <!-- end of /.dropdown -->
                </ul>

            </div><!-- main navigation FINISH -->
        </div><!-- container FINISH -->
    </nav><!-- yamm navbar navbar-default FINISH -->
</div>