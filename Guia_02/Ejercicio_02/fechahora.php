<!DOCTYPE html>
<html lang="es">
<head>
    <title>Fecha y hora del Sistema</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" /> 
    <link rel="stylesheet" href="css/fechahora.css" />
</head>
<body>
  <?php 
  /**
   * Establecer la zona horaria para el servidor web, de modo que concuerde con la hora del país donde
   * se está ejecutando el script.
   */
  error_reporting(E_ALL);
ini_set('display_errors', 1);
  date_default_timezone_set('America/El_Salvador');

  // Obtener el día de la semana
  $dia = date('w');
  switch ($dia) {
    case 0: $dia = 'Domingo'; break;
    case 1: $dia = 'Lunes'; break;
    case 2: $dia = 'Martes'; break;
    case 3: $dia = 'Miércoles'; break;
    case 4: $dia = 'Jueves'; break;
    case 5: $dia = 'Viernes'; break;
    case 6: $dia = 'Sábado'; break;
    default: $dia = 'Día desconocido';  
  }

  // Obtener el mes
  $mes = date('n');
  switch ($mes) {
    case 1: $mes = 'Enero'; break;
    case 2: $mes = 'Febrero'; break;
    case 3: $mes = 'Marzo'; break;
    case 4: $mes = 'Abril'; break;
    case 5: $mes = 'Mayo'; break;
    case 6: $mes = 'Junio'; break;
    case 7: $mes = 'Julio'; break;
    case 8: $mes = 'Agosto'; break;
    case 9: $mes = 'Septiembre'; break;
    case 10: $mes = 'Octubre'; break;
    case 11: $mes = 'Noviembre'; break;
    case 12: $mes = 'Diciembre'; break;
    default: $mes = 'Mes desconocido';  
  }

  $numeroDia = date('j');
  $anio = date('Y');
  $hora = date("h:i:s a");

  $html = <<<HTM
  <header>
    <div class="box box3 shadow3">
      <p>Hoy es $dia, {$numeroDia} de $mes del $anio</p>
    </div>
  </header>
  <section>
    <article>
      <div class="box box4 shadow4">
        <p>Son las $hora</p>
      </div>
    </article>
  </section>
HTM;
  echo $html;
  ?>
  
  <script src="js/modernizr.custom.lis.js"></script>
  <script src="js/prefixfree.min.js"></script>
</body>
</html>
