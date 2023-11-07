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
<title>Inicio</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>
<p>en construcción sera una lista de los pacientes<p>
</body>
</html>