<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
<title>Mineria PKYK</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <meta name="description" content="Seguridad Minera">
<meta name="keywords" content="mineria,drones,seguridad">
<meta name="author" content="Keila Cuenca Icaza">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

        <div class="container">
        <br>
                        <header>
                            <br>
                             <br>
                              <br>
         <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../index.php"><img src="../imagenes/LOGO5.png" width="80" height="25"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <div class="sesion">
		</div>
                <ul class="nav navbar-nav navbar-right alinear">
                         
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="about.php">Acerca</a>
                    </li>
                    <li class="page-scroll">
                        <a href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="page-scroll">
                        <a href="servicios.php">Servicios</a>
                    </li>
                     <li class="page-scroll">
                        <a href="contacto.php">Contacto</a>
                    </li>
           <?php
		                  if (isset($_SESSION['mineria'])){
                        ?>
               <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
                    echo "Hola " .$_SESSION['mineria']
                    ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="calidad.php">Reporte</a></li>
                                <li><a href="logout.php">Salir</a></li>
                            </ul>
                        </li>
                        <?php
                          }else{    
                        ?>
                             <li class="page-scroll"><a  href="login.php"><img class="img-responsive" src="../imagenes/3.png" width="80" height="35" alt="login" ></a>
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
            <div class="main">
                 <div class='container content_top'>
                        <div class="row">
                            <div class="col-md-7 about_left">
                                
                               <img src="../imagenes/MISION.jpg" alt=" " class="img-responsive">
                                 
                                  <div class="clearfix"></div>
                               
                              </div>
                              <div class="col-md-4">
                               <h3 class="m_2">Objetivos</h3>
                                  <br>
                               <div class="list styled custom-list">

                                    <span class="dropcap">1</span>  <p> Implementar el manejo de herramientas que permitan una mejor producción</p>
                                   <br><br>
                                    <span class="dropcap">2</span> <p>Ser una de las empresas líderes en el mercado Nacional e internacional.</p><br><br>
                                   
                                    <span class="dropcap">3</span><p>Proporcionar servicios con la ayuda de la tecnologia satisfaciendo los requerimientos de los clientes.</p>

                              </div>
                            </div>
                    </div>
             </div>
                <br><br>
            <div class='container content_middle'>
                <div class="row">
                    <div class="col-md-12">
                       
                        <div class="panel panel-default">
                              <div class="panel-heading">
                                <h2 class="panel-title">Misión</h2>
                              </div>
                              <div class="panel-body">
                                    Ser lider en la producción de recursos naturales respetando todas las normas de seguridad prestando todos nuestros servícios a disposición de la ciudadania.
                              </div>
                        </div>


                        <div class="panel panel-default">
                              <div class="panel-heading">
                                <h2 class="panel-title">Visión</h2>
                              </div>
                              <div class="panel-body">
                                    Mantenerse como una de las compañias con mayor productividad del país de tal manera que aumentamos el PIB y disminuimos costos de producción.
                              </div>
                        </div>
                         <h3> Historia</h3>
                                    <p class="first_desc">Somos una empresa fundada en Noviembre 2016 por Yander Santana, Keyla Cuenca, Paul Valle y Kimberly Muñoz. Somos estudiantes de la Escuela Politécnica Superior del Litoral del Ecuador.</p>

                                   
                    </div>

                </div>
             </div>

		
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
            <div class="visible-xs">
                          <br>
               <div id="fondoGris">
                 
                   <a href="../paginas/login.html"><img class="img-responsive" src="../imagenes/3.png" width="100" height="100" alt="login" ></a>
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

        </body>
     </html>
