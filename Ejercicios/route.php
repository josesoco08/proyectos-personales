<?php
require_once 'Controller/PlantaController.php';
require_once 'Controller/LoginController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'plantas'; // acción por defecto si no envían
}

$PlantaController = new PlantaController();
$LoginController = new LoginController();
$params = explode("/", $action);

switch($params[0]){
    case 'plantas':
        $PlantaController->listarPlantas();
        break;
    case 'agregarPlanta':
        $PlantaController->agregarPlanta();
        break;
    case 'Login':
        $LoginController->mostrarLogin();
        break;
    case 'verificar':
        $LoginController->verificarLogin();
        break;
    case 'Registro':
        $LoginController->mostrarRegistro();
        break;
    case 'registrarse':
        $LoginController->registrarUsuario();
        break;
    case 'Logout':
        $LoginController->cerrarSesion();
        break;
    default:
        echo("404 Error Not Found");
        break;
}


?>