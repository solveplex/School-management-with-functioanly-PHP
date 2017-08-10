<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");


mysqli_query($connect, $query);
header("Location:professors.php");
