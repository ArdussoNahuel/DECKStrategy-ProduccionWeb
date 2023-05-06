<?php
$titulo='Randomizador';

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
<title>Randomizador | DeckStrategy</title>
</head>

<body>
    
<?php
    require "componentes/_header.php";
    ?>

<section class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="text-center m-5 px-5">
        <h1>Randomizador</h1>
        <p>¿Querés jugar algo nuevo y no tenés ideas?,¿Querés plantearte un desafío por mera diversión? En este apartado podés generar un mazo aleatorio de forma automática, configurando los parámetros como más te guste. Si el resultado te convence, podés guardarlo en tu perfil.</p>
      </div>
      <form class="row w-75 align-items-center p-3 mx-auto" id="filtro-carta">
        <div class="col">
          <label for="autoSizingSelect">Tipo</label>
          <select class="form-select my-2" id="selectTipo1">
            <option selected>Cualquiera</option>
            <option value="1">Control</option>
            <option value="2">Aggro</option>
            <option value="3">Midrange</option>
          </select>
          <label for="autoSizingSelect">Tematica</label>
          <select class="form-select my-2" id="selectTipo2">
            <option selected>Cualquiera</option>
            <option value="1">Humano</option>
            <option value="2">Guerrero</option>
            <option value="3">Zombie</option>
          </select>
          <button type="submit" class="btn btn-primary my-2">Crear</button>
          <button type="submit" class="btn btn-primary my-2 d-inline-block">Guardar</button>
        </div>
        <div class="col-3">
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
        'https://cards.scryfall.io/png/front/a/7/a7c5cbc6-5ebe-4f05-9634-44f14df3129e.png?1645977482'];

        foreach($cartas as $carta){
        ?>
        <a class="col-lg-2 m-3" href="#">
          <h1 class="position-relative top-50 start-50 translate-middle" ><span class="badge text-bg-primary">x4</span></h1>
          <img class="img-fluid" src=<?php echo $carta ?> alt="...">  
        </a>
        <?php
        }
        ?>
  </div>
</section>