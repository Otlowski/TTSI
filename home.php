<!DOCTYPE html>
<?php
session_start();
$userId = $_SESSION['usr_id'];
$userName = $_SESSION['usr_name'];

//$val = $_REQUEST['update'];
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
                <?php
                
                
                if(isset($_POST['CONTENTid'])){
                   $contentID = $_POST['contentid'];
                   
                   
                    $result = mysqli_query($connect, "SELECT * FROM content WHERE id = '" . $contentID . "'");

                    if ($contentRow = mysqli_fetch_array($result)) {
                        $_SESSION['content_id'] = $contentRow['id'];
                     
                        header("Location: update.php");
                    } else {
                        $errormsg = "Incorrect Request";
                    }
                }
                
                $res = mysqli_query($connect, "SELECT u.*,con.* FROM users u, content con WHERE u.id = con.users__id");
                while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <div class="home-form">
                        <form method="post"class="content<?php echo $row['id']; ?>">
                            <input type="hidden" name="contentid" placeholder="Id" value="<?php echo $row['id']; ?>">
                            <div class="training-title"><?php echo $row['title']; ?></div><br><br>
                            <div class="training-description">    <textarea type="text" name="CONTENTid" placeholder="Update" value="" > <?php echo $row['description']; ?></textarea></div>
                            <!--<textarea type="textarea" name="desription" placeholder="description" ><?php echo $row['description'] ?> <br><br>-->
                            <div>
                                <!-- Input For Add Values To Database-->
                                <!--<input type="submit" name="insert" value="Add">-->

                                <!-- Input For Edit Values -->
                                <input type="button" name="CONTENTid" placeholder="Update" value="Update" style="float:left; color:#fff; background: green; ">

                                <!-- Input For Clear Values -->
                                <input type="button" name="delete" value="Delete" data-toggle="delete" class="content<?php echo $row['id']; ?>"style="float:right; color:#fff; background: red;">

                                <!-- Input For Find Values With The given ID -->
                                <!--<input type="submit" name="search" value="Find">-->
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?> 
            </div>


        </div>

    </body> 
</html>

