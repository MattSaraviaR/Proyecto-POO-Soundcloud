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

    <!-- enlaces superiores -->
        <!-- <div class="container-fluid" id="div-enlacess" >  
          <div class="row">

            <div class="col-xl-1.2 col-lg-1.2  col-md-2 col-sm-4" >

              <a class="enlace-biblioteca" href="Biblioteca-resumen.html">Resumen</a>
            </div>


            <div class="col-xl-1.2 col-lg-1.2  col-md-2 col-sm-4" >

              <a class="enlace-biblioteca" href="biblioteca-megusta.html">Me gusta </a>
            </div>

            <div class="col-xl-1.2 col-lg-1.2  col-md-2 col-sm-4" >

              <a class="enlace-biblioteca" href="#">Listas</a>
            </div>


            <div class="col-xl-1.2 col-lg-1.2  col-md-2 col-sm-4" >

              <a class="enlace-biblioteca" href="#">Albumes</a>
            </div>

            <div class="col-xl-1.2 col-lg-1.2  col-md-2 col-sm-4" >

              <a class="enlace-biblioteca" href="#">Emisoras</a>
            </div>

            
            <div class="col-xl-1.2 col-lg-1.2  col-md-2 col-sm-4" >

              <a class="enlace-biblioteca" href="#">Siguiendo</a>
            </div>

            
            <div class="col-xl-1.2 col-lg-1.2  col-md-2 col-sm-4" >

              <a class="enlace-biblioteca" href="#">Historial</a>
            </div>


          </div>
        </div> -->
          

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
            
            
       <div class="contariner" id="contenido-listas">
          <div class="row" id="encabezado-biblioteca-listas">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <h5 style="opacity:0.5; font: size 18px !important;"> Escucha tus listas y las que te han gustado:</h5>
                </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <form class="form-inline" id="form-biblioteca-listas">  <input type="text" id="input-biblioteca-listas" placeholder="filtro">   
                      <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button"  id="drp-biblioteca-listas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            todo
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </div>
                        </form>
                        </div>
  
                      </div>   


            <div class="row" id="tarjetas-biblioteca-listas">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12" id="div-tarjetas">
                      
                    <div class="card">
                <img src="../img/marca-sacrificio.jpg" class="card-img-top" alt="tarjeta">
                <div class="card-body">
                <p class="card-text1"> <i class="fas fa-heart" style="opacity:0.5"></i> una rola prrona  <p class="card-text2"> Alguien</p></p> </div> 
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12" id="div-tarjetas">
                      
                    <div class="card">
                <img src="../img/marca-sacrificio.jpg" class="card-img-top" alt="tarjeta">
                <div class="card-body">
                <p class="card-text1"> <i class="fas fa-heart" style="opacity:0.5"></i> una rola prrona  <p class="card-text2"> Alguien</p></p> </div> 
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12" id="div-tarjetas">
                      
                    <div class="card">
                <img src="../img/marca-sacrificio.jpg" class="card-img-top" alt="tarjeta">
                <div class="card-body">
                <p class="card-text1"> <i class="fas fa-heart" style="opacity:0.5"></i> una rola prrona  <p class="card-text2"> Alguien</p></p> </div> 
                  </div>
                </div>
                
                </div>
            </div>




      </div>
       
          
         
      

      
    


            
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