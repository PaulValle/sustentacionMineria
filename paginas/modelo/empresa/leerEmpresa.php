<?php
session_start();
?>
<?php
include_once("empresaCollector.php");
$usuario = $_SESSION['mineria'];
$id;

$empresaCollectorObj = new empresaCollector();

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Clase Empresa</title>
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
       
    <h1>TABLA EMPRESA</h1>
    <a href="create_empresa.php"><button class="crear">CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>RUC</th>
            <th>Razon Social</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th></th>
            <th></th>
        </tr>
             <?php
            foreach ($empresaCollectorObj->showEmpresas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdEmpresa() . "</td>";
            echo "<td>" . $c->getRuc() . "</td>"; 
            echo "<td>" . $c->getRazonSocial() . "</td>";            
            echo "<td>" . $c->getTelefono() . "</td>"; 
            echo "<td>" . $c->getDireccion() . "</td>"; 
            echo "<td>" . $c->getIdCiudad() . "</td>"; 
            echo "<td><a href='update_empresa.php?ID=". $c->getIdEmpresa() ."&RS=". $c->getRazonSocial() ."&TF=". $c->getTelefono() ."&RC=".$c->getRuc() ."&DR=".$c->getDireccion() ."&IC=".$c->getIdCiudad() ."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_empresa.php?ID=". $c->getIdEmpresa() ."'><button>Eliminar</button></a></td>";
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
