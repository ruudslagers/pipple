<!doctype html>
<html lang="nl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Pipple Webapp">
        <meta name="author" content="Pipple">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="../assets/logo/favicon.ico">

        <!-- App title -->
        <title>Pipple Webapp - Data Science With Purpose</title>

        <!-- Bootstrap CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="../assets/css/pages-login.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <header>
            <div class="logo-header">
                 <img src="../assets/images/logo/1.png" class=plogo>
            </div>
        </header>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class="account-bg">
                <div class="card-box mb-0">
                    <img src="../assets/images/backgrounds/2.png" class="pippi">
                    <div class="text-center m-t-20">
                        <a href="index.html" class="logo">
                            <span>Welkom!</span>
                        </a>
                    </div>
                    
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0"></h6>
                            </div>
                        </div>
                        
                        <form method="post" class="m-t-20" action="login.php">
                            
                        <?php include('errors.php'); ?>
                            
                            <div class="form-group row">
                                
                                <div class="col-12">
                                    <input name="klantnaam" class="form-control" type="text" required="" placeholder="Klant">
                                </div>
                                
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="code" class="form-control" type="password" required="" placeholder="Persoonlijke code">
                                </div>
                            </div>
                            
                            <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" name="login_user" type="submit">Inloggen</button>
                                </div>
                            </div>
                        

                      </form>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end card-box-->

            <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Nog geen code?<a href="pages-register.html" class="text-white m-l-5"><b>Aanvragen!</b></a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->


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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>