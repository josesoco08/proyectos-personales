<?php

class PlantaModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_planta;charset=utf8', 'root', '');
    }



    function obtenerPlantas(){
        $query = $this->db->prepare("SELECT * FROM planta");
        $query->execute();
        $habitaciones = $query->fetchAll(PDO::FETCH_OBJ);
        return $habitaciones;
    }


    function addPlanta($nombre, $id_familiaPlanta =null, $descripcion,$img=null){
        $query = $this->db->prepare("INSERT INTO planta(nombre,id_familiaPlanta,descripcion,img) VALUES(?,?,?,?)");
        $query->execute(array($nombre, $id_familiaPlanta, $descripcion,$img));
    }
    

}

?>