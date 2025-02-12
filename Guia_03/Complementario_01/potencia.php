<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elevar a la potencia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <h1 class="text-center mt-5 text-white fw-bold">Elevar a la potencia</h1>
  <form class="d-flex justify-content-center align-items-center mt-5 gap-3" action="potencia.php" method="post">
    <label  class="text-white fw-bolder" for="base">Base:</label>
    <input type="number" name="base" id="base">
    <label class="text-white fw-bolder" for="exponente">Exponente:</label>
    <input type="number" name="exponente" id="exponente">
    <input class="btn btn-primary" type="submit" value="Calcular">
  </form>
  <?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $base = $_POST["base"];
    $exponente = $_POST["exponente"];
    $resultado = 1;
    for($i = 0; $i < $exponente; $i++){
      $resultado *= $base;
    }
    echo "<h2 class='text-center mt-5 text-white fw-bold'>El resultado de $base elevado a $exponente es: 
    <span class='text-success'>$resultado</span></h2>";
  }
  ?>
</body>
</html>