<?php
session_start();
include_once("mineralcollector.php");

$id_mineral = $_POST['id_mineral'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];


$mineralcollectorObj = new mineralcollector();
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
   
        echo "<p>Se modificó el mineral</p>";
        $mineralcollectorObj->updatemineral($id_mineral,$nombre,$descripcion);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_mineral.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>