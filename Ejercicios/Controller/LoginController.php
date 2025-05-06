<?php




require_once 'View/LoginView.php';
require_once 'Model/UserModel.php';



class LoginController{


    private $view;
    private $userModel;


    function __construct(){
        $this->view = new LoginView();
        $this->userModel = new UserModel();
    }



    function mostrarLogin(){
        $this->view->showLogin();
    }


    function mostrarRegistro(){
        $this->view->showRegister();
    }


    function registrarUsuario(){
        if(!empty($_POST['user']) && !empty($_POST['password'])){
            $userName = $_POST['user'];
            $userPassword = password_hash($_POST['password'],PASSWORD_BCRYPT);
            
            $this->userModel->addUser($userName,$userPassword);
            $this->verificarLogin();
        }
        $this->view->mostrarPlantas(null);
    }


    function verificarLogin(){
        if(!empty($_POST['user']) && !empty($_POST['password'])){
            $userName = $_POST['user'];
            $password = $_POST['password'];

            $user = $this->userModel->getUser($userName);

            if($user && password_verify($password,$user->password)){
                session_start();
                $_SESSION['logged'] = true;
                $_SESSION['user'] = $userName;

                $this->view->mostrarPlantas();
            }
            $this->view->showLogin("Usuario o Contraseña mal");
        }

    }


    function cerrarSesion(){
        session_start();
        session_destroy();
        header("Location: " .BASE_URL. "plantas");

    }








}