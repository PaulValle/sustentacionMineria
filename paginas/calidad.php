<?php
	session_start();
    $ID=$_GET["ID"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
<title>Mineria-Calidad</title>
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
                <a class="navbar-brand" href="../index.php"><img src="../imagenes/LOGO5.png" width="80" height="35"></a>
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
                            
                                <li><a href="logout.php">Salir</a></li>
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
                                      <li class="active"><a href="#">Calidad de Aire</a></li>
                                      <li ><a href="produccion.php">Producción</a></li>
                                      <li><a href="galeria.php">Galería</a></li>
                                </ul>
                            
                            </div>
                                 
                    
                    </div>
                   
                    <div class="col-sm-9">
                        <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                                    <h3>Calidad de Aire</h3>
                                    <script type="text/javascript">
						$(function () {
						    $(document).ready(function () {
							Highcharts.setOptions({
							    global: {
								useUTC: false
							    }
							});

							Highcharts.chart('container', {
							    chart: {
								type: 'spline',
								animation: Highcharts.svg, // don't animate in old IE
								marginRight: 10,
								events: {
								    load: function () {

									// set up the updating of the chart each second
									var series = this.series[0];
									setInterval(function () {
									    var x = (new Date()).getTime(), // current time
										y = Math.random();
									    series.addPoint([x, y], true, true);
									}, 1000);
								    }
								}
							    },
							    title: {
								text: 'Live random data'
							    },
							    xAxis: {
								type: 'datetime',
								tickPixelInterval: 150
							    },
							    yAxis: {
								title: {
								    text: 'Value'
								},
								plotLines: [{
								    value: 0,
								    width: 1,
								    color: '#808080'
								}]
							    },
							    tooltip: {
								formatter: function () {
								    return '<b>' + this.series.name + '</b><br/>' +
									Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
									Highcharts.numberFormat(this.y, 2);
								}
							    },
							    legend: {
								enabled: false
							    },
							    exporting: {
								enabled: false
							    },
							    series: [{
								name: 'Random data',
								data: (function () {
								    // generate an array of random data
								    var data = [],
									time = (new Date()).getTime(),
									i;

								    for (i = -19; i <= 0; i += 1) {
									data.push({
									    x: time + i * 1000,
									    y: Math.random()
									});
								    }
								    return data;
								}())
							    }]
							});
						    });
						});
					</script>


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

						</div>
                                     
	
							<br><br><br>
						</div>
                            <?php
                            if($ID == 1){
                                echo "<div class='row'>";
                                echo "<div class='containerCenter'>";
                                echo "<a href='administrar.php'><button>Administrar base de datos</button></a>";
                                echo "</div>";
                                echo "</div>";
                            }
                            ?>

                    </div>
              
                </div>
                </div>
                    
            </div>
            
            <br><br><br><br><br><br><br><br><br>
    
            
      <div class="container">
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
       <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
                             } 
                        ?>
    </body>
 </html>
