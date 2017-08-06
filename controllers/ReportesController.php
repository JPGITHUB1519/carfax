<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Documento.php');

    if (isset($_SESSION['id']) && $_SESSION['id'] == true && $_SESSION['tipo_usuario'] == 0) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {   
            $documento_obj = new Documento($link);
            $total_usuarios = $documento_obj->getCountUsuarios();
            $total_usuarios = $total_usuarios[0];
            $total_documentos = $documento_obj->getCountDocumentos();
            $total_documentos = $total_documentos[0];
            $total_vehiculos = $documento_obj->getCountVehiculos();
            $total_vehiculos = $total_vehiculos[0];
            include('../templates/admin/reportes.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
?>