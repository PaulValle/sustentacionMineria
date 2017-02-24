<?php
session_start();
include_once("DronCollector.php");

$id = $_POST['id_dron'];
$marca = $_POST['marca'];
$num_serial = $_POST['serial'];
$id_empresa = $_POST['id_empresa'];
$minuto_bateria = $_POST['minutos'];


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
        echo "<p>Se modifico el dron</p>";
        $DronCollectorObj->updateDron($id,$marca,$num_serial,$id_empresa,$minuto_bateria);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_dron.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>