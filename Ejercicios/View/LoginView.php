<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
require_once "Model/UserModel.php";
require_once "Controller/LoginController.php";



class LoginView{


    private $smarty;


    function __construct(){
        $this->smarty = new Smarty();

    }


    function showLogin($error = ""){
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/formLogin.tpl');
    }

    function showRegister(){
        $this->smarty->display('templates/formRegister.tpl');
    }


    function mostrarPlantas(){
        header("Location: " .BASE_URL. "plantas");
    }

}