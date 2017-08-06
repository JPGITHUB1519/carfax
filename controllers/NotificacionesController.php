<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Documento.php');

    if (isset($_SESSION['id']) && $_SESSION['id']) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $documento_obj = new Documento($link);
            $tipo_documento_id = $_GET['tipo_notificacion'];
            $tipos_notificaciones = array("2" => 'Venta', "25" => 'Compra', "26" => "Vehiculos Robados", "" => "No aplicar");
            if($tipo_documento_id) {
                $documentos = $documento_obj->getNotificacionesByTipoDocumento($tipo_documento_id);
            }
            else {
                $documentos = $documento_obj->getNotificaciones();
                // var_dump($documentos);
                // die();
            }

            include('../templates/notificaciones.view.php');
        }
    }
?>