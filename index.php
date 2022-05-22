<?php
require('Modelo/clsConexion.php');
require('Modelo/clsSesion.php');

$sesion = new clsSesion();

if ($sesion->existeSesion()) {
  require('Controlador/gestionProducto.php');
} else if( isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia']) ) {
  $usuario = $_REQUEST['usuario'];
  $clave = $_REQUEST['contrasenia'];
  if ($sesion->existeUsuario($usuario, $clave)) {
    require('Controlador/gestionProducto.php');
  }else {
    $errorLogin = "<p>Contraseña o usuario incorrectos, verifique los datos y vuelva acceder</p>";
    require('Vista/inicioSesion.php');
  } 
} else {
  require('Vista/inicioSesion.php');
}
