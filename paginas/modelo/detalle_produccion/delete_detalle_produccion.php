<?php
session_start();
include_once("detalle_produccioncollector.php");

$id_detalle_produccion = $_GET['id_detalle_produccion'];


$detalle_produccioncollectorObj = new detalle_produccioncollector();
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
        
        echo "<p>Se eliminó el índice #" . $id_detalle_produccion ."?</p>";
        $detalle_produccioncollectorObj->deletedetalle_produccion($id_detalle_produccion);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_detalle_produccion.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>