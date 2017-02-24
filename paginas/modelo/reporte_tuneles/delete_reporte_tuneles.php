<?php
session_start();
include_once("ReporteTunelesCollector.php");

$id = $_GET['ID'];


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
        echo "<p>Se elimino la tabla #" . $id ."?</p>";
        $ReporteTunelesCollectorObj->deleteReporteTuneles($id);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_reporte_tuneles.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
