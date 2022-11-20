<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
    
<body>
    <header>Editar Archivo</header>
    <?php
        
        //Comprobar que el fichero existe, si no existe crea uno nuevo con el nombre que se ha pasado
        if(!file_exists($_GET['fichero'])){
            echo "<br>El fichero no existe";
            echo "<br>Creando uno nuevo";
            
            if($fp = fopen($_GET['fichero'],'w')){
                fclose($fp);
                echo "<br>Se ha Creado el fichero ".$_GET['fichero'];
            }else{
                echo "<br>Ha habido un error al abrir el fichero";
            }
        }else{
            
    ?>
        <div>
            <form action="./validaForm.php" method ="post" enctype="multipart/form-data">
                <label for=""><h3>Editar fichero</h3></label>
                <br>
                <?php


                    //Se intenta abrir el archivo
                   if(!$fp = fopen($_GET['fichero'],'r')){
                    echo "<br>Ha habido un error al abrir el archivo";
                    }else{
                        //Si se abre comprueba que este vacio, si esta vacio se da un aviso, sino se escribe en la pantalla
                        if(filesize($_GET['fichero'])==0){
                            echo "El archivo esta vacio";                     
                        }else{
                            ?>
                            <textarea name="texto" id="AreaTexto" cols="20" rows="20"><?php while($lea = fgets($fp,filesize($_GET['fichero']))){echo $lea;}?></textarea>
                            <?php
                            fclose($fp);
                        }
                    }
                
                ?>

                <input id="NombreFich" name="fichero" type="hidden" value="<?php echo $_GET['fichero']?>">
                <input type="submit" value="modificar" name="modificado">
            </form>
        </div>
           
    <?php
        }
    ?>
    
    



    <a href="..">Volver</a>
    <footer>
        <a href="./verPag.php?pagina=editar.php">Ver Código</a>
    </footer>
</body>
</html>


