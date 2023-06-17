<html>
  <head>
    <link rel="short icon" href="https://images.vexels.com/media/users/3/140003/isolated/preview/960816ac80434d43526b1968ffa415e3-icono-de-formulario-de-contacto.png">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php echo'<p></p>';?> 
    <div class="form">
        <center>
      <form action="accion.php" method="post">
        <p>Nombre: <input type="text" name="nombre" title="Letra de inicio en mayuscula"required/></p>
        <p>Apellido paterno: <input type="text" name="paterno"required /></p>
        <p>Apellido materno: <input type="text" name="materno" required /></p>
        <p>Su edad: <input type="number" name="edad" size="20px" required /></p>
        <p>Email:<input type="email" name="Correo" required></p>
        <p><input type="submit" value="Guardar"/>
        <input type="reset" value="Borrar"/></p>
      </form></center>
    </div>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>