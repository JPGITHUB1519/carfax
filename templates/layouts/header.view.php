<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <script type="text/javascript" src="../public/js/main.js"></script>
    <script type="text/javascript" src="../public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.js"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/blog">JP Carfax</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/Carfax/controllers/IndexController.php">Inicio</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimientos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Carfax/controllers/CiudadesController.php">Ciudades</a></li>
                    <li><a href="/Carfax/controllers/UbicacionesController.php">Ubicaciones</a></li>
                    <li><a href="#">Documentos</a></li>
                    <li><a href="#">Tipos Documentos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Tipos Usuarios</a></li>
                  </ul>
                </li>
            </ul>

            <!-- User Nav Bar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <p class="text-center">
                                            <!-- <img src="http://via.placeholder.com/350x150"> -->
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-xs-8">
                                        <p class="text-left"><strong><?php echo $_SESSION["username"] ?></strong></p>
                                        <p class="text-left small">{{ user.email }}</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            <a href="/logout" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End User Nav Bar -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container">
