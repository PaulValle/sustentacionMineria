<?php
session_start();
include_once("ReporteTunelesCollector.php");

$id_empresa = $_POST['id_empresa'];
$fecha = $_POST['fecha'];



$ReporteTunelesCollectorObj = new ReporteTunelesCollector();
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
        echo "<p>Se creo un  nuevo reporte </p>";
        $ReporteTunelesCollectorObj->createReporteTuneles($id_empresa,$fecha);
       
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_reporte_tuneles.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
