<?php
    session_start();
    include('../lib/Db.php');
    include('../models/TipoDocumento.php');
    include('../models/Documento.php');

    if (isset($_SESSION['id']) && $_SESSION['id']) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $filtros = array();
            $filtros["tipo_documento"] = $_GET['tipo_documento'];
            $filtros['vehiculo'] = $_GET['vehiculo'];
            $filtros['desde'] = $_GET['desde'];
            $filtros['hasta'] = $_GET['hasta'];

            $documento_obj = new Documento($link);
            $tipo_documento_obj = new TipoDocumento($link);
            $tipos_documentos = $tipo_documento_obj->select();
            $vehiculos = $documento_obj->getVehiculosByUsuario($_SESSION['id']);
            if ($filtros["tipo_documento"] or $filtros['vehiculo'] or $filtros['desde'] or $filtros['hasta']) {
                $documentos = $documento_obj->consultaFilterByUsuario($_SESSION['id'], $filtros);
            }
            else {
                $documentos = $documento_obj->getAllButNoVehiculosByUsuario($_SESSION['id']);
            }

            if(count($documentos) == 0) {
                $flash_message = "No hay Resultados para esta busqueda";
            }
            include('../templates/consulta.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
?>