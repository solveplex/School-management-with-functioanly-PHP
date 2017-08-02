<?php 
 //must be start sesson_start(); function top on the sign in page 
include("common/header.php");
include("common/database.php");
    $count = count($_POST);
    if($count>0){
        /*echo "<pre>";
        print_r($_POST);*/   
        $username = $_POST['username'];
        $password = MD5($_POST['password']); 
        echo $query =  "SELECT * 
                        FROM users 
                        WHERE username='$username' 
                        and password='$password'";
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result);
        if($num == 0){
            header("Location: sign-in.php?status=error");
            echo "<br><br><br><br>invalid user";
        }
        else{
            echo "<pre>";
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['name'] = $row['Name'];
                $_SESSION['age'] = $row['age'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['gender'] = $row['gender'];
                //$_session['form er name er value']=$row['table er collam er name']
            }
            header("Location:dashboard.php");
        }
    }
    
    
    
?>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift University</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="col-md-12">
            <form id="sign_in" method="POST">
                            <?php 
                    if(isset($_GET['status'])){
                        echo "<div class='alert alert-danger'>Username/password did not match</div>";
                    }
                ?>
                
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-raised waves-effect g-bg-blush2"  value="Sign IN">
                        
                        <a href="sign-up.html" class="btn btn-raised waves-effect" >SIGN UP</a>
                    </div>
                    <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<?php include("common/fotter.php"); ?>