<?php
 class Conexion{
   private $tipo_de_base  = 'mysql';
   private $host                    = '127.0.0.1';
   private $dbname             = 'usuariodb';
   private $user                    = 'YOURUSER';
   private $pass                    = 'YOURPASSWORD';




   private static $instancia = null;

   private function __construct() {
       try {
           self::$instancia = new PDO($this->tipo_de_base . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
       } catch (PDOException $e) {
           echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
           exit;
       }
   }# __construct)()

   public static function getInstancia(){
       if(!self::$instancia){
           new self();
       }
       return self::$instancia;
   }# getInstancia()

   public static function cerrar(){
       self::$instancia = null;
   }# cerrar()

 }# Conexion
?>
