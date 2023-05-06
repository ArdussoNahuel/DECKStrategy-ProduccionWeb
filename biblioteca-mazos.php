<?php
$titulo='Biblioteca';

require_once("data/conexion.php");
require_once("funciones/funciones.php");
/*
try {
  $conexion = new PDO('mysql:host='.SERVIDORBD.';dbname='.BASEDATOS.';charset=utf8', USUARIOBD, CLAVEBD);
}catch(PDOException $e){
  $error='No se puede acceder a la base de datos';
  header('Location: error');
}

$profes=getProfes($conexion);
$clases=getclases($conexion);
*/

require "componentes/_head.php";

?>
<title>Biblioteca | DeckStrategy</title>
</head>

<body>
    
<?php
    require "componentes/_header.php";
    ?>

<section class="container-fluid">
  <div class="row">
    <div class="col">
      <h1 class="text-center m-4">Biblioteca de Mazos</h1>
      <form class="row align-items-center p-3 mx-3" id="filtro-carta">
        <div class="col">
          <label  for="autoSizingInput">Nombre</label>
          <input type="text" class="form-control my-2" id="autoSizingInput" placeholder="Nombre...">
          <button type="submit" class="btn btn-primary my-2">Buscar</button>
        </div>
        <div class="col">
          <label  for="autoSizingInput">Creador</label>
          <input type="text" class="form-control my-2" id="autoSizingInput" placeholder="Nombre...">
          <label for="autoSizingSelect">Etiqueta</label>
          <select class="form-select my-2" id="selectTipo1">
            <option selected>Cualquiera</option>
            <option value="1">Aggro</option>
            <option value="2">Control</option>
            <option value="3">Combo</option>
          </select>
        </div>
        <div class="col">
        <label for="autoSizingSelect">Color</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Rojo
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Azul
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Verde
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Blanco
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Negro
            </label>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row justify-content-evenly mt-3">
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Elementales combo"</h3>
        <p>por nahuel<p>
        <img class="img-logo" src="./img/logo-rojo.png" alt="...">
        <img class="img-logo" src="./img/logo-azul.png" alt="...">
        <img class="img-logo" src="./img/logo-verde.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Combo</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Boros Aggro"</h3>
        <p>por amalgaman<p>
        <img class="img-logo" src="./img/logo-rojo.png" alt="...">
        <img class="img-logo" src="./img/logo-blanco.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Aggro</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Mono Black Vampiros"</h3>
        <p>por santiago<p>
        <img class="img-logo" src="./img/logo-negro.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Aggro</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Vida Infinita"</h3>
        <p>por nahuel<p>
        <img class="img-logo" src="./img/logo-negro.png" alt="...">
        <img class="img-logo" src="./img/logo-verde.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Combo</span>
        <span class="badge bg-secondary">Control</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Solo Goblins"</h3>
        <p>por ignacio<p>
        <img class="img-logo" src="./img/logo-rojo.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Aggro</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Dimir Midrange"</h3>
        <p>por nahuel<p>
        <img class="img-logo" src="./img/logo-negro.png" alt="...">
        <img class="img-logo" src="./img/logo-azul.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Control</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Combo Gato"</h3>
        <p>por ignacio<p>
        <img class="img-logo" src="./img/logo-blanco.png" alt="...">
        <img class="img-logo" src="./img/logo-negro.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Combo</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Volador Turbo"</h3>
        <p>por santiago<p>
        <img class="img-logo" src="./img/logo-blanco.png" alt="...">
        <img class="img-logo" src="./img/logo-azul.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Combo</span>
        <span class="badge bg-secondary">Tempo</span>
    </a>
    <a class="col-3 text-center py-3 mb-3 card-deck" href="">
        <h3>"Izzet Control"</h3>
        <p>por amalgaman<p>
        <img class="img-logo" src="./img/logo-rojo.png" alt="...">
        <img class="img-logo" src="./img/logo-azul.png" alt="...">
        <p class="mb-0 mt-2">Etiquetas</p>
        <span class="badge bg-secondary">Combo</span>
        <span class="badge bg-secondary">Control</span>
    </a>
  </div>
</section>