<?php
session_start();
include_once("TunelCollector.php");

$id = $_GET['ID'];


$TunelCollectorObj = new TunelCollector();
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
        echo "<p>Se elimino la tabla #" . $id ."?</p>";
        $TunelCollectorObj->deleteTunel($id);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_tunel.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>