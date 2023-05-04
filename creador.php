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

<body>
    
<?php
    require "componentes/_header.php";
    ?>

<section class="d-flex">
<div id="galeria" style="display: flex;flex-wrap:wrap;justify-content:space-evenly;">
        <?php 
        $cartas=["https://cards.scryfall.io/png/front/9/2/9226e41a-2d0f-45a4-8f20-957b74162f4e.png?1645978267",
        'https://cards.scryfall.io/png/front/1/a/1a280496-dc22-4a8b-a1d0-1fb04be29de4.png?1645977859',
        'https://cards.scryfall.io/png/front/2/9/296acbcc-e479-4885-a7da-1628dd0525a0.png?1645977115',
        'https://cards.scryfall.io/png/front/f/f/ff24f063-11b6-4e53-b3cd-8f2b6304b772.png?1645979011',
        'https://cards.scryfall.io/png/front/4/9/495c29fb-666c-40d2-b5b6-7f8e935a13a6.png?1645979449',
        'https://cards.scryfall.io/png/front/4/3/4365243e-5609-4da5-b1f1-4cfffa82c01b.png?1645979020',
        'https://cards.scryfall.io/png/front/f/6/f653d1be-0e75-4e77-910e-123dd604cc0a.png?1645978654',
        'https://cards.scryfall.io/png/front/3/4/342b8255-5a7c-4bee-ad08-db90dcfd4aac.png?1645978674',
        'https://cards.scryfall.io/png/front/b/2/b253bb2c-c567-4698-ade5-9c7f90bff35a.png?1645978656',
        'https://cards.scryfall.io/png/front/4/6/460485be-ae34-44a7-aa57-cfe9859bdb4c.png?1645979464',
        'https://cards.scryfall.io/png/front/a/7/a7c5cbc6-5ebe-4f05-9634-44f14df3129e.png?1645977482'];

        foreach($cartas as $carta){
        ?>
        <div class="carta"><img class="img-fluid" src=<?php echo $carta ?> alt="..."></div>
        <?php
        }
        ?>
        </div>
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