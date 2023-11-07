
<div id="menu">
<a id="menu2" href="inicio.php">Inicio<a>
<?php
    if($_SESSION['rol']==1){
        echo "<a id='menu2' href='registroTrabajador.php'>Registrar trabajadores<a>";
    }
?>   
<?php
    if($_SESSION['rol']==1 || $_SESSION['rol']==2){
        echo "<a id='menu2' href='citasT.php'>Citas<a>";
    }
    else echo "<a id='menu2' href='citas.php'>Citas<a>"
?>  
<?php
    if($_SESSION['rol']==1 || $_SESSION['rol']==2){
        echo "<a id='menu2' href='pacientes.php'>Pacientes<a>";
    }
?>
<a id="menu2" href=logout.php>Cerrar Sesion</a>
</div>