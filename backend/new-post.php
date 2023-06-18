<?php
require 'connect.php';

$title = strip_tags($_POST['title']);
$message = strip_tags($_POST['message']);
$author = $_COOKIE['email'];
$date = date("d.m.Y");

$conn->query("INSERT INTO `post` (`title`, `message`, `comments_num`, `author`, `date`) VALUES ('$title', '$message', 0, '$author', '$date')");

header("Location: ../user/dashboard.php");
?>