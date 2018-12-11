<?php 
  session_start(); 

  if (!isset($_SESSION['klantnaam'])) {
  	$_SESSION['msg'] = "Je moet eerst inloggen";
  	header('location: pages-login.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['klantnaam']);
  	header("location: pages-login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Klanten Dashboard</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['klantnaam'])) : ?>
    	<p>Welkom <strong><?php echo $_SESSION['klantnaam']; ?></strong></p>
    	<p> <a href="pages-login.php?logout='1'" style="color: red;">Uitloggen</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>