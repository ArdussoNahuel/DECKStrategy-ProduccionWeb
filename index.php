<?php
$titulo='Inicio';

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
<title>Inicio | DeckStrategy</title>
</head>

<body class="mt-5 pt-5">
    
<?php
    require "componentes/_header.php";
    ?>
<section id="baner">
  <h1 class="text-center p-5">Bienvenido a DeckStrategy: MTG</h1>
</section>

<section class= "container-fluid mt-3" id="mazos">
    <div class="row pt-3 justify-content-evenly">
      <div class="col-3 listamazo text-center">
        <div class="row my-3"><h2>Mazos Populares</h2></div>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Boros Aggro"</h3>
            <p>por amalgaman<p>
            <img class="img-logo" src="./img/logo-rojo.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Combo</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Dimir Midrange"</h3>
            <p>por nahuel<p>
            <img class="img-logo" src="./img/logo-azul.png" alt="...">
            <img class="img-logo" src="./img/logo-negro.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Control</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Selesnya Tokens"</h3>
            <p>por santiago<p>
            <img class="img-logo" src="./img/logo-verde.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Aggro</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Mill Combo"</h3>
            <p>por ignacio<p>
            <img class="img-logo" src="./img/logo-negro.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <img class="img-logo" src="./img/logo-azul.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Control</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Aggro Hechizos"</h3>
            <p>por amalgaman<p>
            <img class="img-logo" src="./img/logo-rojo.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Aggro</span>
            </div>
          </a>
      </div>
      <div class="col-3 listamazo text-center">
        <div class="row my-3"><h2>Mazos Pro</h2></div>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Boros Aggro"</h3>
            <p>por amalgaman<p>
            <img class="img-logo" src="./img/logo-rojo.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Combo</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Dimir Midrange"</h3>
            <p>por nahuel<p>
            <img class="img-logo" src="./img/logo-azul.png" alt="...">
            <img class="img-logo" src="./img/logo-negro.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Control</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Selesnya Tokens"</h3>
            <p>por santiago<p>
            <img class="img-logo" src="./img/logo-verde.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Aggro</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Mill Combo"</h3>
            <p>por ignacio<p>
            <img class="img-logo" src="./img/logo-negro.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <img class="img-logo" src="./img/logo-azul.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Control</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Aggro Hechizos"</h3>
            <p>por amalgaman<p>
            <img class="img-logo" src="./img/logo-rojo.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Aggro</span>
            </div>
          </a>
      </div>
      <div class="col-3 listamazo text-center">
        <div class="row my-3"><h2>Mazos Meme</h2></div>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Boros Aggro"</h3>
            <p>por amalgaman<p>
            <img class="img-logo" src="./img/logo-rojo.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Combo</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Dimir Midrange"</h3>
            <p>por nahuel<p>
            <img class="img-logo" src="./img/logo-azul.png" alt="...">
            <img class="img-logo" src="./img/logo-negro.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Control</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Selesnya Tokens"</h3>
            <p>por santiago<p>
            <img class="img-logo" src="./img/logo-verde.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Aggro</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Mill Combo"</h3>
            <p>por ignacio<p>
            <img class="img-logo" src="./img/logo-negro.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <img class="img-logo" src="./img/logo-azul.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Control</span>
            </div>
          </a>
          <a class="row mb-3 text-center card-deck" href="">
            <div class="col">
            <h3>"Aggro Hechizos"</h3>
            <p>por amalgaman<p>
            <img class="img-logo" src="./img/logo-rojo.png" alt="...">
            <img class="img-logo" src="./img/logo-blanco.png" alt="...">
            <p class="mb-0 mt-2">Etiquetas</p>
            <span class="badge bg-secondary">Aggro</span>
            </div>
          </a>
      </div>
    </div>
</section>

