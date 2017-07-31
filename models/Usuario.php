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
    public $whatsapp;
    public $youtube;
    public $google_plus;

    function __construct($link) {
        $this->link = $link;
    }

    public function insert($usuario) {
        $sql = sprintf("INSERT INTO usuarios (tipo_usuario, fecha_registro, nombre, fecha_nacimiento, clave, correo, estado, direccion, codigo_ubicacion, sexo, login, identidad, telefono, foto, contacto, facebook, twitter, instagram, whatsapp, youtube, [google+] ) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $usuario->tipo_usuario, $usuario->fecha_registro, $usuario->nombre, $usuario->fecha_nacimiento, $usuario->clave, $usuario->correo, $usuario->estado, $usuario->direccion, $usuario->codigo_ubicacion, $usuario->sexo, $usuario->login, $usuario->identidad, $usuario->telefono, $usuario->foto, $usuario->contacto, $usuario->facebook, $usuario->twitter, $usuario->instagram, $usuario->whatsapp, $usuario->youtube, $usuario->google_plus);
        return ejecutar($sql, $this->link);
    }

    public function insertWithDefaultDate($usuario) {
        $sql = sprintf("INSERT INTO usuarios (tipo_usuario, fecha_registro, nombre, fecha_nacimiento, clave, correo, estado, direccion, codigo_ubicacion, sexo, login, identidad, telefono, foto, contacto, facebook, twitter, instagram, whatsapp, youtube, [google+] ) VALUES ('%s', GETDATE(), '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $usuario->tipo_usuario, $usuario->nombre, $usuario->fecha_nacimiento, $usuario->clave, $usuario->correo, $usuario->estado, $usuario->direccion, $usuario->codigo_ubicacion, $usuario->sexo, $usuario->login, $usuario->identidad, $usuario->telefono, $usuario->foto, $usuario->contacto, $usuario->facebook, $usuario->twitter, $usuario->instagram, $usuario->whatsapp, $usuario->youtube, $usuario->google_plus);
        return ejecutar($sql, $this->link);
    }

    public function select() {
        $sql = sprintf("SELECT * FROM usuarios");
        return traer_filas($sql, $this->link);
    }

    public function update($usuario) {
        $sql = sprintf("UPDATE usuarios SET tipo_usuario = '%s', fecha_registro = '%s', nombre = '%s', fecha_nacimiento = '%s', clave = '%s', correo = '%s', estado = '%s', direccion = '%s', codigo_ubicacion = '%s', sexo = '%s', login = '%s', identidad = '%s', telefono = '%s', foto = '%s', contacto = '%s', facebook = '%s', twitter = '%s', instagram = '%s', whatsapp = '%s', youtube = '%s', [google+] = '%s' WHERE codigo_usuario = '%s' ", $usuario->tipo_usuario, $usuario->fecha_registro, $usuario->nombre, $usuario->fecha_nacimiento, $usuario->clave, $usuario->correo, $usuario->estado, $usuario->direccion, $usuario->codigo_ubicacion, $usuario->sexo, $usuario->login, $usuario->identidad, $usuario->telefono, $usuario->foto, $usuario->contacto, $usuario->facebook, $usuario->twitter, $usuario->instagram, $usuario->whatsapp, $usuario->youtube, $usuario->google_plus, $usuario->codigo_usuario);
        return ejecutar($sql, $this->link);
    }

    public function delete($codigo_usuario) {
        $sql = sprintf("DELETE FROM usuarios WHERE codigo_usuario = '%s' ", $codigo_usuario);
        return ejecutar($sql, $this->link);
    }

    public function getById($codigo_usuario) {
        $sql = sprintf("SELECT * FROM usuarios WHERE codigo_usuario = '%s' ", $codigo_usuario);
        // var_dump(buscame_fila($sql, $this->link));
        // die();
        return buscame_fila($sql, $this->link);
    }

    // info de usuario + infromacion de ubicacion
    public function getByIdWithLocaleInfo($codigo_usuario) {
        $sql = sprintf("SELECT usuarios.*, ubicaciones.descripcion as ubicacion, ciudades.descripcion as ciudad FROM usuarios INNER JOIN ubicaciones on usuarios.codigo_ubicacion = ubicaciones.codigo_ubicacion
            INNER JOIN ciudades on ubicaciones.codigo_ciudad = ciudades.codigo_ciudad
            WHERE usuarios.codigo_usuario = '%s' ", $codigo_usuario);
        return buscame_fila($sql, $this->link);
    }

    public function getLastInserted() {
        $sql = "SELECT * FROM usuarios WHERE codigo_usuario = (SELECT MAX(codigo_usuario) FROM usuarios)";
        return buscame_fila($sql, $this->link);
    }


}