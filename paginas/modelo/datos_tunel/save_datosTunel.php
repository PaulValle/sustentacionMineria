<?php
session_start();
include_once("DatosTunelCollector.php");

$oxigeno = $_POST['oxigeno'];
$metano = $_POST['metano'];


$DatosTunelCollectorObj = new DatosTunelCollector();
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
    ?>
        <?php
        echo "<p> Se creo un  nuevo usuario </p>";
        $DatosTunelCollectorObj->createDatosTunel($oxigeno,$metano);
               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_datos_tunel.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>
