<?php
class clsSesion {
  private $conexion;

  public function __construct(){
    $this->conexion = new clsConexion();
    session_start();
  }

  public function existeUsuario($usuario, $clave) {
    $resultado = false;
    try {
      $sql = "SELECT * FROM PERSONA WHERE USUARIO = '$usuario' AND CLAVE = '$clave' ";
      $consulta = $this->conexion->getConexion()->query($sql); // --> consulta con mysql
      while ($fila = $consulta->fetch_assoc()){ // --> fetch_assoc de mysql buscar por fila
        $this->fijarSesion($fila);// encapsulo los datos en una nueva funcion fijarsesion?
        $resultado = true;
      }
    } catch( Exception $ex ) {
      echo "Ocurrio un error ".$ex; // datos equivocados
      
    }
    return $resultado;
  }

  public function fijarSesion($usuario) {
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['usuario'] = $usuario['usuario'];
    $_SESSION['clave'] = $usuario['clave'];
    $_SESSION['rol'] = $usuario['rol'];
  }

  public function datoUsuario(){
    return $_SESSION['usuario'];
  }

  public function existeSesion(){
    return isset($_SESSION['usuario']);
  }

  public function datosSesion(){
    return $_SESSION;
  }

  public function cerrarSesion(){
    session_unset();
    session_destroy();
  }
}
