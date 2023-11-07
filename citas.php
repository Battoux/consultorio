<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
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
<title>Citas</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<p>en construcción sera una lista para que el paciente vea su historial de citas<p>
</body>
</html>