<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
        <link rel="stylesheet" type="text/css" href="assets/css/table.css">
        <link rel="stylesheet" type="text/css" href="assets/css/register.css">
        <!--<link rel="stylesheet" type="text/css" href="css/main.css">-->
        
        <!--changeContent script-->
        
        <script src="assets/js/jquery-2.2.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    
        <script src="assets/js/changeContentVC.js" type="text/javascript"></script>
        <script src="assets/js/scheduleVC.js" type="text/javascript"></script>
    </head>
    <body>  
        <!--HEADER-->
        <div id="header">  
            <div class="header-logo"><a href="/"class="header-logo__link">for<span style="color:#FFA17F;">FIT</span>er</a></div>
            <div class="header-buttons">
                <div class="login-button" data-toggle="log-in" >
                    Log in
                </div>
                <div class="register-button" data-toggle="sign-up" >
                    Sign Up
                </div>
            </div>
        </div>
        <!--MAIN-->
        <!--<div id="container">-->
            <div class="bg--gradient">
                <!--<div class="register-form" style="display: none;">  </div>-->
                <!--<div class="banner"></div>--> 
            //<?php include 'tiles.php';?>
            <?php // include 'klub.php';?>
                <div class="login-form"><?php include 'login.php' ?></div>
            </div>
           
        <!--</div>-->
    </body> 
</html>

