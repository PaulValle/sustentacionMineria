<?php
session_start();
?>
<?php
include_once("produccioncollector.php");
$usuario = $_SESSION['mineria'];
$id;

$produccioncollectorObj = new produccioncollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase produccion</title>
      <link rel="stylesheet" href="../../../css/estilo.css">
     <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        
</head>
<body>
    <?php
		  if (isset($_SESSION['mineria'])){
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
     <a href="../../administrar.php"><button>VOLVER</button></a>
           
        
                 <br>
        <br> 
       
    <h1>TABLA PRODUCCIÓN</h1>
    <a href="create_produccion.php"><button class="crear">CREAR</button></a>
    <table>
        <tr>    
            <th>ID_PRODUCCIÓN</th>
            <th>FECHA</th>
            <th>ID_EMPRESA</th>
            <th>NOMBRE</th>
            
             <th></th>
            <th></th>
        </tr>
        <?php
            foreach ($produccioncollectorObj->showproduccion() as $c){
            echo "<tr>";
            echo "<td>" . $c->getid_produccion() . "</td>";
            echo "<td>" . $c->getfecha() . "</td>";            
            echo "<td>" . $c->getid_empresa() . "</td>";   
            echo "<td>" . $c->getnombre() . "</td>";   
                
            echo "<td><a href='update_produccion.php?id_produccion=" . $c->getid_produccion() . "&fecha=" . $c->getfecha() . "&id_empresa=" . $c->getid_empresa() .  "&nombre=" . $c->getnombre() ."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_produccion.php?id_produccion=". $c->getid_produccion() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>
 </div>
   <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
   
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
</body>
</html>
