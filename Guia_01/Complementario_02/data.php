
<?php 
    $html = <<<html
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Datos personales PHP</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    </head>
    <body>
html;


    $nombre = 'Josué Eduardo García Estrada';
    $pais = 'El Salvador';
    $municipio = 'Aguilares';
    $departamento = 'San Salvador';
    $colonia = 'Colonia 3 campanas';
    $lugarNacimiento = "$colonia, $municipio, $departamento, $pais";
    $edad = 17;
    $carnet = 'GE240098';

    $html .=  "<table class='mt-2 container table table-bordered'>";
    $html .=  "<thead class='table-info'>";
    $html .=  "<tr>";
    $html .=  "<th scope='col'>Nombre</th>";
    $html .=  "<th scope='col'>Lugar de Nacimiento</th>";
    $html .=  "<th scope='col'>Edad</th>";
    $html .=  "<th scope='col'>Carnet</th>";
    $html .=  "</tr>";
    $html .=  "</thead>";
    $html .=  "<tbody>";
    $html .=  "<tr>";
    $html .=  "<td>$nombre</td>";
    $html .=  "<td>$lugarNacimiento</td>";
    $html .=  "<td>$edad</td>";
    $html .=  "<td>$carnet</td>";
    $html .=  "</tr>";
    $html .=  "</tbody>";
    $html .=  "</table>";
    $html .=  "</body>";
    $html .=  "</html>";

    echo $html
?>