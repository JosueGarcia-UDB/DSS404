<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parte HTML y parte PHP</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div class="container">
    <header>
      <h1>Demostración de HTML y PHP</h1>
    </header>
    <!-- Parte generada con HTML -->
      <article id="html">
        <div class="text">
          <p>
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            ...
          </p>
          <p>Parte de HTML normal.</p>
          <p>
            &lt;/html&gt;
          </p>
        </div>
        <div class="img">
          <img src="img/html.png" alt="Logo de HTML5" />
        </div>
      </article>
      <?php
      //Parte de la página generada con PHP
      echo "<article id=\"php\">\n";
      echo "\t<div class=\"text\">\n";
      echo "\t\t<p>&lt;?php<br>\n";
      echo "\t\t\t...<br />\n";
      echo "\t\t\tParte con PHP.</p>\n";
      echo "\t\t<p>?&gt;</p>\n";
      echo "\t</div>\n";
      echo "\t<div class=\"img\">\n";
      echo "\t\t<img src=\"img/php.png\" alt=\"Logo de PHP\" />\n";
      echo "\t</div>\n";
      echo "</article>\n";
      ?>
  </div>
</body>

</html>