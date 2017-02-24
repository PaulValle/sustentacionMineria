<?php
session_start();
?>
<?php
include_once("DetalleReporteCollector.php");
include_once("../dron/DronCollector.php");
include_once("../tunel/TunelCollector.php");
include_once("../reporte_tuneles/ReporteTunelesCollector.php");

include_once("../datos_tunel/DatosTunelCollector.php");

$DetalleReporteCollectorObj = new DetalleReporteCollector();

$DronCollectorObj = new DronCollector();
$TunelCollectorObj = new TunelCollector();

$ReporteTunelesCollectorObj = new ReporteTunelesCollector();

$DatosTunelCollectorObj = new DatosTunelCollector();
$id_detalle_reporte = $_GET['id_detalle_reporte'];
$id_dron = $_GET['id_dron'];
$id_tunel = $_GET['id_tunel'];
$id_reporte = $_GET['id_reporte'];
$id_datos_tunel = $_GET['id_datos_tunel'];

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase DetalleReporte </title>
    <link rel="stylesheet" href="../../../css/estilo.css">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>     
</head>
<body>
    <?php
		  if (isset($_SESSION['mineria'])){
              $usuario = $_SESSION['mineria'];
    ?>
       <div class="container">
        <br>
        <header>
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="../../../index.php"><img src="../../../imagenes/LOGO5.png" width="80" height="35"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav navbar-right alinear">
                             <li class="hidden">
                                 <a href="#page-top"></a>
                             </li>

                             <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
                                echo "Hola " .$_SESSION['mineria']
                                ?><span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="../../logout.php">Salir</a></li>
                                  </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            
        </header>
            <br>
        <br>  
                 <br>
        <br>  
    <div class="contLogin">
                <h1>MODIFICAR Detalle Reporte</h1>
         <br>  
                 <br>
        <br>  
                <form class="login" method="post" action="save_update_detalleReporte.php">
                     <br>  
                      <?php


                        echo "<label>Id detalle reporte</label>";

                        echo "<input type='text' name='id_detalle' value='". $id_detalle_reporte ."' readonly>";

                        echo "<br>";
                    
                    echo "<label>Id dron</label>";
              
                  
                     echo "</select>";
                  
                         echo "<select value='". $id_dron ."' name='id_dron'>";
                          foreach ($DronCollectorObj->showDron() as $c){
                            if ($id_dron == $c->getIdDron()){
                                echo "<option selected>". $c->getIdDron()."</option>";
                            }else{   
                                echo "<option>". $c->getIdDron()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                    
                    echo "<label>Id tunel</label>";

                         echo "<select value='". $id_tunel ."' name='id_tunel'>";
                         foreach ($TunelCollectorObj->showTunels() as $c){
                            if ($id_tunel == $c->getIdTunel()){
                                echo "<option selected>". $c->getIdTunel()."</option>";
                            }else{   
                                echo "<option>". $c->getIdTunel()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                    
                    echo "<label>Id reporte</label>";

                         echo "<select value='". $id_reporte ."' name='id_reporte'>";
                         foreach ($ReporteTunelesCollectorObj->showReporteTuneles() as $c){
                            if ($id_reporte == $c->getId_reporte()){
                                echo "<option selected>". $c->getId_reporte()."</option>";
                            }else{   
                                echo "<option>". $c->getId_reporte()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                    
                    echo "<label>Id datos tunel</label>";

                         echo "<select value='". $id_datos_tunel ."' name='id_datos_tunel'>";
                         foreach ($DatosTunelCollectorObj->showDatosTunels() as $c){
                            if ($id_datos_tunel == $c->getId_datos_tunel()){
                                echo "<option selected>". $c->getId_datos_tunel()."</option>";
                            }else{   
                                echo "<option>". $c->getId_datos_tunel()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                        

                        
                    ?>
                    <br><br>
                    <?php
                     echo "<a href='save_update_detalleReporte.php?id_detalle_reporte=". $id_detalle_reporte ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
  </div>
    
      <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
 
    </body>
    <script src="../../../js/j3.js"></script>
    <script src="../../../js/bootstrap.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
     <script src="../../../js/npm.js"></script>
    <script src="../../../js/j1.js"></script>
     <script src="../../../js/j2.js"></script>
    <script src="../../../js/j4.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>	
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
</html>
