<!DOCTYPE html>
<head>
 <title>Login</title>
 <link rel="stylesheet" href="estilo.css">
</head>

<body>

<h1 id="hlogin">Registro de nuevo usuario</h1>


<form id="registro"  method="post" >
<label>Usuario</label><br>
<input name="nombreUsuario" type="text" id="nombreUsuario" required>
<br><br>

<label>Contraseña</label><br>
<input name="contra" type="password" id="contra" required>
<br><br>

<form id="registro" action="sesion.php" method="post" >

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


<input type="submit" name="Registrar" value="Registrar">
<a href=login.php><button  type="button"">Regresar</button></a>

</form>
<?php include_once 'conexion.php';


  if(isset($_POST["Registrar"])){
    $nombreUsuario=$_POST["nombreUsuario"];
    $contra=md5($_POST["contra"]);
    $nombre=$_POST["nombre"];
    $apellidoP=$_POST["apellidoP"];
    $apellidoM=$_POST["apellidoM"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $direccion=$_POST["direccion"];
    

    $sql= "insert into usuario (nombreUsuario,contra) values('$nombreUsuario','$contra')";
    if($conexion->query($sql)===TRUE){
        $idUsuario = $conexion->insert_id;
      
    }
    else{
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql= "insert into paciente (nombre,apellidoP,apellidoM,telefono,email,direccion,idUsuario) values('$nombre','$apellidoP','$apellidoM','$telefono','$email','$direccion','$idUsuario')";
  }
  
  $conexion->close();
  ?>

 </body>
</html>