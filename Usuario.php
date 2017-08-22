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
          $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA );
           $consulta->execute();
           $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
           return $usuarios;
       }
       catch(PDOException $e){
           echo $e->getMessage();
       }
   }// get_all()

 }// Usuario


  ?>
