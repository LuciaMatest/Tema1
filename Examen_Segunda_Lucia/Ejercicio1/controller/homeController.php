<?php
if (isset($_REQUEST['user'])) {
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    if (empty($user)) {
        $_SESSION['error'] = 'Debe rellenar el nombre';
    }
    if (empty($pass)) {
        $_SESSION['error'] = 'Debe rellenar la contraseña';
    } else {
        $usuario = UsuarioDAO::valida($user, $pass);
        if ($usuario != null) {
            $_SESSION['validado'] = true;
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['perfil'] = $usuario->perfil;
            if (esAdmin()) {
                $_SESSION['vista'] = $vistas['sorteo'];
                $_SESSION['controlador'] = $controladores['sorteo'];
            } else {
                $_SESSION['vista'] = $vistas['apuesta'];
                $_SESSION['controlador'] = $controladores['apuesta'];
            }

            header('Location: ./index.php');
        }
    }
}
