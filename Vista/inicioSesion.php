<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio sesión</title>
  <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
</head>
<body>
  <center>
    <form action="" method="POST">
      <h4>Iniciar Sesión</h4>
      <?php if(isset($errorLogin)) echo $errorLogin; ?> <!-- Determina si una variable está definida y no es null --> 
      <fieldset class="inicio-session"> <!-- fieldset permite organizar en grupos los campos de un formulario.  -->  
        <legend>Inicio de sesión</legend>
        <label>Ingrese Usuario: </label>
        <input type="text" name="usuario">
        <label>Ingrese Contraseña: </label>
        <input type="password" name="contrasenia">
        <input class="iniciar-session" type="submit" value="INICIAR SESIÓN">
      </fieldset>
    </form>
  </center>
  <stript></script>
</body>
</html>
