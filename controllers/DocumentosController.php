<?php
    session_start();
    include('../lib/Db.php');
    include('../models/TipoDocumento.php');
    include('../models/Documento.php');
    include('../models/Usuario.php');

    if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {   
            $documento_obj = new documento($link);
            $tipo_documento_obj = new TipoDocumento($link);
            $usuario_obj = new Usuario($link);
            $id_documento = $_GET['id'];
            if($id_documento) {
                $documento = $documento_obj->getById($id_documento);
            }
            $documentos = $documento_obj->getByUsuarios($_SESSION['id']);
            $tipos_documentos = $tipo_documento_obj->select();
            $usuarios = $usuario_obj->select();
            // eliminar
            if ($_GET['action'] == 'delete') {
                $id = $_GET['id'];
                $documento_obj->delete($id);
                $msg_status = "Se ha Eliminado la ciudad Exitosamente";
                header('Location: ' . '/Carfax/controllers/DocumentosController.php');
            }
            include('../templates/admin/documentos.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $codigo_documento = $_POST['documento'];
        $documento_obj = new documento($link);
        $tipo_documento_obj = new TipoDocumento($link);
        $usuario_obj = new Usuario($link);
        $documento_obj->documento = $_POST['documento'];
        $documento_obj->detalle = $_POST['detalle'];
        $documento_obj->tipo_documento = $_POST['tipo_documento'];
        $documento_obj->fecha = $_POST['fecha'];
        $documento_obj->codigo_usuario = $_POST['codigo_usuario'];
        $documento_obj->fecha_registro = $_POST['fecha_registro'];
        $documento_obj->documento_afectado = $_POST['documento_afectado'];
        $documento_obj->valor = $_POST['valor'];
        $documento_obj->monto = $_POST['monto'];
        $documento_obj->hora = $_POST['hora'];
        $documento_obj->codigo_usuario_secundario = $_POST['codigo_usuario_secundario'];
        $documento_obj->estado = $_POST['estado'];
        $documento_obj->comentario = $_POST['comentario'];
        $documento_obj->referencia = $_POST['referencia'];
        $documento_obj->foto = $_POST['foto'];
        // Ingresar nuevo
        if(!$codigo_documento) {       
            $documento_obj->insert($documento_obj);
            $msg_status = "Se ha Insertado la documento Exitosamente";
              
        }
        // actualizar
        else {
            $documento_obj->codigo_documento = $codigo_documento;
            $documento_obj->update($documento_obj);
            $msg_status = "Se ha Actualizado la documento Exitosamente";
        }
        $documentos = $documento_obj->getByUsuarios($_SESSION['id']);
        $tipos_documentos = $tipo_documento_obj->select();
        $usuarios = $usuario_obj->select();
        include('../templates/admin/documentos.view.php');
    } 
    
?>