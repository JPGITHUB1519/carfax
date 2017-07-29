<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Usuario.php');
    include('../models/Ubicacion.php');

    if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {   
            $usuario_obj = new Usuario($link);
            $ubicacion_obj = new Ubicacion($link);
            $id_usuario = $_GET['id'];
            if($id_usuario) {
                $usuario = $usuario_obj->getById($id_usuario);
            }
            $usuarios = $usuario_obj->select();
            $ubicaciones = $ubicacion_obj->select();
            // eliminar
            if ($_GET['action'] == 'delete') {
                $id = $_GET['id'];
                $usuario_obj->delete($id);
                $msg_status = "Se ha Eliminado la ciudad Exitosamente";
                header('Location: ' . '/Carfax/controllers/UsuariosController.php');
            }
            include('../templates/admin/usuarios.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $codigo_usuario = $_POST['codigo_usuario'];
        $usuario_obj = new usuario($link);
        $usuario_obj->codigo_usuario = $_POST['codigo_usuario'];
        $usuario_obj->tipo_usuario = $_POST['tipo_usuario'];
        $usuario_obj->fecha_registro = $_POST['fecha_registro'];
        $usuario_obj->nombre = $_POST['nombre'];
        $usuario_obj->fecha_nacimiento = $_POST['fecha_nacimiento'];
        $usuario_obj->clave = $_POST['clave'];
        $usuario_obj->correo = $_POST['correo'];
        $usuario_obj->estado = $_POST['estado'];
        $usuario_obj->direccion = $_POST['direccion'];
        $usuario_obj->codigo_ubicacion = $_POST['codigo_ubicacion'];
        $usuario_obj->sexo = $_POST['sexo'];
        $usuario_obj->login = $_POST['login'];
        $usuario_obj->identidad = $_POST['identidad'];
        $usuario_obj->telefono = $_POST['telefono'];
        $usuario_obj->foto = $_POST['foto'];
        $usuario_obj->contacto = $_POST['contacto'];
        $usuario_obj->facebook = $_POST['facebook'];
        $usuario_obj->twitter = $_POST['twitter'];
        $usuario_obj->instagram = $_POST['instagram'];
        $usuario_obj->whatsapp = $_POST['whatsapp'];
        $usuario_obj->youtube = $_POST['youtube'];
        $usuario_obj->google_plus = $_POST['google_plus'];

        // Ingresar nuevo
        if(!$codigo_usuario) {       
            $usuario_obj->insert($usuario_obj);
            $msg_status = "Se ha Insertado la usuario Exitosamente";
              
        }
        // actualizar
        else {
            $usuario_obj->codigo_usuario = $codigo_usuario;
            $usuario_obj->update($usuario_obj);
            $msg_status = "Se ha Actualizado la usuario Exitosamente";
        }
        $usuarios = $usuario_obj->select();
        include('../templates/admin/usuarios.view.php');
    } 
    
?>