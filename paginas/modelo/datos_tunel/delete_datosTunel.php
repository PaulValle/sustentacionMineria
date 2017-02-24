<?php
session_start();
include_once("DatosTunelCollector.php");

$id = $_GET['ID'];


$DatosTunelCollectorObj = new DatosTunelCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
       
        <?php
		  if (isset($_SESSION['mineria'])){
        echo "<p>Se elimino la tabla #" . $id ."?</p>";
        $DatosTunelCollectorObj->deleteDatosTunel($id);
       
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_datos_tunel.php'>";
        
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
