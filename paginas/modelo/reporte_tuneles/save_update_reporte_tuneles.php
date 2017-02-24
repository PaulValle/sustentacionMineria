<?php
session_start();
include_once("ReporteTunelesCollector.php");

$id = $_POST['id_ReporteTuneles'];
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
   
        echo "<p>Se modifico una nueva mina</p>";
        $ReporteTunelesCollectorObj->updateReporteTuneles($id,$id_empresa,$fecha);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_reporte_tuneles.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>