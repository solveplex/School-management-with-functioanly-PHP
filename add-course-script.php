
<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");

$course_name=$_POST['course_name'];

$query="INSERT INTO `course` (`course_name`) VALUES ('$course_name')";


mysqli_query($connect, $query);
header("Location:courses.php");

//TO read data
// $result = mysqli_query("SELECT * FROM course");


// while($row = mysqli_fetch_assoc($result)){
// 	echo $row['course_name'];
// }
