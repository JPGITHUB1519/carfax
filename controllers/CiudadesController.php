<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Ciudad.php');

    if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ciudad = new Ciudad($link);
            if ($_GET['action'] == 'delete') {
                $id = $_GET['id'];
                $ciudad->delete($id);
                header('Location: ' . '/Carfax/controllers/CiudadesController.php');
            }
            $ciudades = $ciudad->select();
            include('../templates/ciudades.view.php');
            
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $ciudad = new Ciudad($link);
                $ciudad->descripcion = $_POST['descripcion'];
                $ciudad->insert($ciudad);
                $ciudades = $ciudad->select();
                include('../templates/ciudades.view.php'); 
        } 
    }
    else {
        include('../templates/needs_login.view.php');
    }
    
    
?>