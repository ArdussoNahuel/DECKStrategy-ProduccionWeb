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

<body class="mt-5 pt-5">
    
<?php
    require "componentes/_header.php";
    ?>

<section class="container-fluid">
  <div class="row">
     <div class="col-9">
        <div class="row">
            <div class="col">
            <form class="row align-items-center p-3 position-relative" id="filtro-carta">
                <div class="col">
                <label  for="autoSizingInput">Nombre</label>
                <input type="text" class="form-control my-2" id="autoSizingInput" placeholder="Nombre...">
                <button type="submit" class="btn btn-primary my-2">Buscar</button>
                </div>
                <div class="col">
                <label for="autoSizingSelect">Tipos</label>
                <select class="form-select my-2" id="selectTipo1">
                    <option selected>Cualquiera</option>
                    <option value="1">Criatura</option>
                    <option value="2">Encantamiento</option>
                    <option value="3">Instantaneo</option>
                </select>
                <select class="form-select my-2" id="selectTipo2">
                    <option selected>Cualquiera</option>
                    <option value="1">Legendaria</option>
                    <option value="2">Guerrero</option>
                    <option value="3">Zombie</option>
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
                'https://cards.scryfall.io/png/front/a/7/a7c5cbc6-5ebe-4f05-9634-44f14df3129e.png?1645977482',
                "https://cards.scryfall.io/png/front/9/2/9226e41a-2d0f-45a4-8f20-957b74162f4e.png?1645978267",
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
                <div class="col-lg-2 my-3"><img class="img-fluid" src=<?php echo $carta ?> alt="..."></div>
                <?php
                }
                ?>
        </div>
     </div>
     <div class="col-3" id="deckbuilder">
        <form action="">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre del Mazo">
            <button type="submit" class="btn btn-primary my-2">Guardar</button>
        </form>
      <div class="carta-en-mazo d-flex justify-content-between my-2 px-2">
        <p>4x Invasor de la simiente Ahn</p>
        <div class="d-flex">
            <img class="img-logo-carta-en-mazo" src="./img/logo-rojo.png" alt="...">
        </div>
      </div>
      <div class="carta-en-mazo d-flex justify-content-between my-2 px-2">
        <p>4x Invasor de la simiente Ahn</p>
        <div class="d-flex">
            <img class="img-logo-carta-en-mazo" src="./img/logo-blanco.png" alt="...">
            <img class="img-logo-carta-en-mazo" src="./img/logo-verde.png" alt="...">
        </div>
      </div>
      <div class="carta-en-mazo d-flex justify-content-between my-2 px-2">
        <p>4x Loba de Arlinn</p>
        <div class="d-flex">
            <img class="img-logo-carta-en-mazo" src="./img/logo-verde.png" alt="...">
        </div>
      </div>
      <div class="carta-en-mazo d-flex justify-content-between my-2 px-2">
        <p>4x Invasor de la simiente Ahn</p>
        <div class="d-flex">
            <img class="img-logo-carta-en-mazo" src="./img/logo-negro.png" alt="...">
        </div>
      </div>
      <div class="carta-en-mazo d-flex justify-content-between my-2 px-2">
        <p>4x Invasor de la simiente Ahn</p>
        <div class="d-flex">
            <img class="img-logo-carta-en-mazo" src="./img/logo-azul.png" alt="...">
        </div>
      </div>
     </div>
  </div>  

</section>
