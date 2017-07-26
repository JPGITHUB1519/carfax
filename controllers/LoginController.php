<?php
    include('../lib/Db.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        include('../templates/login.view.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = sprintf("SELECT * FROM users WHERE username = '%s' and password = '%s'", $username, $password);
        $result = buscame_fila($sql, $link);
        if (count($result) > 0) {
            session_start();
            $_SESSION["id"] = $result[0];
            $_SESSION["username"] = $result[1];
            header('Location:' . '/Carfax/controllers/CiudadesController.php');
        }
        else {
            $invalid_login = "Error de Usuario o Contrase&ntilde;a";
            include('../templates/login.view.php');
        }

    }
?>