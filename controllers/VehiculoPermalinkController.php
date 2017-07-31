<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Documento.php');

    if (isset($_SESSION['id']) && $_SESSION['id']) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $documento_id = $_GET['id'];
            $documento_obj = new Documento($link);
            $vehiculo = $documento_obj->getById($documento_id);
            $vehiculo_documentos = $documento_obj-> getVehiculoDocumentos($documento_id);
            include('../templates/vehiculo-permalink.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
?>