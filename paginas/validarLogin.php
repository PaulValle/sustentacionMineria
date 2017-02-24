<?php
include_once("modelo/persona/PersonaCollector.php");
session_start();
$email = $_POST['email'];
$clave = $_POST['clave'];

$PersonaCollectorObj = new PersonaCollector();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
       
        <?php

        foreach ($PersonaCollectorObj->showPersonas() as $c){
            if($c->getEmail() == $email && $c->getClave() == $clave){
               
                $_SESSION['mineria']= $email;
                 
		        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=calidad.php?ID=". $c->getIdLicencia(). "'>";
                
            }
        }
        if (!isset($_SESSION['mineria'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=login.php'>
        
        <?php
             
        }
		
	   ?>
            
    </body>
</html>
