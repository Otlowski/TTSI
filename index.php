<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
        <link rel="stylesheet" type="text/css" href="assets/css/table.css">
        <link rel="stylesheet" type="text/css" href="assets/css/register.css">
        <link rel="stylesheet" type="text/css" href="assets/css/home.css">

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

        <div class="bg--gradient">
            <?php include 'tiles.php'; ?>
            <?php include 'klub.php';?>
            <?php include 'login.php' ?>

            <?php
            include_once 'dbConnect.php';

//set validation error flag as false
            $error = false;

//check if form is submitted
            if (isset($_POST['signup'])) {
                $name = mysqli_real_escape_string($connect, $_POST['name']);
                $email = mysqli_real_escape_string($connect, $_POST['email']);
                $password = mysqli_real_escape_string($connect, $_POST['password']);
                $cpassword = mysqli_real_escape_string($connect, $_POST['cpassword']);

                //name can contain only alpha characters and space
                if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
                    $error = true;
                    $name_error = "Name must contain only alphabets and space";
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error = true;
                    $email_error = "Please Enter Valid Email ID";
                }
                if (strlen($password) < 6) {
                    $error = true;
                    $password_error = "Password must be minimum of 6 characters";
                }
                if ($password != $cpassword) {
                    $error = true;
                    $cpassword_error = "Password and Confirm Password doesn't match";
                }
                if (!$error) {
                    if (mysqli_query($connect, "INSERT INTO users(firstname,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
                        $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
                    } else {
                        $errormsg = "Error in registering...Please try again later!";
                    }
                }
            }
            ?>
            <div class="container-register">
            <div class="register-form" style="display: none;">
                <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                    <fieldset class="account-info">
                        <label>
                            Name
                            <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if ($error) echo $name; ?>" class="form-control" />
                            <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                        </label>
                        <label>
                            Email
                            <input type="text" name="email" placeholder="Email" required value="<?php if ($error) echo $email; ?>" class="form-control" />
                            <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                        </label>
                        <label>
                            Password
                            <input type="password" name="password" placeholder="Password" required class="form-control" />
                            <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                        </label>
                        <label>
                            Confirm Password
                            <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                            <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                        </label>
                    </fieldset>
                    <fieldset class="account-action">
                        <input type="submit" name="signup" value="Sign Up" class="btn">
                    </fieldset>
                </form>
            </div>
            <span class="text-success"><?php if (isset($successmsg)) {
                echo $successmsg;
            } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) {
                echo $errormsg;
            } ?></span>
        </div>
    </body> 
</html>

