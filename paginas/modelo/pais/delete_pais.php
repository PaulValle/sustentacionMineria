<?php
session_start();
include_once("paisCollector.php");

$id = $_GET['ID'];


$paisCollectorObj = new paisCollector();
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
        
              echo "<p>Se elimino el pais #" . $id ." :c </p>";
        $paisCollectorObj->deletePais($id);
       echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=leerPais.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
    </body>
</html>
