<header>
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary"> 
  <div class="container-fluid">
  <a class="navbar-brand p-0" href="#"><img src="./img/logo.png" alt="" width="120"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Inicio'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="index"';endif;?>>Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Cartas'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="cartas"';endif;?>>Galeria de Cartas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Randomizador'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="randomizador" target="_blank"';endif;?>>Randomizador de Mazo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Creador'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="creador"';endif;?>>Creador de Mazo</a>
        </li>
        <div>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Ingresar'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="Ingresar"';endif;?>>Ingresar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>