<?php
session_start();
include_once("PersonaCollector.php");

$id = $_GET['ID'];


$PersonaCollectorObj = new PersonaCollector();
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
        $PersonaCollectorObj->deletePersona($id);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_persona.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
