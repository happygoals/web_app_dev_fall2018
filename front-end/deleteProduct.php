<?php
include 'connection.php';

$productName = $_POST["productName"];

$stmt = $connection->prepare("DELETE FROM Product where name ='$productName'");
$stmt->execute()
?>