<!DOCTYPE html>
<?php
    session_start();
    //      session_destroy();
    $userId = $_SESSION['usr_id'];
//    echo $userId;
 ?>
    


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
            <div class="header-logo"><a href="logout.php"class="header-logo__link">for<span style="color:#FFA17F;">FIT</span>er</a></div>
            <div class="header-buttons">
                <div class="login-button" data-toggle="log-in" >
                    Log out
                </div>
                <div class="register-button" data-toggle="sign-up" >
                    Profile
                </div>
            </div>
        </div>
        <!--MAIN-->
        <div id="container">
            <div class="bg--gradient">
                <a href="logout.php"><input  type="button" name="signup" placeholder="Logout" value="Logout" class="btn"></a>
            </div>
            <table align="center" border="1" width="100%">
                <tr><th> 
                <th>description</th>
                <th>created_at</th>
                </th>
                </tr>
                <?php include 'dbConnect.php' ?>
                <?php
                $res=mysqli_query($connect,"SELECT u.*,con.* FROM users u, content con WHERE u.id = con.users__id");
                while($row=mysqli_fetch_array($res))
                {
                 ?>
                <tr><td><p><?php echo $userId ?>
                    <td><p><?php echo $row['description']; ?></p></td>
                    <td><p><?php echo $row['created_at']; ?></p></td>
                    </td>
                    </tr>
                    <?php
                }
                ?>
                </table>
        </div>

    </body> 
</html>

