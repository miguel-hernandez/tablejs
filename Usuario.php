<?php
require_once("Connection.php");

  $arr = Usuario::get_all();
  echo json_encode($arr);

 class Usuario {

   const TABLA = 'usuario';

   public function __construct($login) {
   }# __construct

    public static function  get_all(){
       try{
          $conexion = Conexion::getInstancia();
           $consulta = $conexion->prepare('SELECT id_usuario as id, nombre, paterno, materno, email FROM ' . self::TABLA );
           $consulta->execute();
           $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

           // $columnas = array("id","nombre","paterno","materno","email");

           $columnas = array(
       			"id"=>array("type"=>"hidden", "header"=>"ID"),
       			"nombre"=>array("type"=>"text", "header"=>"Nombre"),
       			"paterno"=>array("type"=>"text", "header"=>"Apellido paterno"),
       			"materno"=>array("type"=>"text", "header"=>"Apellido materno"),
       			"email"=>array("type"=>"text", "header"=>"Correo electrónico")
       		);

           $respuesta = array(
                               'columnas' => $columnas,
                               'result' => $usuarios
                             );
           return $respuesta;
       }
       catch(PDOException $e){
           echo $e->getMessage();
       }
   }// get_all()

 }// Usuario


  ?>
