<?php
session_start();
include_once("paisCollector.php");

$id = $_POST['id_pais'];
$nombre = $_POST['nombre'];



$paisCollectorObj = new paisCollector();
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
        echo "<p>Se modifico un nuevo pais</p>";
        $paisCollectorObj->updatePais($id,$nombre);
         
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=leerPais.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
