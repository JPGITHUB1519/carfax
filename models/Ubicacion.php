<?php

class Ubicacion
{
    public $codigo_ubicacion;
    public $descripcion;
    public $codigo_ciudad;

    function __construct($link) {
        $this->link = $link;
    }

    public function insert($ubicacion) {
        $sql = sprintf("INSERT INTO ubicaciones (descripcion, codigo_ciudad) VALUES ('%s', %s)",$ubicacion->descripcion, $ubicacion->codigo_ciudad);
        return ejecutar($sql, $this->link);
    }

    public function select() {
        $sql = "SELECT * FROM ubicaciones";
        return traer_filas($sql, $this->link);
    }

    public function update($ubicacion) {
        $sql = sprintf("UPDATE ubicaciones set descripcion = '%s', codigo_ciudad = '%s' WHERE codigo_ubicacion = '%s'", $ubicacion->descripcion, $ubicacion->codigo_ciudad, $ubicacion->codigo_ubicacion);
        return ejecutar($sql, $this->link);
    }

    public function delete($codigo_ubicacion) {
        $sql = sprintf("DELETE FROM ubicaciones WHERE codigo_ubicacion = '%s'", $codigo_ubicacion);
        return ejecutar($sql, $this->link);
    }

    public function getById($codigo_ubicacion) {
        $sql = sprintf("SELECT * FROM ubicaciones WHERE codigo_ubicacion = '%s'", $codigo_ubicacion);
        return buscame_fila($sql, $this->link);
    }
}

?>
