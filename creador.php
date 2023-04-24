<?php
$titulo='Creador';

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
<title>Creador de Mazos | DeckStrategy</title>
</head>

<body class="bg-dark">
    
<?php
    require "componentes/_header.php";
    ?>

<section class="d-flex">
<div id="galeria" style="display: flex;flex-wrap:wrap;justify-content:space-evenly;">
        <div class="carta">
        </div>
        <div class="carta"></div>
        <div class="carta"></div>
        <div class="carta"></div>
        <div class="carta"></div>
        <div class="carta"></div>
        <div class="carta"></div>
        <div class="carta"></div>
        <div class="carta"></div>
        <div class="carta"></div>
    </div>
    <div id="deckbuilder">
        <form action="">
            <input style="height: 50px;font-size:25px" type="text" name="nombre" id="nombre" placeholder="Nombre del Mazo">
        </form>
        <ul class="ml-3 d-flex" style="flex-direction: column;">
            <li>
                x 2 - Nombre de carta
            </li>
            <li>
                x 2 - Nombre de carta
            </li>
            <li>
                x 2 - Nombre de carta
            </li>
            <li>
                x 2 - Nombre de carta
            </li>
            <li>
                x 2 - Nombre de carta
            </li>
            <li>
                x 2 - Nombre de carta
            </li>
        </ul>
    </div>
</section>