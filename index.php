<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
        <!--<link rel="stylesheet" type="text/css" href="css/main.css">-->
        
        <!--changeContent script-->
        
        <script src="assets/js/jquery-2.2.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    
        <script src="assets/js/changeContentVC.js" type="text/javascript"></script>
    </head>
    <body>  
        <!--HEADER-->
        <div id="header">  
            <div class="header-logo"><a href="/"class="header-logo__link">for<span style="color:#FFA17F;">FIT</span>er</a></div>
            <div class="header-buttons">
                <button><a>Log In</a></button>
                <button>Sign Up</button>
            </div>
        </div>
        <!--MAIN-->
        <div id="container">
            <div class="bg--gradient">
                <div class="banner"></div>
            </div>
            <?php include 'tiles.php';?>
            <?php include 'klub.php';?>
    </body> 
</html>

