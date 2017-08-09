<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");


$course_id=$_GET['id'];


echo $query= "DELETE FROM course WHERE id=$course_id";


mysqli_query($connect, $query);
header("Location:courses.php");