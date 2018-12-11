<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'pipple');

// initializing variables
$klantnaam = $_POST['klantnaam'];
$code = $_POST['code'];
$role = $_GET['role'];
echo $role;
echo $role;
echo $role;
echo $klantnaam;
echo $role;
echo $role;
$errors = array(); 


?>