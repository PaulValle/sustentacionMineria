<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario 1</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
	
	<?php

        if (isset($_SESSION['mineria'])){
                session_destroy();
               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
        }else{
                
              
        }

	?>

    </body>
</html>

