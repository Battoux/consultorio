<?php
session_start();
?>

<?php
//conexión a BD y ejecución de un Select con inner join
class server
{
  public  $server;
  public  $user;
  public  $pass;
  public  $bd;
  public  $username;
 public   $password;
    
    public function checausuario()
    {
        //conexion
        $conn = new mysqli($this->server, $this->user, $this->pass, $this->bd);
       
        //si no hay error
    if ($conn->connect_error) {
          die("Error: " . $conn->connect_error);
    } 
    else {
          $sql = "SELECT * FROM usuario WHERE nombreUsuario = '$this->username'";
               
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
          
				$row = $result->fetch_array(MYSQLI_ASSOC);
				 if ($this->password == $row['contra']) { 
				
				    $_SESSION['loggedin'] = true;
				    $_SESSION['username'] = $this->username;
				    $_SESSION['start'] = time();
				    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
            $_SESSION['rol']=$row['idtipo'];
            header("location:inicio.php");
            

            
				 } 
				 else
				 	 {   
				      echo "Username o Password estan incorrectos.";
				      echo "<br><a href='login.php'>Volver a Intentarlo</a>";
 	               }
             
          }
          else {   
				   echo "Username o Password estan incorrectos.";
				   echo "<br><a href='login.php'>Volver a Intentarlo</a>";
 	          }
    } 
    $conn->close();
  }
}

//uso de la clase server
//cambien los datos necesarios que correspondan a su conexión 

$miServer = new server;
$miServer->server = "localhost";
$miServer->user = "root";
$miServer->pass = "";
$miServer->bd = "consultorio";
$miServer->username =  $_POST['username'];
$miServer->password = md5($_POST['password']);
$miServer->checausuario();
?>
