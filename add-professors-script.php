<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");


<?php 
 
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$dob=$_POST['date_of_birth'];
$depertment=$_POST['depertment'];
$position=$_POST['position']
$phone_number=$_POST['phone_number']
$email=$_POST['email']
$url=$_POST['url']

//INSERT INTO `professor` (`id`, `First Name`, `Last name`, `date of birth`, `depertment`, `position`, `phone`, `mail`, `url`, `image`, `username`, `password`, `user_id`) VALUES (NULL, 'Nahid', 'chowdhruy', '2017-08-02', 'ECE', 'ASSOciat professor', '01911005597', 'nahdi@gmail.com', 'www.xperd.com', '', 'xpertdev', '12345', '');

$query="INSERT INTO "

mysqli_query($connect, $query);
header("Location:professors.php");
