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
                  <h5 style="opacity:0.5; font: size 18px !important;"> Escuchadas recientemente:</h5>
                </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <form class="form-inline" id="form-biblioteca-listas"> 
                      <button type="button " id="btn-borrar-historial">borrar todo el historial</button>
                       <input type="text" id="input-biblioteca-historial" placeholder="filtro">   
                    
                        </form>
                        </div>
  
                      </div>   

                      <!-- tarjetas d ela biblioteca historial -->
            <div class="row" id="tarjetas-biblioteca-listas">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12" id="div-tarjetas">
                      
                    <div class="card">
                <img src="../img/saitama.png" class="card-img-top" alt="tarjeta">
                <div class="card-body">
                <p class="card-text1">  una rola prrona  <p class="card-text2"> Alguien</p></p> </div> 
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12" id="div-tarjetas">
                      
                    <div class="card">
                <img src="../img/ippo1.jpg" class="card-img-top" alt="tarjeta">
                <div class="card-body">
                <p class="card-text1">  una rola prrona  <p class="card-text2"> Alguien</p></p> </div> 
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12" id="div-tarjetas">
                      
                    <div class="card">
                <img src="../img/papiescanor1.jpg" class="card-img-top" alt="tarjeta">
                <div class="card-body">
                <p class="card-text1">  una rola prrona  <p class="card-text2"> Alguien</p></p> </div> 
                  </div>
                </div>
                
                </div>
                
                <!-- Historial de rolas reproducidas -->
                <div class="row mt-3" id="div-reproducir-historial">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <h5 style="opacity:0.5; font: size 18px !important;">Escucha las pistas que has reproducido</h5>
                              </div>
                </div>


                <div class="row mt-3">
                <div class="col-xl-2 col-sm-12">
                        <img src="../img/pumpun.jpg" alt="imagen" class="caratula-cancion-historial">
                </div>
                <div class="col-xl-10 col-sm-10">
                    <div>
                            <p class="publicacion-historial">hace 3 meses</p>
                        <button type="button" class="boton-play-historial"><i class="fas fa-play" style="color:white"></i>
                        </button>
                        
                       <span> <p class="autor-rola-historial">grupo1</p>
                        <p class="nombre-rola-historial">nombre de la rola</p></span>
                    </div>
                    <div class="reproductor-historial">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem recusandae hic ut saepe possimus quod aperiam libero unde at, ad qui excepturi iure enim earum officiis veritatis cum eligendi aliquid!

                    </div>
                    <form class="form-inline">
                    <img src="../img/spike1.jpg" alt="logito" class="img-logo-comentarios">
                    <input type="text" class="impt-comentarios-historial" placeholder="Escribe un comentario">
                    </form>
                    </div>
                    
                    <form class="form-inline" id="form-botones-acciones">
                        <button type="button" class="btn-likes-historial"> <i class="fas fa-heart" id="btn-likes">12,3k</i> 
                        </button>
                        <button type="button" class="btn-repost-historial"><i class="fas fa-retweet">1,222</i>
                        </button>
                        <button type="button" class="btn-compartir-historial"><i class="fas fa-share-square">compartir</i>

                        </button>
                        <button type="button" class="btn-mas-historial"><i class="fas fa-ellipsis-h">Mas</i>

                        </button>
                    </form>
                </div>





                <div class="row mt-3">
                        <div class="col-xl-2 col-sm-12">
                                <img src="../img/toyoshita.jpg" alt="imagen" class="caratula-cancion-historial">
                        </div>
                        <div class="col-xl-10 col-sm-10">
                            <div>
                                    <p class="publicacion-historial">hace 3 meses</p>
                                <button type="button" class="boton-play-historial"><i class="fas fa-play" style="color:white"></i>
                                </button>
                                
                               <span> <p class="autor-rola-historial">grupo1</p>
                                <p class="nombre-rola-historial">nombre de la rola</p></span>
                            </div>
                            <div class="reproductor-historial">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem recusandae hic ut saepe possimus quod aperiam libero unde at, ad qui excepturi iure enim earum officiis veritatis cum eligendi aliquid!
        
                            </div>
                            <form class="form-inline">
                            <img src="../img/spike1.jpg" alt="logito" class="img-logo-comentarios">
                            <input type="text" class="impt-comentarios-historial" placeholder="Escribe un comentario">
                            </form>
                            </div>
                            
                            <form class="form-inline" id="form-botones-acciones">
                                <button type="button" class="btn-likes-historial"> <i class="fas fa-heart" id="btn-likes">12,3k</i> 
                                </button>
                                <button type="button" class="btn-repost-historial"><i class="fas fa-retweet">1,222</i>
                                </button>
                                <button type="button" class="btn-compartir-historial"><i class="fas fa-share-square">compartir</i>
        
                                </button>
                                <button type="button" class="btn-mas-historial"><i class="fas fa-ellipsis-h">Mas</i>
        
                                </button>
                            </form>
                        </div>
                        <div class="row mt-3">
                                <div class="col-xl-2 col-sm-12">
                                        <img src="../img/yugo.png" alt="imagen" class="caratula-cancion-historial">
                                </div>
                                <div class="col-xl-10 col-sm-10">
                                    <div>
                                            <p class="publicacion-historial">hace 3 meses</p>
                                        <button type="button" class="boton-play-historial"><i class="fas fa-play" style="color:white"></i>
                                        </button>
                                        
                                       <span> <p class="autor-rola-historial">grupo1</p>
                                        <p class="nombre-rola-historial">nombre de la rola</p></span>
                                    </div>
                                    <div class="reproductor-historial">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem recusandae hic ut saepe possimus quod aperiam libero unde at, ad qui excepturi iure enim earum officiis veritatis cum eligendi aliquid!
                
                                    </div>
                                    <form class="form-inline">
                                    <img src="../img/spike1.jpg" alt="logito" class="img-logo-comentarios">
                                    <input type="text" class="impt-comentarios-historial" placeholder="Escribe un comentario">
                                    </form>
                                    </div>
                                    
                                    <form class="form-inline" id="form-botones-acciones">
                                        <button type="button" class="btn-likes-historial"> <i class="fas fa-heart" id="btn-likes">12,3k</i> 
                                        </button>
                                        <button type="button" class="btn-repost-historial"><i class="fas fa-retweet">1,222</i>
                                        </button>
                                        <button type="button" class="btn-compartir-historial"><i class="fas fa-share-square">compartir</i>
                
                                        </button>
                                        <button type="button" class="btn-mas-historial"><i class="fas fa-ellipsis-h">Mas</i>
                
                                        </button>
                                    </form>
                                </div>
                                <div class="row mt-3">
                                        <div class="col-xl-2 col-sm-12">
                                                <img src="../img/chrona.jpg" alt="imagen" class="caratula-cancion-historial">
                                        </div>
                                        <div class="col-xl-10 col-sm-10">
                                            <div>
                                                    <p class="publicacion-historial">hace 3 meses</p>
                                                <button type="button" class="boton-play-historial"><i class="fas fa-play" style="color:white"></i>
                                                </button>
                                                
                                               <span> <p class="autor-rola-historial">grupo1</p>
                                                <p class="nombre-rola-historial">nombre de la rola</p></span>
                                            </div>
                                            <div class="reproductor-historial">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem recusandae hic ut saepe possimus quod aperiam libero unde at, ad qui excepturi iure enim earum officiis veritatis cum eligendi aliquid!
                        
                                            </div>
                                            <form class="form-inline">
                                            <img src="../img/spike1.jpg" alt="logito" class="img-logo-comentarios">
                                            <input type="text" class="impt-comentarios-historial" placeholder="Escribe un comentario">
                                            </form>
                                            </div>
                                            
                                            <form class="form-inline" id="form-botones-acciones">
                                                <button type="button" class="btn-likes-historial"> <i class="fas fa-heart" id="btn-likes">12,3k</i> 
                                                </button>
                                                <button type="button" class="btn-repost-historial"><i class="fas fa-retweet">1,222</i>
                                                </button>
                                                <button type="button" class="btn-compartir-historial"><i class="fas fa-share-square">compartir</i>
                        
                                                </button>
                                                <button type="button" class="btn-mas-historial"><i class="fas fa-ellipsis-h">Mas</i>
                        
                                                </button>
                                            </form>
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