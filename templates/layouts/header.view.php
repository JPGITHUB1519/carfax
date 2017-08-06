<!DOCTYPE html>
<html>
<head>
    <title>Carfax</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../public/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <script type="text/javascript" src="../public/js/main.js"></script>
    <script type="text/javascript" src="../public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.js"></script>
    <script type="text/javascript" src="../public/js/Chart.js"></script>
</head>
<body>

<?php if($_SESSION['id']) : ?>
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
            <a class="navbar-brand" href="/Carfax/controllers/IndexController.php">JP Carfax</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Carfax/controllers/CiudadesController.php">Mantenimiento de Ciudades</a></li>
                    <li><a href="/Carfax/controllers/UbicacionesController.php">Mantenimiento de Ubicaciones</a></li>
                    <li><a href="/Carfax/controllers/DocumentosController.php">Mantenimiento de Documentos</a></li>
                    <li><a href="/Carfax/controllers/UsuariosController.php">Mantenimiento de Usuarios</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/Carfax/controllers/ConsultaDocumentosController.php">Consulta de Documentos</a></li>
                     <li role="separator" class="divider"></li>
                    <li><a href="/Carfax/controllers/NotificacionesController.php">Notificaciones</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/Carfax/controllers/GastosPorMesController.php">Mis gastos Por Mes</a></li>
                    <li><a href="/Carfax/controllers/GastosPorVehiculoController.php">Mis gastos Por Vehiculo</a></li>
                  </ul>
                </li>
            </ul>
            
            <!-- User Nav Bar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php echo $_SESSION["username"] ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-xs-8">
                                        <p class="text-left"><strong><?php echo $_SESSION["username"] ?></strong></p>
                                        <p class="text-left small"><?php echo $_SESSION['email'] ?></p>
                                        <p class="text-left">
                                            <a href="http://localhost/Carfax/controllers/ProfileController.php" class="btn btn-primary btn-block btn-sm">Ver mi Perfil</a>
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
                                            <a href="/Carfax/controllers/LogoutController.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
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
<?php endif; ?>
<div class="container">
