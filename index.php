<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <title>Bolivery</title>
         


           <!-- Bootstrap CSS -->
                   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">                   
                  <!-- ICONOS google -->
                  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
                        rel="stylesheet">
                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
                  <!-- Hojas de estilos -->
                  <link rel="stylesheet" type="text/css" href="css/styles.css">
 <link rel="stylesheet" type="text/css" href="css/body.css">
<!------------------------------ PWA --------------------------->

  <!-- viewport responsibe -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- icono de la web-->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

  <!-- color de la aplicacion -->
  <meta name="theme-color" content="#6c9b01" />

  <!-- optimización para movil -->
  <meta name="MobileOptimized" content="width" />
  <meta name="HandheldFriendly" content="true" />

<!-- Meta etiqueta para PWA para Apple -->
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta rel="apple-touch-icon" href="img/favicon.png" />
  <meta rel="apple-touch-startup-image" href="img/favicon.png" />

  <!-- Configuracion general PWA -->
          <!-- MANIFEST -->
  <link rel="manifest"  href="manifest.json" />

<!------------------------------ PWA --------------------------->


<!--script del js -->
<script src="main.js"></script>
<script src="push.min.js"></script>



<!--
  <script src="./push.fcm.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
-->
<script type="text/javascript">

function getNotificaction(){
    Push.create("Notificación del Bolivery!", {
    body: "Mi primer notificacion web",
    icon: 'img/favicon.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
}

/*
 var config = {
  FCM: {
  apiKey: 'AIzaSyB874jnvfZDXLnJWCDHwSbHsCmYLVL0Juc',
    authDomain: 'facilito-wtd-66a08.firebaseapp.com',
    databaseURL: 'https://facilito-wtd-66a08.firebaseio.com',
    projectId: 'facilito-wtd-66a08',
    storageBucket: 'facilito-wtd-66a08.appspot.com',
    messagingSenderId: '616037976598'
  }
};

*/

</script>


  </head>
 
  <body>
<!-- MENU -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Bolivery</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
 <!-- MENU -->

 <div align="center" id="section1" class="container-fluid">
  <h1 style="font-size: 70px">Bolivery Online</h1>

</div>
  
  <br>
  <div class="container" align="center" >
    <button type="button" class="btn btn-success" onclick="getNotificaction()"> Push Notification</button>
      <h1>Obtén Beneficios ya ya..!</h1>
      <label>Bolivery es para que hagas tu pedido Wuan...</label>
    </div>


<!-- BODY -->





<div class="box">
    <div class="container">
      <div class="row">
       
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
                        
                        <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                        
            <div class="title">
              <h3>Notificaciones Push</h3>
            </div>
                        
            <div class="text">
              <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
            </div>
                        
            <a href="#">Learn More</a>
                        
           </div>
        </div>   
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
              
              <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                    
            <div class="title">
              <h3>Ventas Online</h3>
            </div>
                        
            <div class="text">
              <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
            </div>
                        
            <a href="#">Detalles</a>
                        
           </div>
        </div>   
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
                        
                        <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                        
            <div class="title">
              <h3>Delivery Express</h3>
            </div>
                        
            <div class="text">
              <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
            </div>
                        
            <a href="#">Learn More</a>
                        
           </div>
        </div>   
         
    </div>    
    </div>
</div>
<!-- BODY -->

<!-- TESTIMONIOS -->

<div class="container content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12-12">
            <div class="testimonials">
              <div class="active item">
                  <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                  <div class="carousel-info">
                    <img alt="" src="http://keenthemes.com/assets/bootsnipp/img1-small.jpg" class="pull-left">
                    <div class="pull-left">
                      <span class="testimonials-name">Lina Mars</span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<center>
<strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
</center>
<br>
<br>
<!-- TESTIMONIOS -->


  

    <div class="clearfix"></div>

<!-- PIE DE PAGINA -->
    <footer id="footer" class="verde"> 
    <div class="container">
    	<h2 class="subheader" >theSniper</h2>
    	<p class="subheader">Envianos un mensaje en cualquiera de estas redes sociales</p>
    	<ul id="networks" >
    		<li>
    			<a href="">
    				<img src="img/twitter.png">
    			</a>
    		</li>
    		<li>
    			<a href="">
    				<img src="img/facebook.png">
    			</a>
    		</li>
    		<li>
    			<a href="">
    				<img src="img/instagram.png">
    			</a>
    		</li>

       <div class="clearfix"></div>
    	</ul>
    </div>
    </footer>
<!-- PIE DE PAGINA -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
