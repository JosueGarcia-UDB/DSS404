<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificar Carácter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center">Identificar Tipo de Carácter</h2>
            <form action="" method="POST" class="mt-3">
                <div class="mb-3">
                    <label for="caracter" class="form-label">Ingrese un carácter:</label>
                    <input type="text" name="caracter" id="caracter" class="form-control" maxlength="1" required>
                </div>
                <button type="submit" name="enviar" class="btn btn-primary">Verificar</button>
            </form>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
                $caracter = $_POST['caracter'];
                
                if (preg_match("/[aeiouáéíóúAEIOUÁÉÍÓÚ]/", $caracter)) {
                    $mensaje = "El carácter ingresado es una vocal.";
                } elseif (preg_match("/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/", $caracter)) {
                    $mensaje = "El carácter ingresado es una consonante.";
                } elseif (preg_match("/[0-9]/", $caracter)) {
                    $mensaje = "El carácter ingresado es un número.";
                } elseif (preg_match("/[.,;:()\"'!¡¿?#$%&]/", $caracter)) {
                    $mensaje = "El carácter ingresado es un símbolo.";
                } else {
                    $mensaje = "El carácter ingresado no se puede procesar.";
                }
                
                echo "<div class='alert alert-info mt-3'>$mensaje</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
