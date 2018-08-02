<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/animations.css">
    <title>Document</title>
</head>
<body id="body-main">
    <div>
        <i class="fas fa-bars"></i>
    </div>
    <div class="box-lang-icon">
        <span>FR</span>       
        <span><i id="switch"class="fas fa-toggle-on"></i></span>
        <span>EN</span>     
        
    </div>
    <header id="header-main">
        <h1 class="title-header">ASSOC.BE</h1>
        <div class="box-icons">
            <div class="button-icon">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="button-icon">
                <i class="fas fa-share-alt"></i>
            </div>
            <div class="button-icon">
                <i class="fas fa-envelope"></i>
            </div>
        </div>
    </header>
    <main>
        <div id="section-main">
            <!-- <div class="container-fluid"> -->
                <div  id= "menu-main" class="menu-main">
                        <div id="button-about"class="button-menu--round">
                            <h2>About Us</h2>
                        </div>
                        <div id="section-about"class="container-fluid section d-flex">
                            <div class="row">
                                <?php include("page_aboutus.php");?>
                        
                            </div>
                        </div>
                        <div id ="button-doc"class="button-menu--round"> 
                            <h2>DOC</h2>
                        </div>
                        <div id="section-doc" class="container-fluid section d-flex">
                            <div class="row">
                                <?php include("page_info.php");?>   
                            </div>
                        </div>
                            <div id="button-infos"class="button-menu--round">
                                <h2>INFOS</h2>
                            </div>
                        
                        <div id="section-infos"class="container-fluid section d-flex ">
                            <div class="row">
                                <?php include("page_info.php");?>
                            </div>
                        </div>
                        
                        <div id="button-contact"class="button-menu--round">
                            <h2>CONTACT</h2>
                        </div>
                        <div id="section-contact" class="container-fluid section d-flex">
                            <div class="row">
                                <?php include("page_info.php");?>
                            </div>
                        </div>
                        <form id="section-search" class="section">
                            <div class="search-bar">
                                <input type="text" name = "search" autofocus placeholder="SEARCH">
                            </div>
                        </form>
                </div>
        </div>
      <!--   </div> -->
    </main>
    <footer>
        <div class="box-footer-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-facebook-f"></i>
        </div>
    </footer>    
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>     
</body>
</html>