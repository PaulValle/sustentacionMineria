<?php
session_start();
include_once("empresaCollector.php");

$razonSocial = $_POST['razonsocial'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$idCiudad = $_POST['idCiudad'];
$ruc = $_POST['ruc'];



$empresaCollectorObj = new empresaCollector();
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
        echo "<p>Se creo un  nueva Empresa </p>";
$empresaCollectorObj->createEmpresa($razonSocial,$ruc,$telefono,$direccion,$idCiudad);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=leerempresa.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
    </body>
</html>
