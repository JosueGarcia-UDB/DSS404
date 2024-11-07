
<?php
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='utf-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Datos personales PHP</title>";
    echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
    echo "</head>";
    echo "<body>";


    $nombre = 'Josué Eduardo García Estrada';
    $pais = 'El Salvador';
    $municipio = 'Aguilares';
    $departamento = 'San Salvador';
    $colonia = 'Colonia 3 campanas';
    $lugarNacimiento = "$colonia, $municipio, $departamento, $pais";
    $edad = 17;
    $carnet = 'GE240098';

    echo "<table class='mt-2 container table table-bordered table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>Nombre</th>";
    echo "<th scope='col'>Lugar de Nacimiento</th>";
    echo "<th scope='col'>Edad</th>";
    echo "<th scope='col'>Carnet</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$lugarNacimiento</td>";
    echo "<td>$edad</td>";
    echo "<td>$carnet</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</body>";
    echo "</html>";
?>