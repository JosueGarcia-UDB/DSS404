<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de dolares a euros</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <section class="container">
    <form class="form mx-auto" action="conversion.php" method="post">
      <label for="dolar">Digite un valor en dólares:</label>
      <input class="input" type="text" name="dolar" id="dolar">
      <input class="btn btn-success m-2" type="submit" value="Convertir">
      <?php
      if(isset($_POST['dolar'])){
        $dolar = $_POST['dolar'];
        $euro = round($dolar * 0.96, 2);
        echo "<p>El valor en euros es: $$euro</p>";
      }
      ?>
    </form>
  </section>
</body>
</html>