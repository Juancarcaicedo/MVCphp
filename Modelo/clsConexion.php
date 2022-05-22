
<?php
class clsConexion {
  private $conexion;
  
  public function __construct(){
    $this->conexion = new mysqli('localhost', 'root', '', 'bdproductos'); // --> conexión para base de datos en mysql
  } 

  public function getConexion(){
    return $this->conexion;
  }
}
