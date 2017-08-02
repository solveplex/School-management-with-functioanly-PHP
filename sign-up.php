<?php 
include("common/header.php");
include("common/database.php");

 // if (isset($_POST['username']) && isset($_POST['password'])){
 //        $username = $_POST['username'];
 //        $email = $_POST['email'];
 //        $password = $_POST['password'];
 //        $confirmpassword = $_POST['confirmpassword'];
 
 //        $query = "INSERT INTO `employee` (username,email,password,confirmpassword) VALUES ('$username','$email','".md5($password)."','".md5($confirmpassword)."')";
                  
 //        $result = mysqli_query($connect, $query);} 
       
 //    

if (isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password =$_POST['password'];
    $name =$_POST['name'];

    $query= "INSERT INTO users (username,email,password,name) VALUES ('{$username}' , '{$email}' , '".md5($password)."' , '{$name}')";

    $result =mysqli_query($connect , $query);
}


?>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift University</span>Register <span class="msg">Register a new membership</span></h1>
        <div class="col-md-12">
        <?php
            if(isset($result))
            {
              echo '<div id="text" class="alert alert-success">You Will Successfully Registered!!</div>';
                                    }


        ?>

            <form id="sign_up" class="col-xs-12" method="POST" action="sign-up.php">            
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="username" required="" autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-email"></i>
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="name" minlength="6" placeholder="Your Name" required="">
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                </div>
                <div class="m-t-10 m-b--5 align-center">
                    <a href="sign-in.php">You already have a membership?</a>
                </div>
            </form>
        </div>
    </div>  
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js --> 
<?php
include("common/fotter.php");
?>