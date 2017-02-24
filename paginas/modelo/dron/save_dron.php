<?php
session_start();
include_once("DronCollector.php");

$marca = $_POST['marca'];
$num_serial = $_POST['numero'];
$id_empresa = $_POST['id_empresa'];
$min_bateria = $_POST['minuto'];


$DronCollectorObj = new DronCollector();
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
   
        echo "<p>Se creo una nueva mina</p>";
        $DronCollectorObj->createDron($marca,$num_serial,$id_empresa,$min_bateria);
      
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_dron.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>