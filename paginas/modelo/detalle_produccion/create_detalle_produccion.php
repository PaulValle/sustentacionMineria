<?php
session_start();
?>
<?php
include_once("detalle_produccioncollector.php");
include_once("../produccion/produccioncollector.php");
include_once("../mineral/mineralcollector.php");

$detalle_produccioncollectorObj = new detalle_produccioncollector();
$ProduccionCollectorObj = new ProduccionCollector();
$MineralCollectorObj = new MineralCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase detalle_produccion </title>
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
       
                <h1>CREAR DETALLE PRODUCCIÓN</h1>
          <br>  
                 <br>
        <br>  
         
                 
                <form class="login" method="post" action="save_detalle_produccion.php">
                    <br>  
                    <label >Id_Producción </label>
                    <?php
                     echo "<select name='id_produccion'>";
                     foreach ($ProduccionCollectorObj->showproduccion() as $c){
                        echo "<option>". $c->getid_produccion()."</option>";
                     }
                     echo "</select>";
                    ?>
                    <br>

                    <label>Id_Mineral &nbsp;&nbsp;&nbsp;</label>
                     <?php
                     echo "<select name='id_mineral'>";
                     foreach ($MineralCollectorObj->showmineral() as $c){
                        echo "<option>". $c->getid_mineral()."</option>";
                     }
                     echo "</select>";
                    ?>
                    <br>

                    <label>peso &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="peso" placeholder="Introduce la descripción del peso">
                    

                    <br><br>
                    <button type="submit">Crear</button>

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
