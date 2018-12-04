<?php
session_start();

// initializing variables
$klantnaam = "";
$code = "";
$errors = array(); 

$_SESSION['klantnaam'] = $klantnaam1;

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'pipple');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $klantnaam = mysqli_real_escape_string($db, $_POST['klantnaam']);
  $code = mysqli_real_escape_string($db, $_POST['code']);

  if (empty($klantnaam)) {
  	array_push($errors, "Klantnaam is verplicht");
  }
  if (empty($code)) {
  	array_push($errors, "Code is verplicht");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM klanten WHERE klantnaam='$klantnaam' AND code='$code'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['klantnaam'] = $klantnaam;
      echo $klantnaam;
  	  $_SESSION['success'] = "Je bent ingelogd!";
  	  header('location: index.php');
        
  	}else {
  		array_push($errors, "Verkeerde klantnaam/code combinatie");
  	}
  }
}

?>