<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de multiplicar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark container">
  <h1 class="text-center mt-5 text-white fw-bold">Tabla de Multiplicar</h1>
  <form class="d-flex justify-content-center align-items-center mt-5 gap-3" method="post">
    <label class="text-white fw-bold" for="numero">Ingrese un numero: </label>
    <input class="rounded-2 border-0" type="number" name="numero" id="numero">
    <input class="btn btn-primary" type="submit" value="Mostrar tabla">
  </form>
  <table class="table table-dark w-50 table-bordered text-center mx-auto my-4">
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $numero = $_POST["numero"];
    }
    if(!(isset($numero))){
      echo "<tr class='text-white'>
      <td class='w-25'>No hay un número ingresado</td>
      </tr>";
    }
    else {
      for($i = 1; $i <= 10; $i++){
        $result = $numero * $i;
        echo "<tr class='pb-0'>
        <td class='w-25'>$numero x $i</td>
        <td class='w-25'> = </td>
        <td class='w-25'>$result</td>
      </tr>";
      }
    }
    ?>
  </table>
</body>
</html>