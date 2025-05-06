<?php



class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_planta;charset=utf8', 'root', '');
    }


    function getUser($userName){
        $query = $this->db->prepare("SELECT * FROM usuario WHERE username=?");
        $query->execute([$userName]);
        return $query->fetch(PDO::FETCH_OBJ);

    }


    function addUser($userName,$password){
        $query = $this->db->prepare("INSERT INTO usuario(username,password) VALUES(?,?) ");
        $query->execute(array($userName,$password));
    }


}