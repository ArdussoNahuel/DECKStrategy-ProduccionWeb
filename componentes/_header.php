<header>
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary"> 
  <div class="container-fluid">
  <a class="navbar-brand p-0 py-1" <?php if ($titulo=='Inicio'): echo 'aria-current="page" href="#"';else: echo'" href="index"';endif;?>><img src="./img/logo.png" alt="logo de DECKStrategy" width="120"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Galeria'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="galeria-cartas"';endif;?>>Galeria de Cartas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Biblioteca'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="biblioteca-mazos"';endif;?>>Biblioteca de Mazos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Randomizador'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="randomizador"';endif;?>>Randomizador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Creador'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="creador-mazo"';endif;?>>Creador de Mazo</a>
        </li>
        <div>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Administracion'): echo 'activo'?>" <?php echo 'aria-current="page" href="#"';else: echo'" href="admin-usuarios"';endif;?>>Administracion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>