<?php

class Ciudad
{
    public $id;
    public $descripcion;
    public $link;

    function __construct($link) 
    {
        $this->link = $link;
    }

    public function insert($ciudad) {
        $sql = sprintf("INSERT INTO ciudades(descripcion) VALUES ('%s')", $ciudad->descripcion);
        return ejecutar($sql, $this->link);
    }

    public function select() {
        $sql = "SELECT * FROM ciudades";
        return traer_filas($sql, $this->link);
    }

    public function update($ciudad) {
        $sql = sprintf("UPDATE ciudades SET descripcion = '%s' WHERE codigo_ciudad = %s", $ciudad->descripcion, $ciudad->id);
        return ejecutar($sql, $this->link);
    }

    public function delete($id) {
        $sql = sprintf("DELETE FROM ciudades WHERE codigo_ciudad = %s", $id);
        return ejecutar($sql, $this->link);
    }

}

?>