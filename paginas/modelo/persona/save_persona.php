<?php
session_start();
include_once("PersonaCollector.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$ruc = $_POST['ruc'];
$id_empresa = $_POST['id_empresa'];
$id_licencia = $_POST['id_licencia'];
$fecha_nacimiento = $_POST['fecha'];


$PersonaCollectorObj = new PersonaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        
    
    </head>
    <body>
        
        <?php
		  if (isset($_SESSION['mineria'])){
   
        echo "<p>Se creo un  nuevo usuario </p>";
        $PersonaCollectorObj->createPersona($nombre,$apellido,$email,$usuario,$clave,$ruc,$id_empresa,$id_licencia,$fecha_nacimiento);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_persona.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
