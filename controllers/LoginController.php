<?php
    session_start();
    include('../lib/Db.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_SESSION['id']) && $_SESSION['id']) {
            header('Location:' . '/Carfax/controllers/IndexController.php');
        }
        else {
            include('../templates/login.view.php'); 
        }    
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = sprintf("SELECT * FROM usuarios WHERE login = '%s' AND clave = '%s';", $username, $password);
        $result = buscame_fila($sql, $link);
        if (count($result) > 0) {
            session_start();
            $_SESSION["id"] = $result[0];
            $_SESSION['tipo_usuario'] = $result[1];
            $_SESSION["username"] = $result[3];
            $_SESSION["email"] = $result[6];
            header('Location:' . '/Carfax/controllers/IndexController.php');
        }
        else {
            $invalid_login = "Error de Usuario o Contrase&ntilde;a";
            include('../templates/login.view.php');
        }

    }
?>