<?php
session_start();

//// Connect met de database
$db = mysqli_connect('studmysql01.fhict.local', 'dbi339253', 'stoerboy123', 'dbi339253');

//// Variables defineren
$klantnaam = $_POST['klantnaam'];
$code = $_POST['code'];
$errors = array(); 

//// Inloggen gebruiker, kijken of een klantnaam en code is ingevuld.
if (isset($_POST['login_user'])) {
  $klantnaam = mysqli_real_escape_string($db, $_POST['klantnaam']);
  $code = mysqli_real_escape_string($db, $_POST['code']);
    
//// Is die leeg? geef aan dat die verplicht is.   
  if (empty($klantnaam)) {
  	array_push($errors, "Klantnaam is verplicht");
  }
  if (empty($code)) {
  	array_push($errors, "Code is verplicht");
  }

//// Geen error? voer de query uit om te kijken of de klantnaam en code voorkomen in de database. 
  if (count($errors) == 0) {
  	$query = "SELECT * FROM klanten WHERE klantnaam='$klantnaam' AND code='$code'";

  	$results = mysqli_query($db, $query);
      
//// Als de klantnaam en code overeenkomen in de database check of de klantnaam 'coolblue' is. Zoja ga naar coolblue.php.      
  	if (mysqli_num_rows($results) == 1 && ($klantnaam == "coolblue")) {
  	  $_SESSION['klantnaam'] == 'coolblue';
  	  $_SESSION['success'] = "Je bent ingelogd!";
  	  header('location: coolblue.php');

//// Als de klantnaam en code overeenkomen in de database check of de klantnaam 'philips' is. Zoja ga naar philips.php.         
    }elseif ($klantnaam == "philips") {
  		header('location: philips.php');

//// Als de klantnaam en code overeenkomen in de database check of de klantnaam 'dashtag' is. Zoja ga naar dashtag.php.          
  	}elseif ($klantnaam == "dashtag") {
        header('location: dashtag.php');

//// Komt de klantnaam niet voor in de database, redirect naar inlogpagina.       
    }else {
        header('location: pages-login.php');
    }
  }
}

?>



