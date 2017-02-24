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
     <?php
		  if (!isset($_SESSION['mineria'])){
              #$_SESSION['mineria']= "keilita@hotmail.com";
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
                <a class="navbar-brand" href="../index.php"><img src="../imagenes/LOGO5.png" width="80" height="25"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
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
                    <li >
                        <a  href="login.php"><img class="img-responsive" src="../imagenes/3.png" width="80" height="25" alt="login" ></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
            
            </header>

    <div class="container" >
           <br>
          <br>
          <br>
          <br>
          <br>
          <br>
   
         <div class="row">
                <div class="col-sm-3">
             </div>
             <div class="col-sm-6 card card-container">
                  <h2>Iniciar Sesión</h2>
                 <br>
                 
                    <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin" method="post" action="validarLogin.php">
                        
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus>
                        <input type="password" name="clave" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                        <br>
                        <br>
                        <a href="restaurarPassword.php" class="forgot-password">¡Rayos! Olvidé mi contraseña</a>  
                        <br>
                        <br>
                        <button class="btn btn-sm btn-primary btn-block" type="submit">Entrar</button>
                  
                    </form>
             </div>
           
        </div>
        
         <br>
          <br>
          <br>
       <br>
          <br>
          <br>
    </div>
             <br>
                    <br>
          <br>
          <br>
            			          
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
    
    
    
     <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
                             } 
                        ?>
    
 <script src="../js/j3.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
     <script src="../js/npm.js"></script>
    <script src="../js/j1.js"></script>
     <script src="../js/j2.js"></script>
    <script src="../js/j4.js"></script>
 
    </body>
</html>
