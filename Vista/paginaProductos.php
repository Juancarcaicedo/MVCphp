<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
  </head>
  <body>
    <center>
      <h4>Listado de Productos</h4>
      <table class="content-table">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($listaProductos as $item) {
              echo '<tr>'; 
              echo '<td>'.$item["codigo"].'</td>'; 
              echo '<td>'.$item["nombre"].'</td>'; 
              echo '<td>'.$item["precio"].'</td>'; 
              echo '</tr>'; 
            }
          ?>
        </tbody>
      </table>
      <form action="" method="POST">
        <button class="cierre-session" type="submit" name="cierresesion">Cerrar Sesión</button>
      </form>
      <form action="" method="POST">
        <button class="info-session" type="submit" name="infosesion">Info Sesión</button>
      </form>
    </center>
  </body>
</html>
