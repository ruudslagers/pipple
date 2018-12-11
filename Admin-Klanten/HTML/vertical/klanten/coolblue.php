<?php 
  session_start(); 

?>

<!doctype html>
<html lang="nl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Pipple Webapp">
        <meta name="author" content="Pipple">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/logo/favicon.ico">

        <!-- App title -->
        <title>Pipple Webapp - Data Science With Purpose</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- Switchery css -->
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left coolblue">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                 <div class="topbar-left">
                    <a href="index.html" class="logo-klein">
                        <img src="assets/logo/favicon.png">
                    </a>
                    <a href="index.html" class="logo-groot">
                        <img src="assets/logo/Pipple-Logo-small.png">
                    </a>
                </div>

                <nav class="navbar-custom-coolblue">
                    <img src="assets/logo/2.png" class="logo-coolblue">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-email noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title bg-success">
                                    <h5><small><span class="badge"></span>Berichten</small></h5>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                <i class="zmdi zmdi-format-subject noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-bas.jpeg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welkom! Bas</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profiel</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Instellingen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Vergrendelscherm</span>
                                </a>

                                <!-- item-->
                                <a href="pages-login.php?logout='1'" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Uitloggen</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title"> </li>

                            <li class="has_sub">
                                <a href="index.html" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Home </span> </a>
                            </li>
                            
                            <li class="has_sub">
                                <a href="project.html" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-favorite-outline"></i><span> Project </span> </a>
                            </li>    

                            <li class="has_sub">
                                <a href="bestanden.html" class="waves-effect"><i class="zmdi zmdi-folder-outline"></i> <span> Bestanden </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="pippelaars.html" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-face"></i><span> Pippelaars </span> </a>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Home</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Pipple</a></li>
                                        <li class="breadcrumb-item"><a href="#">Werknemers</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one notifications">
                                    <h4 class="aanmeld-titel">Feedback</h4>

                                            <div class="inbox-widget nicescroll">
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-bas.jpeg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Bas Caron</p>
                                                        <p class="inbox-item-text">Hey! Ik heb feedback toegevoegd.</p>
                                                        <p class="inbox-item-date">13:40 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-bas.jpeg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Bas Caron</p>
                                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                                        <p class="inbox-item-date">13:34 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-bas.jpeg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Bas Caron</p>
                                                        <p class="inbox-item-text">This project is awesome!</p>
                                                        <p class="inbox-item-date">13:17 PM</p>
                                                    </div>
                                                </a>
                                            </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box vrijdagMiddagLunch" id="vrijmiborrel">
                                <h4 class="aanmeld-titel">Events</h4>
                                    <div class="col-md-12 event">
                                        Titel van het event<span>13 nov.</span>
                                        <button class="accordion"><i class="zmdi zmdi-chevron-down"></i></button>
                                        <div class="panel">
                                            <p>tekst met de introductie van het event content bla tekst enzo neefje</p>
                                            <div class="locatie"><b>Locatie:</b> Rondsolweg 45A, Almere</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 event">
                                        Titel van het event<span>13 nov.</span>
                                        <button class="accordion"><i class="zmdi zmdi-chevron-down"></i></button>
                                        <div class="panel">
                                            <p>tekst met de introductie van het event content bla tekst enzo neefje</p>
                                            <div class="locatie"><b>Locatie:</b> Rondsolweg 45A, Almere</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one voortgang">
                                    <h4 class="aanmeld-titel">Voortgang</h4>
                                    <p class="font-600 m-b-5">Coolblue <span class="text-success float-right"><b>25%</b></span></p>
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <a href="#">
                                                    <div class="link">
                                                        <h8 class="project-link">Bekijk project</h8>
                                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box voortgang">
                                    <h4 class="aanmeld-titel">Contactpersoon</h4>
                                        <div class="contactpersoonimg">
                                            <img src="assets/images/pippelaars/bas.png" >
                                        </div>
                                        <div class="contactpersoon">
                                            <h6 class="text-muted text-uppercase m-b-20">Bas Caron</h6>
                                            <p class="infopippelaar">Functie : <br>Specialisatie : <br>E-mail : <a href="mailto:bas@pipple.nl"> bas@pipple.nl</a></br> </p> 
                                        </div>                                   
                                    </div>
                                </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6 col-xl-8">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-20">Pipple Vlog</h4>

                                    <div class="text-center">
                                        
                                        <iframe width="80%" height="400px" src="https://www.youtube.com/embed/pXKnn8svpRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        
                                    </div>

                                    

                        		</div>
                            </div><!-- end col-->

                            <div class="col-lg-6 col-xl-4">
                                <div class="card-box" style="height: 485px;">

                                    <h4 class="header-title m-t-0 m-b-30">Weer</h4>

                                    <div>
                                        
                                    <div class="text-center" style="margin-top: 20%;">    
                                    
                                    <a class="weatherwidget-io" href="https://forecast7.com/nl/51d445d47/eindhoven/" data-label_1="EINDHOVEN" data-label_2="Weer" data-icons="Climacons Animated" data-theme="pure" data-highcolor="#484747" data-lowcolor="rgba(157, 40, 40, 0)" >EINDHOVEN Weer</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                                        </div>
                                        
                                    </div>

                                    

                        		</div>
                            </div><!-- end col-->


                        </div>
                        <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->



            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="messages-2">

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end nicescroll -->
            </div>
            <!-- /Right-bar -->

            <footer class="footer">
                2018 © Pipple.
            </footer>


        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>
        
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                } 
              });
            }
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Counter Up  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Page specific js -->
        <script src="assets/pages/jquery.dashboard.js"></script>

    </body>
</html>