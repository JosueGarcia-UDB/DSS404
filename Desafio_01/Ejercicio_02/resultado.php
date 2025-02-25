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
        $carnets = $_POST['carnet'];
        $nombres = $_POST['nombre'];
        $notas1 = $_POST['nota1'];
        $notas2 = $_POST['nota2'];
        $notas3 = $_POST['nota3'];

        echo "<h2>Resultados Finales</h2>";
        echo "<table class='alum-table'>";
        echo "<tr><th class='alum-th'>Carnet</th><th class='alum-th'>Nombre</th><th class='alum-th'>Nota 1</th><th class='alum-th'>Nota 2</th><th class='alum-th'>Nota 3</th><th class='alum-th'>Promedio</th><th class='alum-th'>Estado</th></tr>"; 
        for ($i = 0; $i < $num_alumnos; $i++) {
            $nota1 = floatval($notas1[$i]);
            $nota2 = floatval($notas2[$i]);
            $nota3 = floatval($notas3[$i]);

            $promedio = ($nota1 * 0.5) + ($nota2 * 0.25) + ($nota3 * 0.25);
            $estado = ($promedio >= 6) ? "Aprobado" : "Reprobado";
            $estadoClass = strtolower($estado);

            echo "<tr>
                <td class='alum-td'>{$carnets[$i]}</td>
                <td class='alum-td'>{$nombres[$i]}</td>
                <td class='alum-td'>{$nota1}</td>
                <td class='alum-td'>{$nota2}</td>
                <td class='alum-td'>{$nota3}</td>
                <td class='alum-td'>" . number_format($promedio, 2) . "</td>
                <td class='alum-td $estadoClass'>$estado</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Error al procesar los datos.</p>";
    }
    ?>
</body>
</html>
