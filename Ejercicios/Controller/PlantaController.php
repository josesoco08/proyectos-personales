<?php


require_once ("View/PlantaView.php");
require_once ("Model/PlantaModel.php");
class PlantaController{

    private $model;
    private $view;



    function __construct(){
        $this->model = new PlantaModel();
        $this->view = new PlantaView();
    }


    // Mostrar lista de habitaciones
    public function listarPlantas() {
        $plantas = $this->model->obtenerPlantas();
        session_start();
        if(isset($_SESSION['logged'])){
            $verificar = $_SESSION['logged'];
        $this->view->mostrarPlantas($plantas,$verificar);
        }else{
            $this->view->mostrarPlantas($plantas,null);
        }
      

    }


    public function agregarPlanta() {
        if (isset($_FILES["img"])) {
            if ($_FILES["img"]["type"] == "image/png" || $_FILES["img"]["type"] == "image/jpg" || $_FILES["img"]["type"] == "image/jpeg") {
                $img = $_FILES["img"];
                $origen = $img["tmp_name"];
                $destino = "public/" . uniqid() . $img["name"];
                
                if (copy($origen, $destino)) {
                    $this->model->addPlanta($_POST['nombre'], $_POST['familia'], $_POST['descripcion'], $destino);
                    $this->view->mostrarPlantasLocation();
                }
            } else {
                $this->model->addPlanta($_POST['nombre'], $_POST['familia'], $_POST['descripcion'], null);
                $this->view->mostrarPlantasLocation();
            }
        }
    }







}



?>