<?php
require_once("Connection.php");

  $arr = Usuario::get_all();
  echo json_encode($arr);

 class Usuario {

   private $login;
   private $pass;
   private $nombre;
   private $paterno;
   private $materno;

   const TABLA = 'usuario';

   public function __construct($login) {
      $this->login = $login;
   }# __construct

    public static function  get_all(){
       try{
          $conexion = Conexion::getInstancia();
          $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA );
           $consulta->bindParam(':login', $login);
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
