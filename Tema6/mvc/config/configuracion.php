<?php


//BBDD
require_once('./config/conexionBD.php');

//MODELO
require_once('./dao/FactoryBD.php');
require_once('./dao/DAO.php');
require_once('./modelo/Usuario.php');
require_once('./dao/UsuarioDAO.php');

//Core
require_once('./core/funciones.php');
require_once('./core/validaciones.php');


//Controladores
$controladores=array(
    'login'=>'loginController.php'
);

//Vistas
$vistas= array(
    'home'=>'homeView.php',
    'login'=>'loginView.php'
);

?>