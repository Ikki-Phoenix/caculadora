<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Calculadora básica</title>
  </head>

  <body class="bg-secondary">
    <section class="container w-50 p-3 mx-auto my-3 bg-white">
      <h1>Calculadora</h1>
      <form class="d-flex flex-column p-3 bg-light" action="index.php" method="post">

        <label>Digite um número
          <input type="number" name="n1" required>
        </label>

        <label>Operação
          <select name="op" class="btn bg-secondary text-light">
            <option>Selecione uma operação</option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>x²</option>
            <option>√</option>
          </select>
        </label>
        <label>Digite outro número
          <input type="number" name="n2" required>
        </label>
        <input type="submit" class="btn bg-secondary text-light w-25" value="Calcular">
      </form>
      <p>
        <?php
        error_reporting(0);

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];

        switch ($op) {
          case '+':
            $resultado = $n1 + $n2;
            break;
          case '-':
            $resultado = $n1 - $n2;
            break;
          case '*':
            $resultado = $n1 * $n2;
            break;
          case '/':
            $resultado = $n1 / $n2;
              break;
          
          default:
          
            break;
        }

        echo "<p><b>O resultado é = ". $resultado. "</b></p>";
         ?>
      </p>
    </section>

   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
