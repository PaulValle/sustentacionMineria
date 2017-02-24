<?php
session_start();
include_once("DetalleReporteCollector.php");

$id_dron = $_POST['id_dron'];
$id_tunel = $_POST['id_tunel'];
$id_reporte = $_POST['id_reporte'];
$id_datos_tunel = $_POST['id_datos_tunel'];


$DetalleReporteCollectorObj = new DetalleReporteCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        
    </head>
    <body>
          <?php
		  if (isset($_SESSION['mineria'])){
        echo "<p>Se creo un  nuevo detalle reporte </p>";
        $DetalleReporteCollectorObj->createDetalleReporte($id_dron,$id_tunel,$id_reporte,$id_datos_tunel);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_detalle_reporte.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
