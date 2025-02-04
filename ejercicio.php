<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio de condicionales</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      background-color: rgb(255, 255, 255);
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      display: grid;
      place-items: center;
      height: 100vh;
    }
    p{
      font-size: 2.5rem;
    }
  </style>
</head>
<body>
<?php 

$userName = "Josué Eduardo";
$destinoFinal = "BINAES";
$destinoA = "Universidad Don Bosco";
$destinoB = "BINAES";
$destinoC = "Universidad Andres Bello";
$IVA = 0.1;

if($destinoFinal == $destinoA) {
  $costoInicial = 0.5;
  $impuesto = $costoInicial * $IVA;
  $costoFinal = 0.5 + $impuesto;
    echo "<p><strong>$userName</strong>, el costo para ir a $destinoA es de $$costoFinal</p>";
}
elseif($destinoFinal == $destinoB) {
  $costoInicial = 0.2;
  $impuesto = $costoInicial * $IVA;
  $costoFinal = 0.2 + $impuesto;
  echo "<p><strong>$userName</strong>, el costo para ir a $destinoB es de $$costoFinal</p>";
}
elseif($destinoFinal == $destinoC) {
  $costoInicial = 0.2;
  $impuesto = $costoInicial * $IVA;
  $costoFinal = 0.2 + $impuesto;
  echo "<p><strong>$userName</strong>, el costo para ir a $destinoC es de $$costoFinal</p>";
}
else {
  echo "<p>No se puede encontrar el destino</h1>";
}
?>
</body>
</html>