<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Ubicacion.php');

    if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {   
            $ubicacion_obj = new Ubicacion($link);
            $id_ubicacion = $_GET['id'];
            if($id_ubicacion) {
                $ubicacion = $ubicacion_obj->getById($id_ubicacion);
            }
            $ubicaciones = $ubicacion_obj->select();
            // eliminar
            if ($_GET['action'] == 'delete') {
                $id = $_GET['id'];
                $ubicacion_obj->delete($id);
                $msg_status = "Se ha Eliminado la ciudad Exitosamente";
                header('Location: ' . '/Carfax/controllers/UbicacionesController.php');
            }
            include('../templates/admin/ubicaciones.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $codigo_ubicacion = $_POST['codigo_ubicacion'];
        $ubicacion_obj = new ubicacion($link);
        $ubicacion_obj->descripcion = $_POST['descripcion'];
        $ubicacion_obj->codigo_ciudad = $_POST['codigo_ciudad'];
        // Ingresar nuevo
        if(!$codigo_ubicacion) {       
            $ubicacion_obj->insert($ubicacion_obj);
            $msg_status = "Se ha Insertado la ubicacion Exitosamente";
              
        }
        // actualizar
        else {
            $ubicacion_obj->codigo_ubicacion = $codigo_ubicacion;
            $ubicacion_obj->update($ubicacion_obj);
            $msg_status = "Se ha Actualizado la ubicacion Exitosamente";
        }
        $ubicaciones = $ubicacion_obj->select();
        include('../templates/admin/ubicaciones.view.php');
    } 
    
?>