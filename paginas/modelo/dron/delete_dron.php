<?php
session_start();
include_once("DronCollector.php");

$id = $_GET['ID'];


$DronCollectorObj = new DronCollector();
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
        $DronCollectorObj->deleteDron($id);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_dron.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>