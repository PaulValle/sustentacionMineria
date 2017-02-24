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
<meta name="author" content="Yander Santana Tavares">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<body>

        <div class="container">
        <br>
                 <br>
            <header>
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
			<div id="about" class="about">
				<div class="about-head text-center">
					<div class="container">
					<img class="img-responsive position" src="../imagenes/explotacion_minera.jpg" alt="explotacion_minera" width="700" height="500">
						<h2>La explotación minera</h2>
						<p>La explotación de un yacimiento minero supone la existencia de una concentración de un mineral , elemento o roca con suficiente valor económico para sustentar esta explicación minera con un beneficio industrial para la empresa</p>
					</div>
				</div>
				
				<div class=" text-center">
					<div class="container">
						<div class="col-md-3 ">
						
						<img class="img-responsive" src="../imagenes/avances_tecnologicos.jpg" alt="avances_tecnologicos">
							<h3><a href="http://www.tecnologiaminera.com/tm/novedad.php?id=79" target="_blank">Desarrollo e innovación</a></h3>
							<p>Una de las necesidades mas notorias en la minería es la de perforar a mayor profundidad, tanto por requerimientos en el campo ..</p> 
							<a href="http://www.tecnologiaminera.com/tm/novedad.php?id=79" target="_blank">Leer más</a>
							<label> </label>
						</div>
						<div class="col-md-3 ">
						
						<img class="img-responsive" src="../imagenes/Seguridad-Minera-1024x683.jpg" alt="">
							<h3><a href="http://es.hesperian.org/hhg/A_Community_Guide_to_Environmental_Health:Seguridad_en_las_minas" target="_blank">Seguridad</a></h3>
							<p>Las empresas mineras son responsables de mantener operaciones mineras seguras. Los gobiernos, mineros...</p>
							<a href="http://es.hesperian.org/hhg/A_Community_Guide_to_Environmental_Health:Seguridad_en_las_minas" target="_blank">Leer más</a>
							<label> </label>
						</div>
						<div class="col-md-3 ">
							
							<img class="img-responsive" src="../imagenes/compromiso.jpg" alt="compromiso">
							<h3><a href="http://outletminero.org/mineria-sustentable-respeto-y-compromiso-con-la-sociedad-y-medio-ambiente/" target="_blank">Sustentabilidad</a></h3>
							<p>Para lograr efectuar el plan de sustentabilidad que hace de la industria minera un sector de alto rendimiento es necesario tener un control de aspectos..</p>
							<a href="http://outletminero.org/mineria-sustentable-respeto-y-compromiso-con-la-sociedad-y-medio-ambiente/" target="_blank">Leer más</a>
							
						</div>
						
						<div class="col-md-3 ">
						<img class="img-responsive" src="../imagenes/sustentable.jpg" alt="">
							<h3><a href="http://www.cec.uchile.cl/~vmaksaev/DESARROLLO%20SUSTENTABLE%20Y%20LA%20INDUSTRIA%20MINERA.pdf" target="_blank">Sustentabilidad</a></h3>
							<p>A menudo se plantea el argumento que el concepto de desarrollo sustentable es incompatible con la industria extractiva de minerales y que la ...</p>
							<a href="http://www.cec.uchile.cl/~vmaksaev/DESARROLLO%20SUSTENTABLE%20Y%20LA%20INDUSTRIA%20MINERA.pdf" target="_blank"> Leer más</a>
						</div>
						
						<div class="clearfix"> </div>
					</div>
				</div>
			
			</div>
			
	 <div class="container section_aligncenter">
	 		<h3>Desarrollo sustentable y la responsabilidad social</h3>
	 		<p>Las principales empresas mineras están logrando integrar y adaptar los procesos de mejores prácticas corporativas a través del concepto de desarrollo sustentable en sus estrategias generales.</p>
         </div>  
         <div class="container content_bottom">
         	<h3>Minería en el Ecuador</h3>
         	<p class="m_1">La minería a nivel local ha ido evolucionando hasta ser uno de los proyectos con mayor sustentabilidad en el país.</p>
         	<div class="row">
         		<div class='col-md-6 comment_top'>
         			<div class="project_grid">
			  	   	   	  <ul class="project_box">
			  	   	   	  	
			  	   	   	  	<li class="desc"><h5><a href="https://contenido.bce.fin.ec/documentos/Estadisticas/Hidrocarburos/cartilla00.pdf">Principales minerales </a></h5>
			  	   	   	  		<p>La extracción de los diferentes tipos de minerales permiten el crecimiento en la economía del país ..&nbsp;&nbsp; <a href="https://contenido.bce.fin.ec/documentos/Estadisticas/Hidrocarburos/cartilla00.pdf">Ver</a></p>
			  	   	   	  	</li>	
			  	   	   	  	
			  	   	   	  </ul>
                        <div class="clearfix"> </div>
			  	   	   	  <ul class="project_box">
			  	   	   	  	<li class="desc"><h5><a href="https://contenido.bce.fin.ec/documentos/Estadisticas/Hidrocarburos/cartilla00.pdf">Tipos de minería</a></h5>
			  	   	   	  		<p>La evolución que ha tenido la minería ha permitido la creación de diferentes tipos de mineria &nbsp;&nbsp; <a href="https://contenido.bce.fin.ec/documentos/Estadisticas/Hidrocarburos/cartilla00.pdf">Ver</a></p>
			  	   	   	  	</li>		
			  	   	   	  	
			  	   	   	  </ul>
                        <div class="clearfix"> </div>
			  	   	   	  <ul class="project_box">
			  	   	   	  	
			  	   	   	  	<li class="desc"><h5><a href="https://contenido.bce.fin.ec/documentos/Estadisticas/Hidrocarburos/cartilla00.pdf">Estadísticas del sector minero</a></h5>
			  	   	   	  		<p>Cuadro comparativo de la extracción de los minerales a nivel anual de los últimos años &nbsp;&nbsp; <a href="https://contenido.bce.fin.ec/documentos/Estadisticas/Hidrocarburos/cartilla00.pdf">Ver</a></p>
			  	   	   	  	</li>	
			  	   	   	  	
			  	   	   	  </ul>
                        <div class="clearfix"> </div>
		  	   	   	  </div>
         		</div>
         		<div class='col-md-6'>
         		  <img class="img-responsive" height="300" width="400" src="../imagenes/MINERIA%20ENAMI11-EDU_0.jpg" alt="" >
         		</div>
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
          

    
<script src="../js/j3.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
     <script src="../js/npm.js"></script>
    <script src="../js/j1.js"></script>
     <script src="../js/j2.js"></script>
    <script src="../js/j4.js"></script>
    </body>


</html>
