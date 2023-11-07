<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['rol']==1) {
include_once "menu.php";


} else {
   echo "Esta pagina es solo para el Administrador.<br>";
   echo "<br><a href='inicio.php'>Regresar</a>";


exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "La sesion ha expirado";

exit;
}
?>
<!DOCTYPE html>
<head>
 <title>Login</title>
 <link rel="stylesheet" href="estilo.css">
</head>

<body>

<h1 id="hlogin">Registro de nuevo Trabajador</h1>


<form id="registro" action="sesion.php" method="post" >
<label>Usuario</label><br>
<input name="nombreUsuario" type="text" id="nombreUsuario" required>
<br><br>

<label>Contraseña</label><br>
<input name="contra" type="password" id="contra" required>
<br><br>

<label>Nombre</label><br>
<input name="nombre" type="text" id="nombre" required>
<br><br>

<label>Apellido parterno</label><br>
<input name="apellidoP" type="text" id="apellidoP" required>
<br><br>

<label>Apellido marterno</label><br>
<input name="apellidoM" type="text" id="apellidoM" required>
<br><br>

<label>Telefono</label><br>
<input name="telefono" type="tel" id="telefono" required>
<br><br>

<label>Email</label><br>
<input name="email" type="email" id="email" required>
<br><br>

<label>Dirección</label><br>
<input name="direccion" type="text" id="direccion" required>
<br><br>


<input type="submit" name="Submit" value="Registrar">


</form>


 </body>
</html>