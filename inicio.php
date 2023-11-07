<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
include_once "menu.php";


} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='login.php'>Login</a>";


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
<?php
   echo "bienvenido ".$_SESSION['username'];
?>
<br><br>

</body>
</html>