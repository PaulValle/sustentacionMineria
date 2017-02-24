<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
<title>Mineria PKYK</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <meta name="description" content="Seguridad Minera">
<meta name="keywords" content="mineria,drones,seguridad">
<meta name="author" content="Kimberly Munoz">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

        <div class="container">
        <br>
            <header>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ham1">
                             <span class="sr-only">Menu</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                                 
                            </button>
                            <a href="../index.html"><img class="img-responsive" src="../imagenes/LOGO5.png" alt="logo" height="150" width=150></a>
                           
                        </div>
                       
                        <div >
                        <br>
                        <a href="login.html"><img class="img-responsive pull-right  hidden-xs" src="../imagenes/3.png" alt="logear" width="100" height="100" ></a>
                  
                        </div>
                        <div class="collapse navbar-collapse" id="ham1">
                        <ul class="nav navbar-nav">
                           
                              <li><a href="about.html">Acerca de</a></li>
                            <li><a href="nosotros.html">Nosotros</a></li>
                            <li><a href="servicios.html">Servicios</a></li>
                              <li><a href="contacto.html">Contacto</a></li>
                            </ul>
                            
                            

                        </div>
                    </div>
                </nav>
            
            </header>
            <div class="container">
                
                <h3>Porfavor ingrese sus datos</h3>
                <br>
                <form class="form-horizontal">
                      <div class="form-group">
                            <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="nombre"
                                     placeholder="Ingrese su nombre">
                            </div>
                      </div>
                      <div class="form-group">
                            <label for="apellido" class="col-lg-2 control-label">Apellido</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="apellido" 
                                     placeholder="Ingrese su contraseña">
                            </div>
                      </div>
                      <div class="form-group">
                            <label for="email" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="email"
                                     placeholder="Ingrese su correo electrónico">
                            </div>

                      </div>
                      <div class="form-group">
                            <label for="telefono" class="col-lg-2 control-label">Telefono</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="telefono"
                                     placeholder="Ingrese su teléfono">
                            </div>

                      </div>
                      <div class="form-group">
                            <label class="col-lg-2 control-label">Provincia</label>
                            <div class="col-lg-4">
                                  <select class="form-control">
                                      <option>----</option>
                                      <option>Azuay</option>
                                      <option>Bolívar</option>
                                      <option>Cañar</option>
                                      <option>Carchi</option>
                                      <option>Chimborazo</option>
                                      <option>Cotopaxi</option>
                                      <option>El Oro</option>
                                      <option>Esmeraldas</option>
                                      <option>Galápagos</option>
                                      <option>Guayas</option>
                                      <option>Imbabura</option>
                                      <option>Loja</option>
                                       <option>Los Ríos</option>
                                      <option>Manabí</option>
                                      <option>Morona Santiago</option>
                                      <option>Napo</option>
                                       <option>Orellana</option>
                                      <option>Pastaza</option>
                                      <option>Pichincha</option>
                                      <option>Santa Elena</option>
                                        <option>Santo Domingo de los Tsáchilas</option>
                                      <option>Sucumbíos</option>
                                      <option>Tungurahua</option>
                                      <option>Zamora Chinchipe</option>
                                      
                                  </select>
                            </div>

                            <label for="codigopostal" class="col-lg-2 control-label">Código Postal</label>
                            <div class="col-lg-2">
                              <input type="text" class="form-control" id="codigopostal" 
                                     placeholder="Ingrese su código postal">
                            </div>
                      </div>
                     <div class="form-group">
                            <label for="direccion" class="col-lg-2 control-label">Dirección</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="direccion" 
                                     placeholder="Ingrese su dirección">
                            </div>
                      </div>
                       <div class="form-group">
                            <label for="usuario" class="col-lg-2 control-label">Usuario</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="usuario" 
                                     placeholder="Ingrese su usuario">
                            </div>
                      </div>
                      <div class="form-group">
                            <label for="contraseña" class="col-lg-2 control-label">Contraseña</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="contraseña" 
                                     placeholder="Ingrese su contraseña">
                            </div>
                      </div>
                    
                      <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-8">
                              <button type="submit" class="btn btn-default">Registrarse</button>
                            </div>
                      </div>
                </form>


            
            </div>
            <div class="container hidden-xs">
                <div id="derechos">
                    <br>
                    <h6>Todos los Derechos reservados ©sanmucuva 2017</h6>
                    <br>
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
