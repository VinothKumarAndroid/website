<?php
require_once('config.php');
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$connection = connect();
$sql = "INSERT INTO users(name,email,subject,comments) VALUES ($name,$email,$subject,$message)";
$connection->query($sql);
$connection->close();
?>