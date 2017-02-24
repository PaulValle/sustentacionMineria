<?php
session_start();
include_once("produccioncollector.php");

$fecha = $_POST['fecha'];
$id_empresa = $_POST['id_empresa'];
$nombre = $_POST['nombre'];


$produccioncollectorObj = new produccioncollector();
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
        echo "<p>Se creo un nuevo produccion</p>";
        $produccioncollectorObj->createproduccion($fecha,$id_empresa,$nombre);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_produccion.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>