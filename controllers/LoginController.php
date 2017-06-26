<?php
    include('../lib/Db.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        include('../templates/login.view.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = sprintf("SELECT * FROM users WHERE username = '%s' and password = '%s'", $username, $password);
        $result = traer_filas($sql, $link);
        if (count($result) > 0) {
            session_start();
            $_SESSION["id"] = $result[0];
            header('Location:' . '/Carfax/controllers/CiudadesController.php');
        }
        else {
            include('../templates/login.view.php');
        }

    }
?>