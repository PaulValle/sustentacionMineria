<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
<title>Administrar BD</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/estilo.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		
    <meta name="description" content="Seguridad Minera">
<meta name="keywords" content="mineria,drones,seguridad">
<meta name="author" content="Kimberly Munoz">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

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
                <a class="navbar-brand" href="../index.php"><img src="../imagenes/LOGO5.png" width="80" height="35"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right alinear">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  <?php
		                  if (isset($_SESSION['mineria'])){
                        ?>
               <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
                    echo "Hola " .$_SESSION['mineria']
                    ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            
                                <li><a href="logout.php">Salir</a></li>
                            </ul>
                        </li>
                        <?php
                          }else{    
                        ?>
                             <li class="page-scroll"><a  href="paginas/login.php"><img class="img-responsive" src="imagenes/3.png" width="80" height="35" alt="login" ></a>
                                 </li>
                             <?php
                          } 
                        ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
            
            </header>
            
          <br><br>  
            <div id="ilo">
                                 <a href="calidad.php?ID=1"><button>VOLVER</button></a>
           
        
                 <br>
        <br> 
                                <h1 class="asd">Tablas de la base de datos</h1>
                                <h2>Paul</h2>
                                <a href="modelo/produccion/read_produccion.php"#><button> PRODUCCIÓN</button></a>
                                <a href="modelo/detalle_produccion/read_detalle_produccion.php"#><button>DETALLE DE PRODUCCIÓN</button></a>
                                <a href="modelo/mineral/read_mineral.php"#><button>MINERAL</button></a>
                                <br>
                                <h2>Kimmy</h2>
                                <a href="modelo/reporte_tuneles/read_reporte_tuneles.php"#><button>REPORTE TUNELES</button></a>
                                <a href="modelo/detalle_reporte/read_detalle_reporte.php"#><button>DETALLE REPORTE</button></a>
                                <a href="modelo/datos_tunel/read_datos_tunel.php"#><button>DATOS TUNELES</button></a>
                                <a href="modelo/tunel/read_tunel.php"#><button>TUNEL</button></a>
                                <br>
                                <h2>Keyla</h2>
                                <a href="modelo/ciudad/leerCiudad.php"#><button>CIUDAD</button></a>
                                <a href="modelo/pais/leerPais.php"#><button>PAIS</button></a>
                                <a href="modelo/empresa/leerEmpresa.php"#><button>EMPRESA</button></a>
                                <br>
                                <h2>Yander</h2>
                                <a href="modelo/persona/read_persona.php"#><button>PERSONA</button></a>
                                <a href="modelo/mina/read_mina.php"#><button>MINA</button></a>
                                <a href="modelo/licencia/read_licencia.php"#><button>LICENCIA</button></a>
                                <a href="modelo/dron/read_dron.php"#><button>DRON</button></a>
								<br><br>
                </div>
							</div>
                           
	


                                


            
                      <br>
<br>  
         <br>
<br>
            
            
      <div class="container hidden-xs">
            <div id="margen">
                 
               
                 <div id="derechos">
                  <div class="row">
                      
                    <br>
                       <div class="col-lg-12">
                      <p id="copy">Todos los Derechos reservados ©sanmucuva 2017</p>
                     </div>
                     </div>
                      
                </div>
                </div>
                
            
            </div>
            
            


        
<script src="../js/j3.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
     <script src="../js/npm.js"></script>
    <script src="../js/j1.js"></script>
     <script src="../js/j2.js"></script>
    <script src="../js/j4.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>	
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
      
    </body>
 </html>