<?php

class TipoDocumento {
    public $tipo_documento;
    public $descripcion;

    public function __construct($link) {
        $this->link = $link;
    }

    public function select() {
        $sql = "SELECT * FROM tipos_documentos";
        return traer_filas($sql, $this->link);
    }
}

?>