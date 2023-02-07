<?php
if (isset($_REQUEST['nuevaCuenta'])) {
    $_SESSION['controlador'] = $controladores['registro'];
    $_SESSION['pagina'] = 'Registrar';
    $_SESSION['vista'] = $vistas['registro'];
    require_once $_SESSION['controlador'];
} else {
    if (isset($_REQUEST['user'])) {
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['contraseña'];

        if (empty($user)) {
            $_SESSION['error'] = '<script>alert("Debe rellenar el nombre");</script>';
        }
        if (empty($pass)) {
            $_SESSION['error'] = '<script>alert("Debe rellenar la contraseña");</script>';
        } else {
            $usuario = UsuarioDAO::valida($user, $pass);
            if ($usuario != null) {
                $_SESSION['validado'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['nombre'] = $usuario->nombre;
                $_SESSION['rol'] = $usuario->rol;
                $_SESSION['vista'] = $vistas['home'];
                $_SESSION['controlador'] = $controladores['home'];
                header('Location: ./index.php');
            }
        }
    }
}
