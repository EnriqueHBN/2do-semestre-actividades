<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <form action="selan_main_212.php" method="post">
  
  <?php
 
 $usuario    = "selan_admin";
 $contrasena = "0.Xe$B!yUnfO";
 try{
     $conn = new PDO('mysql:host=localhost;dbname=selena_main_212', $usuario, $contrasena);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }
     catch(PDOException $e)
         {
             echo "ERROR: " . $e->getMessage();
         }
         
?>

    <title>proyecto</title>
</head>
<body>

    <div class="head">

        <div class="logo">
            <a href="#"><img id= "logop" src="imagenes/logo.jpeg" alt="tacos 1"></a>
        </div>

        <nav class="navbar"> 
            <a href="#inicio">Inicio</a>
            <a href="#us">Nosotros</a>
            <a href="#store">Catalogo</a>
            <a href="#contact">Contacto</a>

        </nav>

    </div>

    <header id= "inicio" class="content header">
        <h2 idclass="title">Haz todas tus ideas realidad!</h2>
        <div class="slider-container">
            <div class="slider">
              <div class="slide">
                <img src="imagenes/playera2.jpg" alt="Imagen 1">
              </div>
              <div class="slide">
                <img src="imagenes/taza.jpg" alt="Imagen 2">
              </div>
              <div class="slide">
                <img src="imagenes/corte1.jpeg" alt="Imagen 3">
              </div>
              <div class="slide">
                <img src="imagenes/playera3.jpg" alt="Imagen 3">
              </div>
              <div class="slide">
                <img src="imagenes/taza1.jpg" alt="Imagen 3">
              </div>
              <div class="slide">
                <img src="imagenes/corte2.jpeg" alt="Imagen 3">
              </div>
              <div class="slide">
                <img src="imagenes/playeraidea.jpg" alt="Imagen 3">
              </div>
              <div class="slide">
                <img src="imagenes/tazaidea.jpg" alt="Imagen 3">
              </div>
              <div class="slide">
                <img src="imagenes/letroidea.png" alt="Imagen 3">
              </div>
            </div>
          </div>

        <div class="btn-home">
            <a href="#" class="btn">Saber mas </a>
            <a href="#" class="btn">Saber mas </a>


        </div>

    </header>

    <section class="content sau">
        <h2 class="title">Productos</h2>
      
             <div class="box-container">
                <div class="box">
                    <h3>Playeras sublimadas</h3>
                    <p><img id= "playerasfondo" src="imagenes/Proyecto nuevo (4).png" alt="tacos 1"></p>
                </div>
                
             <div class="box-container">
                <div class="box">
                    <h3>Botellas sublimadas</h3>
                    <p><img id= "tazafondo" src="imagenes/tazasin.png" alt="tacos 1"></p>
                </div>
                
             <div class="box-container">
                <div class="box">
                    <h3>Corte lazer</h3>
                    <p><img id= "tazafondo" src="imagenes/letroidea.png" alt="tacos 1"></p>
                </div>


             </div>

    </section>
    <section id= "us"class="content about"style=";padding:1px 16px; height:1100px;">

        <h2 class="title">Nosotros</h2>
        <p>Somos una empresa de personalizado, nos dedicamos a hacer que todos tus gustos en playeras y vasos se haga realidad!
        </p>
        <img src="https://scontent.fgdl4-1.fna.fbcdn.net/v/t1.6435-9/122187368_124421479437479_8693949844634407673_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=L_b8VKZfuRYAX8JiDKp&_nc_oc=AQlRaE7C40bq-WjQq5ABlT8pYaE2n3etS3YHrdtDx8q8RUIK8WOu-l0gi8_ggreRwCU&_nc_ht=scontent.fgdl4-1.fna&oh=00_AfDV6BC-LJMrqq0r0wRM-XTYcWS0EvLaR8t9G03OvTDRBQ&oe=64A87D83" alt="prueba1">
        <p>Los diseños los puedes mandar ya hechos. y lo comvertimos en tu compra personalizada favorita.</p>
        <img src="https://scontent.fgdl4-1.fna.fbcdn.net/v/t1.6435-9/122120859_124052896141004_6636373561417140744_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=riqHfPvT-xIAX-7bWOr&_nc_ht=scontent.fgdl4-1.fna&oh=00_AfAZ7yu-hhL4yU9Luvpt7X2UjVneECDz7ji1yEwL-Tf_5Q&oe=64A878D1" alt="prueba2">
        <p>Hay diseños que podemos hacer nosotros, todo para tener a nuestros compradores satisfechos!</p>
        <img src="https://scontent.fgdl4-1.fna.fbcdn.net/v/t1.6435-9/123138992_127172169162410_7723222968843648500_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Jqcyxisg_yYAX-UT3bh&_nc_ht=scontent.fgdl4-1.fna&oh=00_AfDmJhfDSTHNd4ehpojR5tBIN_nSI0SPwje6-pS0GTMxcw&oe=64A88970" alt="prueba3">
        <p> De igual forma, Podemos hacer carteles o figuras de cortes lazer. Nuentro trabajo es que todo lo que tus nos pidas se haga un hecho.</p>
        <a href="#" class="btn">Saber mas</a>

    </section>

    <section id="store" class="content price" style="padding:1px; height:1600px; ">

      <h2 class="title">Catalogo</h2>
      <p>Para poder realizar una compra tendras que seguir los siguientes pasos; 1-contacta a selan desde cualquiera de sus redes sociales. 2-pregunta por el articulo que fue mas de tu interes. 3-Un trabajador de selan te contestara y seguira junto contigo la compra.
      </p>
      <h2>Playeras</h2>
      <div class="container-fluid mt-5">
        <div class="col-md-12">
          <div id="myImage" class="galeriaplayeras">
  
            <div class="playerasimagen1" ></div>
    
            <div class="playerasimagen2" ></div>
    
            <div class="playerasimagen3" ></div>
    
            <div class="playerasimagen4" ></div>
    
            <div class="playerasimagen5" ></div>
    
            <div class="playerasimagen6" ></div>
    
        </div>
        </div>
    </div>
    <h2>Vasos y botellas</h2>

    <div class="container-fluid mt-5">
      <div class="col-12">
        <br>
        <div id="myImage" class="galeriaplayeras">

          <div class="vasosimagen1" ></div>
  
          <div class="vasosimagen2" ></div>
  
          <div class="vasosimagen3" ></div>
  
          <div class="vasosimagen4" ></div>
  
          <div class="vasosimagen5" ></div>
  
          <div class="vasosimagen6" ></div>
  
      </div>
      </div>
  </div>

  <h2>Cortes Lazer</h2>
  <div class="container-fluid mt-5">
    <div class="col-12">
      <div id="myImage" class="galeriaplayeras">

        <div class="letreroimagen1" ></div>

        <div class="letreroimagen2" ></div>

        <div class="letreroimagen3" ></div>

        <div class="letreroimagen4" ></div>

        <div class="letreroimagen5" ></div>

        <div class="letreroimagen6" ></div>

    </div>
    </div>
</div>


  </article>

        </article>

    </section>

    <section id= "contact" class="content contact" style="padding:1px; height: 400px; background-color: #cf6545;">
        <h2 class="title">Contacto</h2>
        <p>+ 52 479 109 4994  <i class="fab fa-whatsapp"></i></p>
        <p><a href="https://www.instagram.com/selan.creativo/" target="_top">@selan.creativo (instagram)</a>  <i class="fab fa-instagram"></i></p>
    <p><a href="https://www.facebook.com/selancreativo" target="_top">Selan (Grupo de facebook)</a><i class="fab fa-facebook"></i></p>
    <p><a href="https://www.linkedin.com/in/enrique-ba%C3%B1uelos-075562238/" target="_top">Enrique Bañuelos (Linkedin)</a><i class="fab fa-linkedin"></i></p>
    <p><a href="https://www.linkedin.com/in/cristian-ibrahim-salom%C3%B3n-m%C3%A1rquez-59abb1273/" target="_top">Cristian Salomon (Linkedin)</a><i class="fab fa-linkedin"></i></p>    
       <h3>Selan © 2020 - 2023 Reservados todos los derechos</h3>
    </section>
    <script>
        window.onload = function() {
          var slider = document.querySelector('.slider');
          var slides = document.querySelectorAll('.slide');
          var currentSlide = 0;
          var slideInterval = setInterval(nextSlide, 2500); // Cambiar slide cada 3 segundos (3000 milisegundos)
    
          function nextSlide() {
            slider.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
            currentSlide = (currentSlide + 1) % slides.length;
          }
        };
      </script>

<script>
  $(document).ready(function() {
    $("#fadeButton").click(function() {
      $("#myImage").fadeToggle();
    });
  });
</script>
</body>
</html>
