<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Vista</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link" href="./index.php?home">Home</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Features</a>
                </li> -->
            </ul>
            <form class="d-flex" action='./index.php' method='post'>
                <?php
                    if (!estaValidado()) {
                        echo '<div class="container mt-3">';
                            echo '<input class="btn btn-primary" type="submit" name="login" value="Login">&nbsp;';
                            echo '<input class="btn btn-primary" type="submit" name="registro" value="Registro">';
                        echo '</div>';
                    } else {
                        echo '<div class="container mt-3">';
                        echo '<h2 class="text-muted">'.$_SESSION['user'].'</h2>';
                        if (esAdmin()) {
                            echo '<input class="btn btn-primary" type="submit" name="admin" value="Administrar">&nbsp;';
                            
                        }
                            echo '<input class="btn btn-primary" type="submit" name="miperfil" value="Mi perfil">&nbsp;';
                            echo '<input class="btn btn-primary" type="submit" name="logout" value="Logout">';
                    }
                        echo '</div>';
                ?>
            </form>
            </div>
        </div>
        </nav>
    </header>
    <main>
        <?php
            require_once $_SESSION['vista'];
        ?>
    </main>
</body>
</html>