<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="../../../style.css">';
    ?>
    <header>
        <h1>PR04</h1>
    </header>
    <main>
    <ul class="menú">
      <li><a href="#">Piramide</a>
        <?php 
          $a = $_GET["filas"];
          for ($i=1; $i <= $a; $i++) { 
              for ($j=1; $j <= $a - $i; $j++) { 
                  echo '&nbsp;&nbsp;';
              }
              for ($h=1; $h <= 2*$i - 1; $h++) { 
                  echo ' * ';
              }
              echo '<br>';
              echo '<br>';
          }
        ?>
      </li>
      <li><a href="../index.html">Volver</a></li>
    </ul>
  </main>
  <footer>
    <p>2ºDAW - Lucia Mateos Esteban</p>
  </footer>
</body>
</html>