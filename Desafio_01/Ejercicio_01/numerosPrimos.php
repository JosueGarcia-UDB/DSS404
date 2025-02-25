<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Números Primos</title>
  <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
  <main>
    <h1 class="titlePrimes">Calcular números primos</h1>
    <form class="formPrimes" method="post">
      <label for="number">Ingrese un número</label>
      <input type="number" name="number" id="number" required min=0 />
      <button type="submit">Calcular</button>
    </form>
    <table class="tablePrimes">
      <thead>
        <tr>
          <th>No.</th>
          <th>Número primo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $numberInitial = $_POST["number"];
          if (isset($numberInitial)) {
            function es_primo($num)
            {
              if ($num <= 1) {
                return false;
              }
              for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                  return false;
                }
              }
              return true;
            }

            function encontrar_siguiente_primo($start, $count)
            {
              $primes = [];
              $num = $start + 1;
              while (count($primes) < $count) {
                if (es_primo($num)) {
                  $primes[] = $num;
                }
                $num++;
              }
              return $primes;
            }

            $primes = encontrar_siguiente_primo($numberInitial, 15);
            foreach ($primes as $index => $prime) {
              echo "<tr>";
              echo "<td>" . ($index + 1) . "</td>";
              echo "<td>" . $prime . "</td>";
              echo "</tr>";
            }
          }
        } else {
          echo "<tr><td colspan='2'>Digite un número</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </main>
  <footer>
    <p>Desafio 01 - Números Primos</p>
  </footer>
</body>

</html>