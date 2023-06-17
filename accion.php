<html>
  <head>
    <link rel="short icon" href="https://images.vexels.com/media/users/3/140003/isolated/preview/960816ac80434d43526b1968ffa415e3-icono-de-formulario-de-contacto.png">
    <title>Respuestas</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
  <div class="resp">
    <p style="position:absolute; right:50 ;left:50;">
    <div class="resp">
    DATOS CAPTURADOS <br>
    Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?>.<br>
    Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br>
    Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?>.<br>
    Edad:<?php echo (int)$_POST['edad']; ?> 
    Email:<?php echo htmlspecialchars($_POST['Correo']); ?>.<br></p>
  </div> 
  </body>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>