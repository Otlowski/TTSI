<!DOCTYPE html>
<?php
session_start();
$userId = $_SESSION['usr_id'];
$userName = $_SESSION['usr_name'];
$contenTID = $_SESSION['content_id'];
function getPosts() {
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['title'];
    $posts[2] = $_POST['description'];
    return $posts;
}
?>



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
            <div class="header-logo"><a href="logout.php"class="header-logo__link">for<span style="color:#FFA17F;">FIT</span>er</a></div>
            <div class="header-buttons">
                <div class="login-button" data-toggle="log-in" style="border: 2px solid;" >
                    <a href="logout.php" style="color:#FFA17F; ">Log out</a>
                </div>
                <div class="profile-field" data-toggle="sign-up">
                    Welcome <?php echo $userName ?> 
                </div>
            </div>
        </div>
        <!--MAIN-->
        <div id="container">
            <div class="bg--gradient" style="padding:35px;">
                <?php include 'dbConnect.php' ?>
                    
                
                    <div class="home-form">
                        <form action="home.php" method="post">
       
                            <div class="training-title"><?php echo $contenTID;?></div><br><br>
                            <div class="training-description"></div>
                        
                            <div>
                                <!-- Input For Add Values To Database-->
                                <!--<input type="submit" name="insert" value="Add">-->

                                <!-- Input For Edit Values -->
                                <input type="submit" name="update" value="Update" style="float:left; color:#fff; background: yellow;">
                                    
                                <!-- Input For Clear Values -->
                                <!--<input type="submit" name="delete" value="Delete" style="float:right; color:#fff; background: red;">-->

                                <!-- Input For Find Values With The given ID -->
                                <!--<input type="submit" name="search" value="Find">-->
                            </div>
                        </form>
                    </div>

            </div>


        </div>

    </body> 
</html>

