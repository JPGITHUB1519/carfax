<?php
    include('../lib/Db.php');
    include('../models/Usuario.php');
    session_start();
    if (isset($_SESSION['id']) && $_SESSION['id']) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $usuario_obj = new Usuario($link);
            $usuario_id = $_GET['id'];
            // obtener informacion del usuario actual
            if(!$usuario_id) {
                $usuario = $usuario_obj->getByIdWithLocaleInfo($_SESSION['id']);
            }
            // obtener informacion del usuario pasado como parametro
            else {
                $usuario = $usuario_obj->getByIdWithLocaleInfo($usuario_id);
            }
            
            include('../templates/profile.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }