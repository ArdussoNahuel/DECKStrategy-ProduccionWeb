<?php
$titulo='Administracion';

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
<title>Administracion | DeckStrategy</title>
</head>

<body class="mt-5 pt-5">
    
<?php
    require "componentes/_header.php";
    ?>
<section id="baner">
  <h1 class="text-center p-5">Administrador de Usuarios</h1>
</section>

<section class="container">
  <div class="row">
    <div class="col p-3 m-3 filtro-usuario">
     <form action="">
      <div class="input-group my-3 ">
        <input type="text" class="form-control" placeholder="Nombre del Usuario" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
      </div>
     </form>
    </div>
  </div>
  <div class="row">
    <div class="col mx-2">
    <table class="table" id="tabla-usuarios">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Correo Electronico</th>
          <th scope="col">Mazos</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>amalgaman</td>
          <td>amalgaman@gmail.com</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mazos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">"Boros Aggro"</a></li>
                <li><a class="dropdown-item" href="#">"Dimir Control"</a></li>
                <li><a class="dropdown-item" href="#">"Full Goblins"</a></li>
              </ul>
            </div>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-success">Dar Pro</button>
              <button type="button" class="btn btn-warning">Bloquear</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>santiago</td>
          <td>santiago@gmail.com</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mazos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">"Boros Aggro"</a></li>
                <li><a class="dropdown-item" href="#">"Dimir Control"</a></li>
                <li><a class="dropdown-item" href="#">"Full Goblins"</a></li>
              </ul>
            </div>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-success">Dar Pro</button>
              <button type="button" class="btn btn-warning">Bloquear</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>nahuel</td>
          <td>nahuel@gmail.com</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mazos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">"Boros Aggro"</a></li>
                <li><a class="dropdown-item" href="#">"Dimir Control"</a></li>
                <li><a class="dropdown-item" href="#">"Full Goblins"</a></li>
              </ul>
            </div>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-success">Dar Pro</button>
              <button type="button" class="btn btn-warning">Bloquear</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>ignacio</td>
          <td>ignacio@gmail.com</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mazos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">"Boros Aggro"</a></li>
                <li><a class="dropdown-item" href="#">"Dimir Control"</a></li>
                <li><a class="dropdown-item" href="#">"Full Goblins"</a></li>
              </ul>
            </div>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-success">Dar Pro</button>
              <button type="button" class="btn btn-warning">Bloquear</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>fernando</td>
          <td>fernando@gmail.com</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mazos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">"Boros Aggro"</a></li>
                <li><a class="dropdown-item" href="#">"Dimir Control"</a></li>
                <li><a class="dropdown-item" href="#">"Full Goblins"</a></li>
              </ul>
            </div>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-success">Dar Pro</button>
              <button type="button" class="btn btn-warning">Bloquear</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>javier</td>
          <td>javier@gmail.com</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mazos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">"Boros Aggro"</a></li>
                <li><a class="dropdown-item" href="#">"Dimir Control"</a></li>
                <li><a class="dropdown-item" href="#">"Full Goblins"</a></li>
              </ul>
            </div>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-success">Dar Pro</button>
              <button type="button" class="btn btn-warning">Bloquear</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
</section>

