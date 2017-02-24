<?php
session_start();
include_once("LicenciaCollector.php");

$id = $_GET['ID'];


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
        echo "<p>Se elimino la tabla #" . $id ."?</p>";
        $LicenciaCollectorObj->deleteLicencia($id);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_licencia.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>