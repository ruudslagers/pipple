<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/logo/favicon.ico">

        <!-- App title -->
        <title>Pipple Webapp - Data Science With Purpose</title>

        <!--calendar css-->
        <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

        <!-- Switchery css -->
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo">
                        <a href="index.php" class="logo-klein">
                            <img src="assets/logo/favicon.png" style="height: 60%; width: auto;">
                        </a>

                        <a href="index.php" class="logo-groot">
                            <img src="assets/logo/Pipple-Logo-small.png" style="height: 70px; width: 100%;">
                        </a>
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
                                    <h5><small><span class="badge badge-danger">7</span>Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/users/avatar-2.jpg" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/users/avatar-3.jpg" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Carlos Crouch</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/users/avatar-4.jpg" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

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
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
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
                        <li class="hidden-mobile app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
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
                                <a href="index.php" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-view-dashboard"></i><span> Home </span> </a>
                            </li>
                            
                            <li class="has_sub">
                                <a href="agenda.html" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-calendar"></i><span> Agenda </span> </a>
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
                                    <h4 class="page-title float-left">Agenda</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Pipple</a></li>
                                        <li class="breadcrumb-item"><a href="#">Werknemers</a></li>
                                        <li class="breadcrumb-item active">Agenda</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">

                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-success btn-block waves-effect m-t-20 waves-light">
                                                        <i class="fa fa-plus"></i> Create New
                                                    </a>
                                                    <div id="external-events" class="m-t-20">
                                                        <br>
                                                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                        <div class="external-event bg-primary" data-class="bg-primary">
                                                            <i class="fa fa-move"></i>Pipple lecture
                                                        </div>
                                                        <div class="external-event bg-pink" data-class="bg-pink">
                                                            <i class="fa fa-move"></i>Afspraak klant
                                                        </div>
                                                        <div class="external-event bg-warning" data-class="bg-warning">
                                                            <i class="fa fa-move"></i>Teamoverleg
                                                        </div>
                                                        <div class="external-event bg-purple" data-class="bg-purple">
                                                            <i class="fa fa-move"></i>Create New theme
                                                        </div>
                                                    </div>

                                                    <!-- checkbox -->
                                                    <div class="checkbox checkbox-custom m-t-40">
                                                        <input id="drop-remove" type="checkbox">
                                                        <label for="drop-remove">
                                                            Remove after drop
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-md-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add New Event</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body p-20"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add a category</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body p-20">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Pipple lecture</option>
                                                                <option value="danger">Afspraak klant</option>
                                                                <option value="info">Meeting</option>
                                                                <option value="pink">categorie</option>
                                                                <option value="primary">categorie</option>
                                                                <option value="warning">categorie</option>
                                                                <option value="inverse">categorie</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                        <div class="row">
                            <div class="col-lg-6 col-xl-4" id="aanwezigenVrijMiLunch">
                                <div class="card-box aanwezigheid">
                                    <h5>Aanwezigen Vrijdag middag lunch</h5>
                                    <ul class="aanwezigheidLijst">
                                        <li>Bram Dekker <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li>Silke de Jong <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li>Willem van Ooij <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li>Linda Meijers <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li id="voorbeeld1"></li>
                                        <li>Jan ter hoor <span><i class="zmdi zmdi-close"></i></span></li>
                                        <li>Wim van Pad <span><i class="zmdi zmdi-close"></i></span></li>
                                    </ul>
                                    
                                    <button class="aanwezig" id="meld_aan_vml">Meld mij aanwezig</button>
                                    <a href="JavaScript:Void(0)" class="afwezig" id="meld_af_vml">Ik kan er niet zijn</a>
                                    
                        		</div>
                            </div>
                            <div class="col-lg-6 col-xl-4" id="aanwezigenVrijMiBo">
                                <div class="card-box aanwezigheid">
                                    <h5>Aanwezigen Vrijdag middag Borrel</h5>
                                    <ul class="aanwezigheidLijst">
                                        
                                        <?PHP 
	                                    
										include 'assets/db/connection.php'; 
										
										$naam = "SELECT `naam`, `status` FROM `vrijmibo` ORDER BY `status`";
										$result = $conn->query($naam);
										
										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
											    
											    
											    if ($row["status"] == 'Afwezig' OR $row["status"] == 'afwezig'){
											    	$icon = 'zmdi-close';
											    } else{
													$icon = 'zmdi-check';
											    }
											    
											    echo '<li>' . $row["naam"] . '<span><i class="zmdi '.$icon.'"></i></span></li>';
											    
											    
										    }
										} else {
										    echo "0 results";
										}
										?>
                                        
                                        
                                        
                                    </ul>
                                    
                                    <?php
	                                
	                                $name = 'Matthew Kouwenberg';
	                                $mail = 'matthew@pipple.nl';
																		
									$exists = $conn->query("SELECT id FROM vrijmibo WHERE email = '$mail'");
									$aanwezigInDB = $conn->query("SELECT `naam`, `status` FROM `vrijmibo` WHERE email = '$mail' AND `status` = 'afwezig'");

									
									if(mysqli_num_rows($exists) == 0 or ($aanwezigInDB->num_rows > 0)) {
										echo ' 
											<form action="" method="post">
		                                    	<input name="aanwezig" type="submit" class="aanwezig" value="Meld mij aanwezig">
											</form>
											';
									}
									
									elseif (mysqli_num_rows($exists) > 0){	
                                    ?>
									
									
									<form action="" method="post">
	                                    <input name="afwezig" type="submit" class="afwezig" value="Ik kan er niet zijn">
                                    </form>
                                    
<!--                                Aanwezig melden van de gebruiker op agenda pagina -->
                                    <?php
	                                }
	                                
                                    if(isset($_POST['aanwezig'])){
										
										$aanwezig = "INSERT INTO vrijmibo (naam, email, status) VALUES ('$name', '$mail', 'aanwezig')";
										$updateAanwezig = "UPDATE `vrijmibo` SET `Status`='aanwezig' WHERE `email` = '$mail'";
										
										
									    if(mysqli_num_rows($exists) == 0) {
									    	if ($conn->query($aanwezig) === TRUE) {
										    	echo "<script>window.location = '#aanwezigenVrijMiBo'</script>";
											} 
											
										}else{
											if ($conn->query($updateAanwezig) === TRUE) {
										    	echo "<script>window.location = '#aanwezigenVrijMiBo'</script>";
											} 
										}

									}
									?>

                                    
                                    
                                    
<!--                               Update functie om de gebruiker toch nog afwezig te melden -->
                                    <?php
	                                
	                                if(isset($_POST['afwezig'])){
		                                
		                                $update = "UPDATE `vrijmibo` SET `Status`='afwezig' WHERE `email` = '$mail'";
		                                if ($conn->query($update) === TRUE) {
			                                echo "<script>window.location = '#aanwezigenVrijMiBo'</script>";
										} 
		                                
		                            }    
	                                    
	                                    
	                                ?>
                                    
                                    
                                    
                                    
                        		</div>
                            </div>
                            <div class="col-lg-6 col-xl-4" id="aanwezigenPippleDag">
                                <div class="card-box aanwezigheid">
                                    <h5>Aanwezigen Vrijdag middag lunch</h5>
                                    <ul class="aanwezigheidLijst">
                                        <li>Bram Dekker <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li>Silke de Jong <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li>Willem van Ooij <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li>Linda Meijers <span><i class="zmdi zmdi-check"></i></span></li>
                                        <li id="voorbeeld3"></li>
                                        <li>Jan ter hoor <span><i class="zmdi zmdi-close"></i></span></li>
                                        <li>Wim van Pad <span><i class="zmdi zmdi-close"></i></span></li>
                                    </ul>
                                    
                                    <button class="aanwezig" id="meld_aan_pd">Meld mij aanwezig</button>
                                    <a href="JavaScript:Void(0)" class="afwezig" id="meld_af_pd">Ik kan er niet zijn</a>
                                    
                                    <script>
                                        document.getElementById('meld_aan_pd').onclick = function() {
                                            var voorbeeld = document.getElementById('voorbeeld3'); 
                                            voorbeeld.style.display = 'block';
                                            voorbeeld.innerHTML = 
                                                'Bas Caron <span><i class="zmdi zmdi-check"></i>';
                                        }
                                        document.getElementById('meld_af_pd').onclick = function() {
                                            var voorbeeld = document.getElementById('voorbeeld3'); 
                                            voorbeeld.style.display = 'block';
                                            voorbeeld.innerHTML = 
                                                'Bas Caron <span><i class="zmdi zmdi-close"></i>';
                                        }
                                    </script>
                                    
                        		</div>
                            </div>
                        </div>

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
                2016 - 2018 © Uplon.
            </footer>


        </div>
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

        <!-- Jquery-Ui -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>