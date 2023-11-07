<!DOCTYPE html>
<head>
 <title>Login</title>
 <link rel="stylesheet" href="estilo.css">
</head>

<body>

<h1 id="hlogin">Login</h1>


<form id="login" action="sesion.php" method="post" >

<label>Nombre Usuario:</label><br>
<input name="username" type="text" id="username" required>
<br><br>

<label>Password:</label><br>
<input name="password" type="password" id="password" required>
<br><br>

<input type="submit" name="Submit" value="iniciar">
<a href=registro.php><button  type="button"">Registro</button></a>
</form>


 </body>
</html>