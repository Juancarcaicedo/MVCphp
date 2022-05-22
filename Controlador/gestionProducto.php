<?php

if (isset($_REQUEST['cierresesion'])) {
  $sesion->cerrarSesion();
  require('Vista/inicioSesion.php');
} else if (isset($_REQUEST['infosesion'])) {
  $datosUsuario = $sesion->datosSesion();
  require('Vista/infoSesion.php');
} else {
  require('Modelo/clsProductoAcceso.php');
  $datos = new clsProductoAcceso();
  $listaProductos = $datos->listar();
  require('Vista/paginaProductos.php');
}
