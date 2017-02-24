<?php
session_start();
?>
<?php
include_once("empresaCollector.php");
include_once("../ciudad/ciudadCollector.php");
$usuario = $_SESSION['mineria'];

$id = $_GET['ID'];
$razonsocial = $_GET['RS'];
$telefono = $_GET['TF'];
$ruc = $_GET['RC'];
$direccion = $_GET['DR'];
$id_ciudad = $_GET['IC'];

$empresacollectorObj = new empresaCollector();
$ciudadcollectorObj = new ciudadCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Empresa </title>
    <link href="../estilo.css" rel="stylesheet">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='leerEmpresa.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICAR Empresa</h1>
                <form class="login" method="post" action="save_update_empresa.php">
                      <?php
                        echo "<label >Id Empresa</label>";
                        echo "<input type='text' name='id_empresa' value='". $id ."' readonly>";

                        echo "<br>";

                        echo "<label >Razon Social </label>";
          
                        echo "<input type='text' name='razonsocial' value='". $razonsocial ."'>";

                        echo "<br>";
                        echo "<label >Telefono </label>";
          
                        echo "<input type='text' name='telefono' value='". $telefono ."'>";

                        echo "<br>";

                        echo "<label> Direccion </label>";
          
                        echo "<input type='text' name='direccion' value='". $direccion ."'>";

                        echo "<br>";
                        echo "<label >Ruc </label>";
          
                        echo "<input type='text' name='ruc' value='". $ruc ."'>";

                        echo "<br>";

                        echo "<label>Id Ciudad</label>";


                         echo "<select value=". $id_ciudad ." name='id_ciudad'>";
                         foreach ($ciudadCollectorObj->showCiudades() as $c){
                            if ($id_ciudad == $c->getIdCiudad()){
                                echo "<option selected>". $c->getIdCiudad()."</option>";
                            }else{   
                                echo "<option>". $c->getIdCiudad()."</option>";
                            }
                         }
                         echo "</select>";
                    ?>
                    <br><br>
                   
                </form>
            </div>
    </body>
</html>
