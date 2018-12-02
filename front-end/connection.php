<?php

define("USER", "test");
define("PASS", "test");

//connect to database
try {
	$connection = new PDO("mysql:host=localhost;dbname=Snackfacts", USER, PASS);
}
catch (PDOException $e) {
	$connectionFailed = true;
}

?>