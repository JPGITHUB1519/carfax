<?php
    session_start();
    include('../lib/Db.php');
    include('../models/Ciudad.php');

    if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include('../templates/index.view.php');
        }
    }
    else {
        include('../templates/needs_login.view.php');
    }
?>