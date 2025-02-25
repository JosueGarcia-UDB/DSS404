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
            echo "<form action='resultado.php' method='post' class='alum-form' style='width: 50%; margin: 0 auto;'>";
            echo "<input type='hidden' name='num_alumnos' value='$num_alumnos' class='alum-input'>";
            for ($i = 0; $i < $num_alumnos; $i++) {
                echo "<div class='alum-container'>";
                echo "<h3>Alumno " . ($i + 1) . "</h3>";
                echo "<label for='carnet'>Carnet:</label> <input type='text' name='carnet[]' id='carnet' required class='alum-input'><br>";
                echo "<label for='nombre'>Nombre:</label><input type='text' name='nombre[]' id='nombre' required class='alum-input'><br>";
                echo "Nota 1 (50%): <input type='number' name='nota1[]' min='0' max='10' step='0.01' required class='alum-input'><br>";
                echo "Nota 2 (25%): <input type='number' name='nota2[]' min='0' max='10' step='0.01' required class='alum-input'><br>";
                echo "Nota 3 (25%): <input type='number' name='nota3[]' min='0' max='10' step='0.01' required class='alum-input'><br><br>";
                echo "<div>";
            }

            echo "<br><button type='submit' class='alum-button '>Enviar</button>";
            echo "</form>";
        } else {
            echo "<p class='error'>Error: Número de alumnos inválido.</p>";
        }
    }
    ?>
</body>
</html>
