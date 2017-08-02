
<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");

echo $query = "INSERT into course (course_name,) VALUES ('{$_POST['course_name']}')";
mysqli_query($connect, $query);

//TO read data
// $result = mysqli_query("SELECT * FROM course");


// while($row = mysqli_fetch_assoc($result)){
// 	echo $row['course_name'];
// }
