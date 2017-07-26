<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Ciudad.php');

    if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {       
            $ciudad_obj = new Ciudad($link);
            // si hay parametro en el get, muestrame la ciudad en especifico
            $id_ciudad = $_GET['id'];
            if ($id_ciudad) {
                $ciudad = $ciudad_obj->getById($id_ciudad);
            }
            // seleccionar todos
            $ciudades = $ciudad_obj->select();
            // eliminar
            if ($_GET['action'] == 'delete') {
                $id = $_GET['id'];
                $ciudad_obj->delete($id);
                $msg_status = "Se ha Eliminado la ciudad Exitosamente";
                header('Location: ' . '/Carfax/controllers/CiudadesController.php');
            }
            include('../templates/admin/ciudades.view.php');
            
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $codigo_ciudad = $_POST['codigo_ciudad'];
            $ciudad_obj = new Ciudad($link);
            $ciudad_obj->descripcion = $_POST['descripcion'];
            // Ingresar nuevo
            if(!$codigo_ciudad) {       
                $ciudad_obj->insert($ciudad_obj);
                $msg_status = "Se ha Insertado la ciudad Exitosamente";
                  
            }
            // actualizar
            else {
                $ciudad_obj->id = $codigo_ciudad;
                $ciudad_obj->update($ciudad_obj);
                $msg_status = "Se ha Actualizado la ciudad Exitosamente";
            }
            $ciudades = $ciudad_obj->select();
            include('../templates/admin/ciudades.view.php');
        } 
    }
    else {
        include('../templates/needs_login.view.php');
    }
    
    
?>