<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
            <div class="tiles" data-function="tiles-content">

                <div id="test" class="tile" data-toggle="tile1"> 
                    <div class="tile-content_1 mask">
                        <div class="navigation">
                            <h1>O klubie</h1>
                        </div>
                    </div>

                </div>
                <div class="tile">
                    <div class="tile-content_2 mask" data-toggle="tile2">
                        <div class="navigation">
                             <h1>Grafik</h1>
                        </div>
                    </div>
                </div>
                <div class="tile">
                    <div class="tile-content_3 mask" data-toggle="tile3">
                        <div class="navigation">
                             <h1>Oferta</h1>
                        </div>
                    </div>
                </div>
                <div class="tile">
                    <div class="tile-content_4 mask" data-toggle="tile4">
                        <div class="navigation">
                             <h1>Kontakt</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER-->
        <!--        <div id="footer">
                    FOOTER
                </div>-->
    </body> 
</html>

