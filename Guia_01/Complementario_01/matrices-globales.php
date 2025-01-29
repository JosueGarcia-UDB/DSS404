<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrices globales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
  <h1 class="text-center text-primary mt-3">Matrices superglobales</h1>
  <h3>El nombre del servidor es: <i class="text-primary"><?=$_SERVER['SERVER_NAME']?></i></h3>
  <?php 
  $serverName = $_SERVER['SERVER_NAME'];
  $scriptFileName = $_SERVER['REQUEST_URI'];
  ?>
  <h3 class="fs-6">Y está en la ruta: 
    <span class="text-success fst-italic"><?=$serverName . $scriptFileName?></span>
  </h3>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>