
<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");

$course_name=$_POST['course_name'];
$start_form=$_POST['start_form'];
$course_duration=$_POST['course_duration'];
$course_price=$_POST['course_price'];
$couser_incharge=$_POST['couser_incharge'];
$course_year=$_POST['course_year'];
$course_url=$_POST['course_url'];
$course_description=$_POST['course_description'];
$file_image=$_POST['file_image'];

$query="INSERT INTO `course` (`course_name`, `start_date`, `duration`, `course_price`, `course_incharge`, `Year`,`discription`) 
VALUES 
       ('$course_name' , 
       '$start_form' , 
       '$course_duration' ,
        '$course_price' , 
        '$couser_incharge' , 
        '$course_year' , 
        '$course_description' , 
         )";


mysqli_query($connect, $query);
header("Location:courses.php");

//TO read data
// $result = mysqli_query("SELECT * FROM course");


// while($row = mysqli_fetch_assoc($result)){
// 	echo $row['course_name'];
// }
