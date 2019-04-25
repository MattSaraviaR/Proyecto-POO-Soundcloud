 <!-- Fixed navbar -->
 <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="nav-principal">
        <a class="navbar-brand" href="../index.php" style="margin-left:3%;"><img src="../img/icono1.png" alt="SoundCloud" class="icono"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav" style="margin-right: 30px ">
            <li class="nav-item active" id="btn-inicio" style="width: 75px;" >
              <a class="nav-link " href="../index.php" >Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"id="btn-stream"style="width: 75px;">
              <a class="nav-link" href="#" >Stream</a>
            </li>
            <li class="nav-item"id="btn-biblioteca"style="width: 75px;">
              <a class="nav-link" href="Biblioteca-resumen.php" tabindex="-1" id="btn-biblioteca">Biblioteca </a>
            </li>
          </ul>
    
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search"  id="barra-busqueda">
            <button  type="button" id="btn-busqueda"><i class="fas fa-search"></i></button>
          </form>
    
          <ul class="navbar-nav mr-0">
              <li class="nav-item">
                  <a class="nav-link" href="#"  id="btn-subir" >Subir</a>
              </li>
    
              <li class="nav-item ">
                <div class="dropdown show" id="dropd-nav">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropd-nav" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="padding-top: 0.7rem; ">
                    Spike Spiguel 
                  </a>
    
                  <div class="dropdown-menu" aria-labelledby="dropd-nav">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="../biblioteca/biblioteca-megusta.html">Me gusta</a>
                    <a class="dropdown-item" href="#">Emisoras</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Siguiendo</a>
                    <a class="dropdown-item" href="#">A quien seguir</a>
                    <a class="dropdown-item" href="#">Prueba pro</a>
                    <a class="dropdown-item" href="#">Pistas</a>
                  </div>
                </div>
              </li>
    
              <li class="nav-item">
                  <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
              </li>
    
              <li class="nav-item">
                  <a class="nav-link" href="#"><i class="far fa-envelope"></i></a>
              </li>
    
              <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-ellipsis-h"></i></a>
              </li>
    
    
            </ul>
        </div>
      </nav>
    </header>