<?php
session_start();
include_once("DetalleReporteCollector.php");

$id = $_GET['id_detalle_reporte'];


$DetalleReporteCollectorObj = new DetalleReporteCollector();
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
        $DetalleReporteCollectorObj->deleteDetalleReporte($id);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_detalle_reporte.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
  
    </body>
</html>
