<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Usuario.php');
    include('../models/Ubicacion.php');

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (!(isset($_SESSION['id']) && $_SESSION['id'])) {
            $ubicacion_obj = new Ubicacion($link);
            $ubicaciones = $ubicacion_obj->select();
            include('../templates/signup.view.php');
        }
        else {
            header('Location:' . '/Carfax/controllers/IndexController.php');
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario_obj = new usuario($link);
        $usuario_obj->tipo_usuario = $_POST['tipo_usuario'];
        // $usuario_obj->fecha_registro = $_POST['fecha_registro'];
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
    
        $usuario_obj->insertWithDefaultDate($usuario_obj);

        // obtener el ultimo insertado para tomar datos
        $last_inserted_usuario = $usuario_obj->getLastInserted();
        // guardar session
        $_SESSION["id"] = $last_inserted_usuario[0];
        $_SESSION["username"] = $last_inserted_usuario[3];
        $_SESSION['tipo_usuario'] = $last_inserted_usuario[1];
        $_SESSION["email"] = $last_inserted_usuario[6];
        header('Location:' . '/Carfax/controllers/IndexController.php');
    }         
?>