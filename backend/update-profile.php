<?php
require 'connect.php';
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$country = strip_tags($_POST['country']);
$address = strip_tags($_POST['address']);

$conn->query("UPDATE `user` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `country` = '$country', `address` = '$address'");
$result = $conn->query("SELECT * FROM `user` WHERE `name` = '$name' AND `email` = '$email'");
$user = $result->fetch_assoc();

setcookie("name", $user['name'], time()+3600*24*30, "../");
setcookie("email", $user['email'], time()+3600*24*30, "../");

header("Location: ../user/profile.php");
?>