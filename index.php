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

<body class="bg-dark">
    
<?php
    require "componentes/_header.php";
    ?>

<section id="mazos" class="d-flex" style="justify-content:space-around;align-items:center">
    <div class="listamazos">
        <h2>Mazos Populares</h2>
        <ul>
          <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
    </div>
    <div class="listamazos">
        <h2>Mazos Profesionales</h2>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
    </div>
    <div class="listamazos">
        <h2>Mazos Meme</h2>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
        <ul>
        <a href="">
            <li class="d-flex" style="justify-content:space-around;align-items:center">
              <div>
               <div>
               <h5>Nombre de Mazo</h5>
               <p>Usuario</p>
              </div>
              </div>
              <div>
              <p>Color</p>
              </div>
              <div>
               <p>Etiqueta 1, Etiqueta 2, Etiqueta 3</p>
              </div>
            </li>
            </a>
        </ul>
    </div>
</section>