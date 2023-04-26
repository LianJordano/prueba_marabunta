<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marabumta</title>
  <link rel="stylesheet" href="libs/sweetalert/sweetalert.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <nav class="menu">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <?php if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]["login"]===true): ?>
        <li><a href="#">E0</a></li>
        <li><a href="#">E1</a></li>
        <li><a href="#">E2</a></li>
        <li><a href="#">E3</a></li>
      <?php endif; ?>
    </ul>
    <ul>
      <?php if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]["login"]===true): ?>
        <li><a style="color: #4ae88c;" href="index.php"><?=ucwords($_SESSION["usuario"]["nombres"])." ".ucwords($_SESSION["usuario"]["apellidos"]) ?></a></li>
        <li><a href="logout.php">Cerrar sesión</a></li>
      <?php else: ?>
        <li><a href="login.php">Iniciar sesión</a></li>
        <li><a href="registro.php">Registro</a></li>
      <?php endif; ?>

    </ul>
  </nav>