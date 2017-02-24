
<?php
	session_start();
?><!DOCTYPE html>
<html lang="en">
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
         <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../index.php"><img src="../imagenes/LOGO5.png" width="80" height="30"></a>
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
            <br>
            <br>
			<div class="Contact">
				<div class="header-section">
					<div class="container">
						<h1>Contáctenos</h1>
					</div>
				</div>
				<div class="contact-grids">
					<div class="container">
						
						<div class="contact-bottom-grids">
							<div class="contact-bottom-grid-left">
								<h3>Información de contacto</h3>
								<p>Direccion : Campus Gustavo Galindo (ESPOL)</p>
								<p>Teléfono : 2345678</p>
								<p>Correo Electrónico : msvc@hotmail.com</p>
								<p>Fax : 4547849483</p>
								
							</div>
							<div class="contact-bottom-grid-right">
								<h3>Escríbanos</h3>
								<form>
									<div class="text">
										<div class="text-fild">
											<span>Nombre:</span>
											<input type="text" class="text" value="Tu nombre aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu nombre aqui';}">
										</div>
										<div class="text-fild">
											<span>Correo Electrónico:</span>
											<input type="text" class="text" value="Tu email aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu email aqui';}">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="msg-fild">
											<span>Asunto:</span>
											<input type="text" class="text" value="Tu asunto aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu asunto aqui';}">
									</div>
									<div class="message-fild">
											<span>Mensaje:</span>
											<textarea> </textarea>
									</div>
									<input type="submit" value="Enviar" />
								</form>
							</div>
							<div class="clearfix"> </div>
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
              
               <div id="fondoGris">
                 
                   <a href="login.html"><img class="img-responsive" src="../imagenes/3.png" width="100" height="100" alt="login" ></a>
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
