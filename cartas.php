<?php
$titulo='Cartas';

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
<title>Cartas | DeckStrategy</title>
</head>

<body class="bg-dark">
    
<?php
    require "componentes/_header.php";
    ?>

<section>
    <h1 class="m-4">Todas las cartas</h1>
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
</section>