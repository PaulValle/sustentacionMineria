<?php
session_start();
include_once("ciudadCollector.php");

$id = $_GET['ID'];


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
   
        echo "<p>Se elimino la ciudad #" . $id ." :c </p>";
        $ciudadCollectorObj->deleteCiudad($id);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=leerCiudad.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
  
    </body>
</html>
