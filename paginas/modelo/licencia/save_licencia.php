<?php
session_start();
include_once("LicenciaCollector.php");

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];


$LicenciaCollectorObj = new LicenciaCollector();
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
        echo "<p>Se ha creado un nuevo tipo de licencia</p>";
        $LicenciaCollectorObj->createLicencia($nombre,$tipo);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_licencia.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>