<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
<title>Mineria-Galeria</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
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
            
          <br>
<br>  
         <br>
<br>  
          <br>
<br>  
         <br>
<br>

            <div class="container ">
                <div class="row">
                    <div class="col-sm-3">
			    <div style="text-align:center;">
				<h1> Mineria UC </h1>
				<img alt="logo" class="img-responsive" src="../imagenes/logoCompañiaMinera.png" >
				
                                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                                      <li><a href="calidad.php" >Calidad de Aire</a></li>
                                      <li><a href="produccion.php">Producción</a></li>
                                      <li class="active"><a href="#">Galería</a></li>
                                </ul>
                         
			    </div>
                              
                    
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                                    <h3>Galería</h3>
                                    	
                                    
                                
                   
						<div class="col-md-4 ">
							
								<img alt="mina1" class="img-responsive" src="../imagenes/mina1.jpg">
							
						</div>
						<div class="col-md-4 ">
							
								<img alt="mina2" class="img-responsive" src="../imagenes/mina2.jpg">
						
						</div>
						<div class="col-md-4 ">
							
								<img alt="mina3" class="img-responsive" src="../imagenes/mina3.jpg">
							
						</div>
                        
                   


					<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
						<div class="row">
						<div class="col-md-6 ">
							<a href="#"><div style="background-color:#e0e0eb; text-align:center">
								<br><br>
								<p>Mensual</p>
								<br><br>
							</div></a>
	
						</div>
						<div class="col-md-6 ">
							<a href="#"><div style="background-color:#b3b3b3; text-align:center">
								<br><br>
								<p>Anual</p> 
								<br><br>
							</div></a>
	
						</div>
                            
                           <div class="row">
                            <div class="containerCenter">
                                <a href="administrar.php"><button>Administrar base de datos</button></a>
                            </div>
                                </div>
						</div>
							
						</div>

                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="vtab2">
                                	<h3>Producción</h3>
						<div class="col-md-12 ">
							<div>
								<img alt="barra" class="img-responsive" src="../imagenes/barrascontinuo.png">
							</div>
	
						</div>



                                </div>
			
                    
                </div>
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
