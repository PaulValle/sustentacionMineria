<?php
session_start();
include_once("LicenciaCollector.php");

$id = $_POST['id_licencia'];
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
        echo "<p>Se modifico una nueva licencia</p>";
        $LicenciaCollectorObj->updateLicencia($id,$nombre,$tipo);
      echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_licencia.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>