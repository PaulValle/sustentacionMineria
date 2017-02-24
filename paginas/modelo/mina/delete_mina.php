<?php
session_start();
include_once("MinaCollector.php");


$id = $_GET['ID'];

$MinaCollectorObj = new MinaCollector();
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
        $MinaCollectorObj->deleteMina($id);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_mina.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
  
    </body>
</html>