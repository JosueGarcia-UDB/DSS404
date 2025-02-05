<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular la edad</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <section class="container my-3">
    <div class="border border-primary rounded">
      <form class="form py-2 px-3" action="fecha-nac.php" method="post">
        <div class="d-flex justify-content-center items-center">
          <label class="form-label col-3 align-self-center m-0" for="fechaNac">Digite su fecha de nacimiento: </label>
          <input class="col-8 form-sm-control" type="date" id="fechaNac" name="fechaNac" placeholder="dd/mm/aaaa" />
        </div>
        <div class="d-flex justify-content-center">
          <div class="mt-2">
            <input class="btn btn-primary" type="submit" value="Enviar" name="enviar" />
          </div>
        </div>
      </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
      if (!empty($_POST['fechaNac'])) {
        $fechaNac = $_POST['fechaNac']; 

        $fechaNacDate = date_create($fechaNac);

        if ($fechaNacDate) { 
          $hoy = date_create(); 
          $diferencia = date_diff($hoy, $fechaNacDate);

          $edad = $diferencia->y; 
          $diasVividos = $diferencia->days;

          echo "<h3 class='mt-4 text-center'>Su edad es: $edad años</h3>";
          echo "<h3 class='text-center'>El número de días que ha vivido es: <strong class='text-primary'>$diasVividos días</strong></h3>";
        } else {
          echo "<h3 class='text-center text-danger'>Formato de fecha inválido.</h3>";
        }
      } else {
        echo "<h3 class='mt-4 text-center text-danger'>Por favor, ingrese una fecha válida.</h3>";
      }
    }
    ?>

  </section>
</body>

</html>