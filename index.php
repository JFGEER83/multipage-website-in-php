<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/576up.css">
    <link rel="stylesheet" href="assets/style/animations.css">
    <title>Document</title>
</head>
<body id="body-main">
    <i id="button-menu" class="fas fa-bars"></i>
    <div id="section-aside">
            <?php include("menu.php");?>
    </div>
   <!--  <div class="box-lang-icon">
        <span>FR</span>       
        <span><i id="switch"class="fas fa-toggle-on"></i></span>
        <span>EN</span>      
    </div> -->
    
    <header>
    <div id="header-main">
            <div id="particles-js" class ="background-header"></div>
            <div id="box-main">
                <div id="title-main">
                    <h1 class="title-header">ASSOC<span id="title-second-color">.BE</span></h1>
                </div>
                <div id="box-message1">
                        <h2 id ="message-main1">Envie de créer votre ASBL?</h2>
                    </div>
                    <div id="box-message2">
                        <h2 id ="message-main2">Nous avons la réponse à vos questions</h2>
                    </div>
                <div id="banner-header"class="title-header">
                    <h2 id="message-main3"class="mt-3 col-10">N'hésitez plus!!!</h2>
                    <button id="button-header"><a href="#section-contact">CONTACT US</a></button>
                </div>
           
            </div>
           
                <div id="title-phone"><h1>ASSOC.be</h1></div>
               
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
            
    </div>
                <div id="header-576up" class="header-576up">
                     <div id="button-sticky-home"class="button-menu--round small">
                        <h2><a href="#section-search">HOME</a></h2>
                    </div>
                    <div id="button-sticky-about"class="button-menu--round small">
                        <h2><a href="#section-about">About Us</a></h2>
                    </div>
                    <div id="button-sticky-doc"class="button-menu--round small">
                        <h2><a href="#section-doc">DOC</a></h2>
                    </div>
                    <div id="button-sticky-infos"class="button-menu--round small button-sticky-infos">
                        <h2><a href="#section-infos">INFOS</a></h2>
                    </div>
                    <div id="button-sticky-contact"class="button-menu--round small">
                        <h2><a href="#section-contact">CONTACT</a></h2>
                    </div>
                </div>
            </div>      
        </div>
    </header>
    <main>
        <div id="section-main">
                <div  id= "menu-main" class="menu-main initial">
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
                                <div class="col-12">
                                    <h2>TEST DOC</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dicta repellat placeat nam aspernatur optio at eum maxime animi voluptates quis exercitationem ullam perspiciatis sapiente iusto dignissimos laboriosam, in accusantium molestias quia, eveniet voluptate atque? Libero repudiandae iure optio unde fugiat itaque mollitia, possimus cum corrupti. Iusto delectus numquam quos.</p>
                                </div>
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
                        
                        <form id="section-search" class="section">
                            <div class="search-bar">
                                <input type="text" name = "search" autofocus placeholder="SEARCH">
                            </div>
                        </form>
                </div>
        </div>
    </main>
    <footer>
        <div id="section-contact" class="container-fluid section d-flex">
                <div class="row">
                    <?php include("page_contact.php");?> 
                    <div class="col-sm-6 box-footer-icons">

                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-facebook-f"></i> 
                    </div>
                </div>
               
                   
               
               
        </div>
    </footer>       
<script src="assets/js/script.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/particles.min.js"></script>
<script>
    $(document).ready(function(){
    // au clic sur un lien
    $('a').on('click', function(evt){
       // bloquer le comportement par défaut: on ne rechargera pas la page
       evt.preventDefault(); 
       // enregistre la valeur de l'attribut  href dans la variable target
	var target = $(this).attr('href');
       /* le sélecteur $(html, body) permet de corriger un bug sur chrome 
       et safari (webkit) */
	$('html, body')
       // on arrête toutes les animations en cours 
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 500 );
    });
});
</script>
<script>
  /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
  particlesJS.load('particles-js', 'assets/particlesjs-config.json', function() {
  console.log('callback - particles.js config loaded');
});
  
</script>
<script src="upup.min.js"></script>
<script>
  UpUp.start({
    'content-url': 'offline.html', // show this when the user is offline
    'assets': ['offline.css']
  });
</script>
</body>
</html>