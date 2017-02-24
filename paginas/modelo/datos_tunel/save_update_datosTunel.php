<?php
session_start();
include_once("DatosTunelCollector.php");

$id = $_POST['id_DatosTunel'];
$oxigeno = $_POST['oxigeno'];
$metano = $_POST['metano'];

$DatosTunelCollectorObj = new DatosTunelCollector();
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

        echo "<p>Se modifico un nuevo dato de mina</p>";
        $DatosTunelCollectorObj->updateDatosTunel($id,$oxigeno,$metano);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_datos_tunel.php'>";
        ?>
       
        <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>