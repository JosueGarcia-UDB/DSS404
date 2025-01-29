<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversión de cadenas</title>
  <link rel="stylesheet" href="css/conversion.css" />
  <script src="js/html5.js"></script>
</head>

<body>
  <?php
  define("SALTO", "\n");
  $cad = "10 metros";
  $string = "3D";
  $value = 20.5;
  $number = 7;

  #Creando el contenedor
  echo "<main>\n";
  echo "<header>\n";
  echo "\t<h1>Trabajando con los tipos de datos en PHP</h1>\n";
  echo "\t<p id=\"datos\">\n";
  echo "\t\tVariables:<br />\n";
  echo "\t\t\$cad = \"$cad\"<br />\n";
  echo "\t\t\$string = \"$string\"<br />\n";
  echo "\t\t\$value = $value <br />\n";
  echo "\t\t\$number = $number <br />\n";
  echo "\t</p>\n";
  echo "</header>\n";

  //Primera operación
  $concat = $cad + $value;
  echo "<section>\n";
  echo "\t<h2>Operaciones con las variables</h2>\n";
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $cad + $value es: <span> = "' . $cad . '" + ' . $val . '</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
  echo "</article>\n";

  //Segunda operación
  $concat = $string + $number;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $string + $number es: <span> = "' . $string . '" + ' . $number . '</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) .
    "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Tercera operación
  $concat = $cad + $number;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $cad + $number es: <span> = "' . $cad . '" + ' . $number . '</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) .
    "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Cuarta operación
  $concat = $string + $value;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $string + $value es: <span> = "' . $string . '" + ' . $value . '</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) .
    "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Quinta operación
  $concat = $cad + $string;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $cad + $string es: <span> = "' . $cad . '" + "' . $string . '"</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) .
    "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Sexta operación
  $concat = $value + $cad;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $val + $cad es: <span> = ' . $value . ' + "' . $cad . '"</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) .
    "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Séptima operación
  $concat = $number + $string;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $number + $string es: <span> = ' . $number . ' + "' . $string . '"</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) .
    "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Octava operación
  $concat = $number + $cad;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $number + $cad es: <span> = ' . $number . ' + "' . $cad . '"</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) .  "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Novena operación
  $concat = $value + $string;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $val + $str es: <span> = ' . $value . ' + "' . $string . '"</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
  echo "\t</article>\n";

  //Décima operación
  $concat = $string + $cad;
  echo "\t<article>\n";
  echo '<p>El valor de $concat = $str + $cad es: <span> = "' . $string . '" + "' . $cad . '"</span> = <span>';
  echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
  echo "\t</article>\n";
  echo "</section>\n";
  echo "</main>\n";
  ?>
</body>

</html>