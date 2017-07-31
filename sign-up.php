﻿<?php include("common/header.php");
?>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift University</span>Register <span class="msg">Register a new membership</span></h1>
        <div class="col-md-12">
            <form id="sign_up" class="col-xs-12" method="POST">            
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="namesurname" placeholder="Name Surname" required="" autofocus>
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
                    <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required="">
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-raised g-bg-blush2 waves-effect" >SIGN UP</a>
            </div>
            <div class="m-t-10 m-b--5 align-center">
                <a href="sign-in.html">You already have a membership?</a>
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