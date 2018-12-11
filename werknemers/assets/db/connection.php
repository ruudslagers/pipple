<?php
$servername = "studmysql01.fhict.local";
$username = "dbi339253";
$password = "stoerboy123";
$dbname = "dbi339253";  

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}    

?>