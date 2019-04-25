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


            <div class="container">
                <div class="row" id="encabezado-biblioteca-seguidos">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" >
                                <h5 style="opacity:0.5; font: size 18px !important;"> Escucha tus listas y las que te han gustado:</h5>
                              </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <form class="form-inline" id="form-biblioteca-listas">  <input type="text" id="input-biblioteca-siguiendo" placeholder="filtro">   
                                    
                                      </form>
                                      </div>
                </div>

                <div class="row" id="div-tarjetas-seguidos">
                       <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 mr-4">
                        <div  class="card-img-top" alt="tarjeta">
                                <img src="../img/Kamina.png" class="card-img-top" alt="fotoo" id="img-biblioteca-seguidos">
                                <div class="card-body">
                                  <h5 class="card-title" style="text-align: center;">Kamina</h5>
                                  <button class="btn-siguiendo" style="display:block">siguiendo</button>
                                </div>
                              </div>
                            </div> 

                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 mr-4">
                                    <div  class="card-img-top" alt="tarjeta">
                                            <img src="../img/onizuka.jpg" class="card-img-top" alt="fotoo" id="img-biblioteca-seguidos">
                                            <div class="card-body">
                                              <h5 class="card-title" style="text-align: center;">Profe-Onizuka</h5>
                                              <button class="btn-siguiendo" style="display:block">siguiendo</button>
                                            </div>
                                          </div>
                                        </div> 
                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 mr-4">
                                                <div  class="card-img-top" alt="tarjeta">
                                                        <img src="../img/vash.jpg" class="card-img-top" alt="fotoo" id="img-biblioteca-seguidos">
                                                        <div class="card-body">
                                                          <h5 class="card-title" style="text-align: center;">Vash-estampida</h5>
                                                          <button class="btn-siguiendo" style="display:block">siguiendo</button>
                                                        </div>
                                                      </div>
                                                    </div> 

                </div>



            </div>
            

            
    </div>


    
    </main>
       

    <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>