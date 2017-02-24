<?php
session_start();
include_once("MinaCollector.php");

$id = $_POST['id_mina'];
$nombre = $_POST['nombre'];
$id_empresa = $_POST['id_empresa'];
$ubicacion = $_POST['ubicacion'];


$MinaCollectorObj = new MinaCollector();
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
        echo "<p>Se modifico una nueva mina</p>";
        $MinaCollectorObj->updateMina($id,$nombre,$id_empresa,$ubicacion);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_mina.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
  
    </body>
</html>