<?php
session_start();
include_once("detalle_produccioncollector.php");

$id_produccion = $_POST['id_produccion'];
$id_mineral = $_POST['id_mineral'];
$peso = $_POST['peso'];


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
   
        echo "<p>Se creo un nuevo detalle_produccion</p>";
        $detalle_produccioncollectorObj->createdetalle_produccion($id_produccion,$id_mineral,$peso);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_detalle_produccion.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
  
    </body>
</html>