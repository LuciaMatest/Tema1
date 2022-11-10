<?php
require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita fichero</title>
</head>

<body>
    <?php
    echo '<link rel="stylesheet" href="./style.css">';
    ?>
    <header>
        <h1>PR10</h1>
    </header>
    <main>
        <ul class="menú">
            <li><a href="#">Ficheros</a></li>
        </ul>
        <form action="./EditaFichero.php" method="post" enctype="multipart/form-data">
            <textarea id="idTexto" name="texto" rows="4" cols="50"></textarea>
        </form>
        <input type="button" value="Modificar">
        <a href="./LeeFichero.php"><input type="button" value="Guardar"></a>
        <ul class="menú">
            <li><a href="./EligeFichero.php">Volver</a></li>
        </ul>
    </main>
</body>

</html>