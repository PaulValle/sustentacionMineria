<?php
session_start();
include_once("ciudadCollector.php");

$id = $_POST['id_ciudad'];
$nombre = $_POST['nombre'];
$id_pais = $_POST['id_pais'];



$ciudadCollectorObj = new ciudadCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
         <?php
		  if (isset($_SESSION['mineria'])){
   
        echo "<p>Se modifico una nueva Ciudad</p>";
        $ciudadCollectorObj->updateCiudad($id,$nombre,$id_pais);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=leerCiudad.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
  
    </body>
</html>
