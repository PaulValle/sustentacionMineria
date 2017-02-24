<?php
session_start();
include_once("empresaCollector.php");

$id = $_GET['ID'];


$empresaCollectorObj = new empresaCollector();
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
        $empresaCollectorObj->deleteEmpresa($id);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=leerempresa.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>
