

<!DOCTYPE html>

<?php
session_start();
session_destroy();

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
        </div>
        <!--MAIN-->
        <div id="container">
            <div class="bg--gradient" style="padding:35px;">
                <div style="height: 35px;width: 50%;margin: 0 auto;">
                <br><br><br><h1 style="margin:0 auto;">Zostales wylogowany! <a href="/">Wroc na strone glowna</a>  </h1>
            </div>
            

        </div>

    </body> 
</html>

