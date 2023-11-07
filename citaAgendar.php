<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ($_SESSION['rol']==1||$_SESSION['rol']==2)) {
include_once "menu.php";


} else {
   echo "Esta pagina es solo para trabajadores.<br>";
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
<title>Consulta de citas</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<form id="registro" action="sesion.php" method="post" >

<label>Paciente</label><br>
<select name="nombre" id="nombre" required>
</select>
<br><br>

<label>fecha</label><br>
<input name="fecha" type="date" id="fecha" min="<?php echo date('Y-m-d'); ?>" required>
<br><br>

<label>hora</label><br>
<input name="hora" type="time" id="hora" required>
<br><br>

<label>Comentario</label><br>
<textarea name="nombre" rows="5" cols="50" id="comentario"  id="nombre" required></textarea>
<br><br>

<input type="submit" name="Submit" value="Registrar">


</form>
</body>
</html>