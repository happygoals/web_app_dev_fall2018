<?php
include 'connection.php';

$productName = $_POST["productName"];
$productLocation = $_POST["productLocation"];
$productPrice = $_POST["productPrice"];

$stmt = $connection->prepare("INSERT INTO Product (name, price, machines, type) values ('$productName', '$productPrice', '$productLocation', 'food')");
$stmt->execute()
?>