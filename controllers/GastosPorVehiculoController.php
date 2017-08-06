<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Documento.php');
    if (isset($_SESSION['id']) && $_SESSION['id']) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $documento_obj = new Documento($link);
            $gastos = $documento_obj->getVehiculosByUsuario($_SESSION['id']);
            include('../templates/gastos_por_vehiculo.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
?>