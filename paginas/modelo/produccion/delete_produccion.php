<?php
session_start();
include_once("produccioncollector.php");

$id_produccion = $_GET['id_produccion'];


$produccioncollectorObj = new produccioncollector();
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
        echo "<p>Se eliminó el índice #" . $id_produccion ."?</p>";
        $produccioncollectorObj->deleteproduccion($id_produccion);
      echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_produccion.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>