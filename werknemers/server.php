<?php
session_start();

//// Connect met de database
$db = mysqli_connect('studmysql01.fhict.local', 'dbi339253', 'stoerboy123', 'dbi339253');

//// Variables defineren
$klantnaam = $_POST['werknemers'];
$code = $_POST['code'];
$errors = array(); 

echo $klantnaam;
echo $code;

//// Inloggen gebruiker, kijken of een klantnaam en code is ingevuld.
if (isset($_POST['login_user'])) {
  $klantnaam = mysqli_real_escape_string($db, $_POST['werknemers']);
  $code = mysqli_real_escape_string($db, $_POST['code']);
    
    
//// Is die leeg? geef aan dat die verplicht is.   
  if (empty($klantnaam)) {
  	array_push($errors, "Pippelaar is verplicht");
  }
  if (empty($code)) {
  	array_push($errors, "Code is verplicht");
  }


//// Geen error? voer de query uit om te kijken of de klantnaam en code voorkomen in de database. 
  if (count($errors) == 0) {
  	$query = "SELECT * FROM werknemers WHERE werknemers='$klantnaam' AND code='$code'";

  	$results = mysqli_query($db, $query);
      
//// Als de klantnaam en code overeenkomen in de database check of de klantnaam 'coolblue' is. Zoja ga naar coolblue.php.      
  	if ($klantnaam == "Bas") {
  	  $_SESSION['klantnaam'] == 'Bas Caron';
  	  $_SESSION['success'] = "Je bent ingelogd!";
  	  header('location: dashboard.php');

//// Als de klantnaam en code overeenkomen in de database check of de klantnaam 'philips' is. Zoja ga naar philips.php.         
    }elseif ($klantnaam == "Jeroen de Haas") {
  		header('location: dashboard.php');

//// Als de klantnaam en code overeenkomen in de database check of de klantnaam 'dashtag' is. Zoja ga naar dashtag.php.          
  	}elseif ($klantnaam == "admin") {
	  	$_SESSION['klantnaam'] == 'Admin';
	  	$_SESSION['success'] = "Je bent ingelogd!";
  		header('location: dashboard.php');

//// Als de klantnaam en code overeenkomen in de database check of de klantnaam 'dashtag' is. Zoja ga naar dashtag.php.          
  	}else {
        header('location: index.php');
    }
  }
}

?>



