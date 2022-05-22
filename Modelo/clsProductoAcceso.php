<?php
class clsProductoAcceso {
  private $conexion;

  public function __construct(){
    $this->conexion = new clsConexion();
  }

  public function listar(){
    $sql = 'SELECT * FROM PRODUCTO';
    /* $consulta = pg_query($sql); // --> consulta con postgres */
    $consulta = $this->conexion->getConexion()->query($sql); // --> consulta con mysql
    $listadoProductos = array();
    $i = 0;
    /* while($item = pg_fetch_assoc($consulta)){ // --> fetch_assoc de postgres */
    while($item = $consulta->fetch_assoc()){ // --> fetch_assoc de mysql
        $listadoProductos[$i] = $item;
        $i++;
    }
    return $listadoProductos;
  }
}
