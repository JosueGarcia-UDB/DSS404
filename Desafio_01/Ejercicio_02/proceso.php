<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Document</title>
</head>
<body class="alum-body">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_alumnos = isset($_POST['num_alumnos']) ? intval($_POST['num_alumnos']) : 0;

    if ($num_alumnos > 0) {
        echo "<form action='resultado.php' method='post' class='alum-form'>";
        echo "<input type='hidden' name='num_alumnos' value='$num_alumnos'>";

        for ($i = 0; $i < $num_alumnos; $i++) {
            echo "<fieldset class='alum-container'>";
            echo "<legend>Alumno " . ($i + 1) . "</legend>";

            echo "<label for='carnet_$i'>Carnet:</label>";
            echo "<input type='text' name='carnet[]' id='carnet_$i' required class='alum-input'>";

            echo "<label for='nombre_$i'>Nombre:</label>";
            echo "<input type='text' name='nombre[]' id='nombre_$i' required class='alum-input'>";

            echo "<div class='nota-container'>";
            echo "<div><label>Nota 1 (50%):</label> <input type='number' name='nota1[]' min='0' max='10' step='0.01' required class='alum-input'></div>";
            echo "<div><label>Nota 2 (25%):</label> <input type='number' name='nota2[]' min='0' max='10' step='0.01' required class='alum-input'></div>";
            echo "<div><label>Nota 3 (25%):</label> <input type='number' name='nota3[]' min='0' max='10' step='0.01' required class='alum-input'></div>";
            echo "</div>";

            echo "</fieldset>";
        }

        echo "<button type='submit' class='alum-button'>Enviar</button>";
        echo "</form>";
    } else {
        echo "<p class='error'>Error: Número de alumnos inválido.</p>";
    }
}
?>
</body>
</html>
