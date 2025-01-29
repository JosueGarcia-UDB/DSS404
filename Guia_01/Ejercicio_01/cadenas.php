<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de datos en PHP</title>
  <link rel="stylesheet" href="css/cadenas.css">
</head>

<body>
  <?php
  $title = "Tipos de datos en PHP";
  printf("<header>\n");
  printf("\t<h1>$title</h1>\n");
  printf("</header>\n");
  //Ejemplos con números enteros
  $a = 536;   # número decimal
  $a = -258;  # un número negativo
  $a = 0123;  # número octal (equivalente al 83 decimal) 
  $a = 0x12;  # número hexadecimal (equivalente al 18 decimal)
  echo "<article>\n";
  echo "\t<p>\n\t\t$a<br />\n";

  //Ejemplos con números con parte decimal
  $a = 1.579;
  $a = 1.2e3;
  echo "\t\t" . $a . "\t</p>\n";
  echo "</article>\n";

  //Ejemplos con cadena de texto
  $proverbio = <<<PRO
  <article>
    <p>
      <em>"Aquel que pregunta es un tonto por un momento, pero el que no pregunta, permanecerá tonto para siempre." 
      </em>
    </p>
  </article>
  PRO;
  $str = <<<EOD
    <p>
    Este es un ejemplo de cadena expandiendo múltiples líneas
    usando sintaxis de documento incrustado, conocida también como
    sintaxis HERE DOC usada en el lenguaje Perl.<br> $proverbio.
    </p>
EOD;
  $str4 = "<span>\n";
  $str4 .= "\tEste es el curso de ";
  $str4  .= "Desarrollo  de  Aplicaciones  Web  con  Software  Interpretado  en  el Servidor.</span>\n";
  printf("<article>\n");
  printf("\t<h2>Bienvenida: %s</h2>\n", $str4);
  echo $str;
  echo "</article>\n";
  echo "</section>\n";
  ?>
</body>

</html>