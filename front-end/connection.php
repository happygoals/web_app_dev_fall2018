<?php
define("USER", "Snackfacts");
define("PASS", "VWuntwB2CAwHK4Vv");
    
//connect to database
try {
	$connection = new PDO("mysql:host=localhost;dbname=Snackfacts", USER, PASS);
}
catch (PDOException $e) {
	$connectionFailed = true;
}
?>