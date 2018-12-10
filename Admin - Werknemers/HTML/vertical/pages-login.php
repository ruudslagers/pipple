<?php


$host="localhost";
$user="root";
$password="";
$db="login";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['code'])) {
    
    $pcode=$_POST['code'];
    
    $sql = "SELECT * FROM Klanten WHERE code='".$pcode."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo" You have logged in succesfully";
        exit();
    } else {
        echo" You have failed to login";
        exit();
    }
}
    
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

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/pages-login.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <header>
            <div class="logo-header">
                 <img src="assets/images/logo/1.png" class=plogo>
            </div>
        </header>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class="account-bg">
                <div class="card-box mb-0">
                    <img src="assets/images/backgrounds/2.png" class="pippi">
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
                        <form method="post" class="m-t-20" action="#">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="code" class="form-control" type="text" required="" placeholder="Persoonlijke code">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="checkbox checkbox-custom">
                                        <input id="checkbox-signup" type="checkbox">
                                        <label for="checkbox-signup">
                                            Code onthouden
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Inloggen</button>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 mb-0">
                                <div class="col-12">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Code vergeten?</a>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 mb-0">
                                <div class="col-12 text-center">
                                    <h5 class="text-muted"><b></b></h5>
                                </div>
                            </div>

                            <div class="form-group row mb-0 text-center">
                                <div class="col-12">
                                  
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