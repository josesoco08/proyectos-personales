<?php


require_once ("libs/smarty-3.1.39/libs/Smarty.class.php");
require_once ("Controller/PlantaController.php");

class PlantaView{


    private $smarty;


    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrarPlantas($plantas,$verificar=null){
        $this->smarty->assign('plantas',$plantas);
        $this->smarty->assign('verificar',$verificar);
        $this->smarty->display('templates/listaPlantas.tpl');
    }


    function mostrarPlantasLocation(){
        header("Location: ".BASE_URL."plantas");
    }



}




?>