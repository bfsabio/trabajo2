<?php
@session_start();
session_destroy();

include("../reglog/soporte.php");

$usuarioLogueado = $auth->usuarioLogueado($db);

if ($usuarioLogueado == null) {
  $nombre = "Invitado";
} else {
  $nombre = $usuarioLogueado->getUsername();
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>DeTodo3D</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>
<body>
  <header>
    <?php
      $a=5;
      include '../include/navbar.php';
    ?>
  </header>


<?php switch (link) {
  case '1':
    ?>
    <li>acceso a servicio 1</li>
    <?php
    break;
  default:?>
  <div class="d-flex justify-content-center" style="margin-top:30px;">
  <iframe src="https://www.google.com/maps/d/embed?mid=1OEqtt7FTnLyp8X1RKNGpOqzwdHGq5Z_a" width="740" height="580"></iframe>
  </div>
  <?php
    break;
} ?>



<!-- <div class="runner-container" style="width: 552px; height: 150px;">
  <canvas class="runner-canvas" width="552" height="150" style="width: 552px; height: 150px;">
  </canvas>
</div> -->
</body>
</html>
