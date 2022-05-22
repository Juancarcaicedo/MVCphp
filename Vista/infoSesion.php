<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Datos Usuario</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
  </head>
  <body>
    <center>
      <ul class="info-usuario" >
        <h4>Información del usuario</h4>
        <?php
          echo '<li>Nombre: '.$datosUsuario["nombre"].'</li>'; 
          echo '<li>Usuario: '.$datosUsuario["usuario"].'</li>'; 
          echo '<li>Rol: '.$datosUsuario["rol"].'</li>'; 
        ?>
      </ul>
      <form action="index.php">
        <button class="session-atras">Atras</button>
      </form>
    </center>
  </body>
</html>