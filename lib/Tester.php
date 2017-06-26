<?php

require('Funciones.php');
require("../models/Ciudad.php");

$link = db_conectar();
$ciudad = new Ciudad($link);
$ciudad->id = 75;
$ciudad->descripcion = "QACITY2";
$ciudad->delete(75);

?>