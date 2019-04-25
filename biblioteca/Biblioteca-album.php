<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Biblioteca</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
  <link rel="shorcut icon" href="../img/icon.png">
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../css/navbar-soundcloud.css">
  <link rel="stylesheet" href="../css/biblioteca.css">
  

  
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 2.8rem;
        }     
      }
      @media (min-width: 768px) {

        #nav-principal{
            max-height:2.8rem;
          }


      }

     
    </style>

</head>

<body  style="background-color:#F2F2F2"> 
    <!-- Fixed navbar -->
    <?php  include("navbar-biblioteca.php");?>

  <!-- Begin page content -->
  <main role="main">
  <div class="container" id="div-principal">

        <div id="div-enlaces">
            <br>
              <a class="enlace-biblioteca" href="Biblioteca-resumen.php">Resumen</a>
              <a class="enlace-biblioteca" href="biblioteca-megusta.php">Me gusta </a>
              <a class="enlace-biblioteca" href="biblioteca-listas.php">Listas</a>
              <a class="enlace-biblioteca" href="Biblioteca-album.php">Albumes</a>
              <a class="enlace-biblioteca" href="biblioteca-emisoras.php">Emisoras</a>
              <a class="enlace-biblioteca" href="biblioteca-siguiendo.php">Siguiendo</a>
              <a class="enlace-biblioteca" href="biblioteca-historial.php">Historial</a>
            </div> 
             
            <img src="../img/album.png" alt="upsi" id="img-album">   
            <h6 style="text-align: center;">Todavia no tienes ningun me gusta</h6>
            <a href="index.php">  <p style="text-align: center;"> Explora las listas de moda</p></a>
          
           
</div>
                  


    
  </main>
    

  <!-- <footer class="footer mt-auto">
    <div class="container">
      <span class="text-muted">Aqui colocaria un reproductor de musica si tuviera unoooo</span>
    </div>
  </footer> -->


  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>