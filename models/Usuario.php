<?php

class Usuario 
{
    public $codigo_usuario;
    public $tipo_usuario;
    public $fecha_registro;
    public $nombre;
    public $fecha_nacimiento;
    public $clave;
    public $correo;
    public $estado;
    public $direccion;
    public $codigo_ubicacion;
    public $sexo;
    public $login;
    public $identidad;
    public $telefono;
    public $foto;
    public $contacto;
    public $facebook;
    public $twitter;
    public $instagram;
    public $whatapp;
    public $youtube;
    public $google_plus;

    function __construct($link) {
        $this->link = $link;
    }

    public function insert($usuario) {
        $sql = sprintf("INSERT INTO dbo.usuarios (codigo_usuario, tipo_usuario, fecha_registro, nombre, fecha_nacimiento, clave, correo, estado, direccion, codigo_ubicacion, sexo, login, identidad, telefono, foto, contacto, facebook, twitter, instagram, whatsapp, youtube, [google+] ) VALUES ('%s', '%s', :'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $usuarios->codigo_usuario; $usuarios->tipo_usuario; $usuarios->fecha_registro; $usuarios->nombre; $usuarios->fecha_nacimiento; $usuarios->clave; $usuarios->correo; $usuarios->estado; $usuarios->direccion; $usuarios->codigo_ubicacion; $usuarios->sexo; $usuarios->login; $usuarios->identidad; $usuarios->telefono; $usuarios->foto; $usuarios->contacto; $usuarios->facebook; $usuarios->twitter; $usuarios->instagram; $usuarios->whatapp; $usuarios->youtube; $usuarios->google_plus);
        return ejecutar($sql, $this->link);
    }
}