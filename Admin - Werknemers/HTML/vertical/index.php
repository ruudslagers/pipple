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
        
<!--         <?php include 'assets/db/connection.php'; ?> -->

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="" class="logo-klein">
                        <img src="assets/logo/favicon.png">
                    </a>
                    <a href="" class="logo-groot">
                        <img src="assets/logo/Pipple-Logo-small.png">
                    </a>
                </div>

                <nav class="navbar-custom">

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
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                <a href="index.html" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-view-dashboard"></i><span> Home </span> </a>
                            </li>
                            
                            <li class="has_sub">
                                <a href="agenda.php" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-calendar"></i><span> Agenda </span> </a>
                            </li>    

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span> Klanten </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="klanten.html">Klant 1</a></li>
                                    <li><a href="klanten.html">Klant 2</a></li>
                                    <li><a href="klanten.html">Klant 3</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="lectures.html" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span> Lectures </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="pippelaars.html" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-face"></i><span> Pippelaars </span> </a>
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
                                        <li class="breadcrumb-item active">Home</li>
                                    </ol>
										
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box vrijdagMiddagLunch" id="vrijmilunch">
                                    <h4 class="aanmeld-titel">Vrijdagmiddag lunch</h4>
                                    <button class="aanwezig" id="meld_aan">Meld mij aanwezig</button>
                                    <a href="JavaScript:Void(0)" class="afwezig" id="meld_af">Ik kan er niet zijn</a>
                                    <script>
                                        document.getElementById('meld_aan').onclick = function() {
                                            document.getElementById('vrijmilunch').innerHTML = 
                                                '<h4 class="aanmeld-titel">Vrijdagmiddag lunch</h4>'+
                                                '<button class="aanwezig checked" id="meld_aan">See you there!<i class="zmdi zmdi-check"></i></button>'+
                                                '<a href="agenda.php#aanwezigenVrijMiLunch" class="afwezig">Check de aanwezigen</a>';
                                        }
                                        
                                        document.getElementById('meld_af').onclick = function() {
                                            document.getElementById('vrijmilunch').innerHTML = 
                                                '<h4 class="aanmeld-titel">Vrijdagmiddag lunch</h4>'+
                                                '<button class="aanwezig un-checked" id="meld_aan">Niet aanwezig<i class="zmdi zmdi-close"></i></button>'+
                                                '<a href="agenda.php#aanwezigenVrijMiLunch" class="afwezig">Wijzig je status</a>';
                                        }
                                    </script>
                                </div>
                            </div>

                             <div class="col-md-6 col-xl-3">
                                <div class="card-box vrijdagMiddagLunch" id="vrijmiborrel">
                                    <h4 class="aanmeld-titel">Vrijdagmiddag borrel</h4>
                                    
                                    <?PHP 
	                                    
	                                include 'assets/db/connection.php';


									$name = 'Matthew Kouwenberg';
	                                $mail = 'matthew@pipple.nl';
																		
									
									$exists = $conn->query("SELECT id FROM vrijmibo WHERE email = '$mail'");
									
									if(mysqli_num_rows($exists) == 0) {
	                                    
                                    ?>
                                    
									<!-- Gebruiker nog niet aanwezig -->
                                    <form action="" method="post">
	                                    <input name="aanwezig" type="submit" class="aanwezig" value="Meld mij aanwezig">
                                    </form>
                                    <form action="" method="post">
	                                    <input name="afwezig" type="submit" class="afwezig" value="Ik kan er niet zijn">
                                    </form>
                                    
                                    <?php
	                                } else{
									
// 									Check of de gebruiker op aanwezig of afwezig staat zodat je weet welke opties je moet echoën 
									
									$naam = "SELECT `naam`, `status` FROM `vrijmibo` WHERE email = '$mail'";
									$result = $conn->query($naam);
									
									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = $result->fetch_assoc()) {
										    
										    if ($row["status"] == 'Afwezig' OR $row["status"] == 'afwezig'){?>
											    <button class="aanwezig un-checked" id="meld_aan">Niet aanwezig<i class="zmdi zmdi-close"></i></button>
                                                <a href="agenda.php#aanwezigenVrijMiLunch" class="afwezig">Wijzig je status</a>
										    <?php }else{ ?>
											    <!-- Gebruiker is al aanwezig -->
												<button class="aanwezig checked" id="meld_aan">See you there!<i class="zmdi zmdi-check"></i></button>
			                                    <a href="agenda.php#aanwezigenPippleDag" class="afwezig">Check de aanwezigen</a>
										    <?php }
										    										    
										    
									    }
									}
		                                
	                                }
									

// 									Verversen van de browser als de gebruiker een optie heeft gekozen

									if(isset($_POST['aanwezig'])){
										
										$aanwezig = "INSERT INTO vrijmibo (naam, email, status) VALUES ('$name', '$mail', 'aanwezig')";
									    if(mysqli_num_rows($exists) == 0) {
										    
									    	if ($conn->query($aanwezig) === TRUE) {
										    	echo "<script>window.location = ''</script>";
											} 
											
										}

									}
									
									elseif(isset($_POST['afwezig'])){
		                                
		                                
		                                $update = "INSERT INTO vrijmibo (naam, email, status) VALUES ('$name', '$mail', 'afwezig')";
		                                if ($conn->query($update) === TRUE) {
											echo "<script>window.location = ''</script>";
										} 
		                                
		                                
		                            }    


									
	                                    
	                                ?>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                            
                             <div class="col-md-6 col-xl-3">
                                <div class="card-box vrijdagMiddagLunch" id="pippledag">
                                    <h4 class="aanmeld-titel">Pipple dag</h4>
                                    <button class="aanwezig" id="meld_aan_pipple">Meld mij aanwezig</button>
                                    <a href="JavaScript:Void(0)" class="afwezig" id="meld_af_pipple">Ik kan er niet zijn</a>
                                    <script>
                                        document.getElementById('meld_aan_pipple').onclick = function() {
                                            document.getElementById('pippledag').innerHTML = 
                                                '<h4 class="aanmeld-titel">Pipple dag</h4>'+
                                                '<button class="aanwezig checked" id="meld_aan">See you there!<i class="zmdi zmdi-check"></i></button>'+
                                                '<a href="agenda.php#aanwezigenPippleDag" class="afwezig">Check de aanwezigen</a>';
                                        }
                                        
                                        document.getElementById('meld_af_pipple').onclick = function() {
                                            document.getElementById('pippledag').innerHTML = 
                                                '<h4 class="aanmeld-titel">Pipple dag</h4>'+
                                                '<button class="aanwezig un-checked" id="meld_aan">Niet aanwezig<i class="zmdi zmdi-close"></i></button>'+
                                                '<a href="agenda.php#aanwezigenPippleDag" class="afwezig">Wijzig je status</a>';
                                        }
                                    </script>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box vrijdagMiddagLunch" id="wintersport">
                                    <h4 class="aanmeld-titel">Wintersport</h4>
                                    
                                    <div class="ex-page-content count-down-page">
                                        <div class="container">


                                            <div class="clearfix"></div>


                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div id="count-down" class="row center-block">
                                                        <div class="clock-presenter days_dash col-sm-4">
                                                            <div class="digit"></div>
                                                            <div class="digit"></div>
                                                            <p class='note dash_title'>Dagen</p>
                                                        </div>
                                                        <div class="clock-presenter hours_dash col-sm-4">
                                                            <div class="digit"></div>
                                                            <div class="digit"></div>
                                                            <p class='note dash_title'>Uren</p>
                                                        </div>
                                                        <div class="clock-presenter minutes_dash col-sm-4">
                                                            <div class="digit"></div>
                                                            <div class="digit"></div>
                                                            <p class='note dash_title'>Minuten</p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6 col-xl-8">
                                <div class="card-box agendaHome">

                                    <h4 class="header-title m-t-0 m-b-20">Agenda / TO DO</h4>
                                    <div class="col-xl-6 col-md-12 col-xs-12 blok">
                                        <div class="toDo">
                                            <h5>Pipple Dag</h5>
                                            <span>24-10-2018</span>
                                            <p>De maandelijkse Pipple dag wordt donderdag 6 december geviert bij de Petra kerk.</p>
                                            <button class="accordion">Check het adres<i class="zmdi zmdi-chevron-down"></i></button>
                                            <div class="panel">
                                                <ul>
                                                    <li>Stationsplein 45A</li>
                                                    <li>3013AK, Rotterdam</li>
                                                    <li>The Netherlands</li>
                                                </ul>
                                            </div>
                                            <div class="knop">
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-success">Notificaties</button>
                                                <a href="#" class="card-link negeerbtn">Negeer</a>
                                            </div>
                                        </div>
                                    </div><div class="col-xl-6 col-md-12 col-xs-12 blok">
                                        <div class="toDo">
                                            <h5>Pipple Dag</h5>
                                            <span>24-10-2018</span>
                                            <p>De maandelijkse Pipple dag wordt donderdag 6 december geviert bij de Petra kerk.</p>
                                            <button class="accordion">Check het adres<i class="zmdi zmdi-chevron-down"></i></button>
                                            <div class="panel">
                                                <ul>
                                                    <li>Stationsplein 45A</li>
                                                    <li>3013AK, Rotterdam</li>
                                                    <li>The Netherlands</li>
                                                </ul>
                                            </div>
                                            <div class="knop">
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-success">Notificaties</button>
                                                <a href="#" class="card-link negeerbtn">Negeer</a>
                                            </div>
                                        </div>
                                    </div>
                        		</div>
                            </div><!-- end col-->

                            <div class="col-lg-6 col-xl-4">
                                <div class="card-box pipflash">

                                    <h4 class="header-title m-t-0 m-b-20">Pipple Flash</h4>
                                    <div class="text-center">
                                    
                                    <a href="assets/pipple-flash/PippleFlash44.pdf" download="PippleFlash44" target="_blank">
                                    <button class="btn btn-purple waves-effect waves-light btnpipflash"> <span>Download Pipple Flash</span> <i class="fa fa-file-pdf-o m-l-5"></i> </button>
                                    </a>
                                    </div>

                                    

                        		</div>
                            </div><!-- end col-->


                        </div>
                        <!-- end row -->


                        <div class="row">
                            
                            <div class="col-lg-6 col-xl-4">
                                <div class="card-box" style="height: 340px;">

                                    <h4 class="header-title m-t-0 m-b-20">Nieuwsartikel toevoegen</h4>
                                    
                                    
                                        <fieldset class="form-group">
                                                    <h6>
                                                    <label>Gegevens</label></h6>
                                                    <label>Titel</label>
                                                    <input class="form-control" type="text" placeholder="Titel van het artikel…"><br>
                                                    <label>Url</label>
                                                    <input class="form-control" type="text" placeholder="Url van het artikel…">
                                                </fieldset>
                                     <div class="text-center">
                                        
                                      
                                    <a href="assets/pipple-flash/PippleFlash#44.pdf" download="PippleFlash44" target="_blank">
                                    <button class="btn btn-purple waves-effect waves-light btnpipflash btn-blue"> <span>Voeg nieuwsartikel toe</span> <i class="typcn typcn-document-add"></i> </button>
                                    </a>
                                         </div> 
                                    

                                    

                        		</div>
                            </div><!-- end col-->
                            
                            <div class="col-lg-6 col-xl-8">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card-box" style="min-height: 340px;">
                                        <h4 class="header-title m-t-0 m-b-20">Nieuws artikelen</h4>
                                            <div class="nieuwsartikel">
                                                    <div class="row">
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="card-box tilebox-one">
                                                                <a href="https://soundcloud.com/rudifreddieshow/deze-podcast-gaat-over-de-cijfers-die-ons-leiden-verleiden-en-misleiden" target="_blank">Podcast over cijfers die ons leiden</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="card-box tilebox-one">
                                                                <a href="https://medium.com/the-outlier/attracting-top-data-science-talent-878b7d81b072" target="_blank">Attracting Top Data Science Talent</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="card-box tilebox-one">
                                                                <a href="https://en.m.wikipedia.org/wiki/Buffon%27s_needle" target="_blank">Buffon's Needle</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="card-box tilebox-one">
                                                                <a href="https://computerworld.nl/development/107064-6-oorzaken-van-machine-learning-mislukkingen" target="_blank">6 oorzaken van machine learning-mislukkingen</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="card-box tilebox-one">
                                                                <a href="https://towardsdatascience.com/tableau-esque-drag-and-drop-gui-visualization-in-r-901ee9f2fe3f" target="_blank">Tableau-like Drag and Drop GUI Visualization in R</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="card-box tilebox-one">
                                                                <a href="https://www.ad.nl/binnenland/datalek-bij-achmea-gegevens-duizenden-verzekerden-op-straat~a542695e/" target="_blank">Datalek bij Achmea</a>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>

                                            </div>

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

        <!-- END wrapper -->

        <script>
            var resizefunc = [];
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
        
        <!-- Count down js -->
        <script src="assets/plugins/count-down/jquery.lwtCountdown-1.0.js"></script>
        
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
        
        <script type="text/javascript">
            $(document).ready(function () {
                "use strict";
                //Set your date
                $('#count-down').countDown({
                    targetDate: {
                        'day': 25,
                        'month': 1,
                        'year': 2019,
                        'hour': 7,
                        'min': 7,
                        'sec': 7
                    },
                    omitWeeks: true
                });

            });
        </script>

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
        
        <!-- Global js -->
        <script src="assets/js/global.js"></script>

    </body>
</html>