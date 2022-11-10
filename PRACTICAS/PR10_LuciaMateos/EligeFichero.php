<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
        <form action="./EligeFichero.php" method="post" enctype="multipart/form-data">
            <label for="idNombre">Nombre</label>
            <input type="text" name="nombre" id="idNombre" placeholder="fichero.txt">
            <?
                //comprobar que no este vacio, si lo está pongo un error
                if (vacio("nombre") && enviado()){
                    ?><span style="color:gray"> No existe </span><?
                }
            ?>
        </form>
        <a href="./EditaFichero.php"><input type="submit" value="Editar" name="editar" id="btnEditar"></a>
        <a href="./LeeFichero.php"><input type="submit" value="Leer" name="leer" id="btnLeer"></a>
        
        <ul class="menú"><li><a href="../../index.html">Volver</a></li></ul>
    </main>
</body>
</html>