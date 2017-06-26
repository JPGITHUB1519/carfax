<?php
    session_start();
    unset($_SESSION['id']);
    session_destroy();
    header('location: /Carfax/controllers/LoginController.php');
?>