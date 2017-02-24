<?php
session_start();
include_once("paisCollector.php");

$nombre = $_POST['nombre'];



$paisCollectorObj = new paisCollector();
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
        echo "<p>El pais ha sido guardado</p>";
        $paisCollectorObj->createPais($nombre);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=leerPais.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
