<?php
//session_destroy();
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include 'dbConnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $result = mysqli_query($connect, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['firstname'];
        $successmsg = $row['firstname'];
        header("Location: home.php");   
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>
<div class="container-login" style="display: none;">
    <div class="row">
        <div class="login-form">
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
            <fieldset class="account-info">
                 <label>
                    Email
                    <input type="text" name="email" placeholder="Email" class="form-control" />
                        <span class="text-danger"></span>
                </label>
                <label>
                    Password
                     <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"></span>
                </label>
            </fieldset>
            <fieldset class="account-action">
                <input type="submit" name="login" value="Log In" class="btn">

            </fieldset> 
            
        </form>
        </div>
    </div>
</div>
