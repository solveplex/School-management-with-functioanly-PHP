<?php
$count = count($_SESSION);
    if($count==0){
        header("Location: sign-in.php");
    } ?>