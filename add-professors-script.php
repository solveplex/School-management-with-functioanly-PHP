<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");

$time = time();
$id = $time;
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$dob=$_POST['date_of_birth'];
$depertment=$_POST['depertment'];
$position=$_POST['position'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$url=$_POST['url'];

$query="INSERT INTO `professor` (`id`, `First Name`, `Last name`, `date of birth`, `depertment`, `position`, `phone`, `mail`, `url`) VALUES ($id, '$firstname', '$lastname', '$dob', '$depertment', '$position', '$phone_number', '$email', '$url')";

mysqli_query($connect, $query);
$password = md5('123456');

$query="INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES ($id, '$firstname', '$password', '1')";

//$query="INSERT INTO "

mysqli_query($connect, $query);
header("Location:professors.php");
