<header>
<nav class="navbar navbar-dark navbar-expand-lg bg-dark p-0">
  <div class="container-fluid">
    <a class="navbar-brand p-0" href="#"><img src="./img/logo.png" alt="" width="120"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-dark" id="navbarNav">
      <ul class="navbar-nav bg-dark">
        <li class="nav-item bg-dark">
          <a class="nav-link <?php if ($titulo=='Inicio'): echo 'active" aria-current="page" href="#"';else: echo'" href="index"';endif;?>>Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Cartas'): echo 'active" aria-current="page" href="#"';else: echo'" href="cartas"';endif;?>>Cartas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Randomizador'): echo 'active" aria-current="page" href="#"';else: echo'" href="randomizador" target="_blank"';endif;?>>Randomizador de Mazo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($titulo=='Creador'): echo 'active" aria-current="page" href="#"';else: echo'" href="creador"';endif;?>>Creador de Mazo</a>
        </li>
        <div>
        <li id="ingresar" class="nav-item">
          <a class="nav-link pr-3 mr-3 <?php if ($titulo=='Ingresar'): echo 'active" aria-current="page" href="#"';else: echo'" href="Ingresar"';endif;?>>Ingresar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>