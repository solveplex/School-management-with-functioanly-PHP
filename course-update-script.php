<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");

$course_id=$_REQUEST['id'];
$course_name=$_POST['course_name'];
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$query="UPDATE course
SET course_name = '$course_name'
WHERE id = $course_id";

mysqli_query($connect, $query);

header("Location:courses.php");