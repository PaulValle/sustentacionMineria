<?php
session_start();
include_once("mineralcollector.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];


$mineralcollectorObj = new mineralcollector();
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
   
        echo "<p>Se creo un nuevo mineral</p>";
        $mineralcollectorObj->createmineral($nombre,$descripcion);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_mineral.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>