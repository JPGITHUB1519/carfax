<?php
include('../lib/Db.php');
include('../models/Usuario.php');
include('../models/Ubicacion.php');
// $usuario_obj = new Usuario($link);
// $usuario_obj->codigo_usuario = 7;
// $usuario_obj->tipo_usuario = 1;
// $usuario_obj->fecha_nacimiento = '2017-01-02';
// $usuario_obj->nombre = "Jean";
// $usuario_obj->codigo_ubicacion = 1;
// $usuario_obj->update($usuario_obj);
// var_dump($usuario_obj->getById(1));

$ubicacion_obj = new Ubicacion($link);
var_dump($ubicacion_obj->getUbicacionesColId());