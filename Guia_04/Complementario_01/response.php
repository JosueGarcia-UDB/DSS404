<?php
function encontrarMayor(...$numeros) {
    return max($numeros);
}

function encontrarMenor(...$numeros) {
    return min($numeros);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numeros'])) {
    $numeros = array_map('intval', $_POST['numeros']);

    if (count($numeros) < 2) {
        echo "<script>alert('Debe seleccionar al menos 2 números.'); window.history.back();</script>";
        exit;
    }

    $mayor = encontrarMayor(...$numeros);
    $menor = encontrarMenor(...$numeros);
} else {
    echo "<script>alert('No se recibieron datos válidos.'); window.history.back();</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-4">
    <h1 class="text-center text-primary">Resultados</h1>

    <div class="alert alert-success">
        <p><strong>Números seleccionados:</strong> <?= implode(", ", $numeros) ?></p>
        <p><strong>Mayor número:</strong> <?= $mayor ?></p>
        <p><strong>Menor número:</strong> <?= $menor ?></p>
    </div>

    <a href="numeros.html" class="btn btn-primary">Volver</a>
</div>
</body>
</html>
