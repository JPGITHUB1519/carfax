<?php

class Documento {
    public $documento;
    public $detalle;
    public $tipo_documento;
    public $fecha;
    public $codigo_usuario;
    public $fecha_registro;
    public $documento_afectado;
    public $valor;
    public $monto;
    public $hora;
    public $codigo_usuario_secundario;
    public $estado;
    public $comentario;
    public $referencia;
    public $foto;

    function __construct($link) {
        $this->link = $link;
    }

    public function insert($documento)
    {
        $sql = sprintf("INSERT INTO dbo.documentos (detalle, tipo_documento, fecha, codigo_usuario, fecha_registro, documento_afectado, valor, monto, hora, codigo_usuario_secundario, estado, comentario, referencia, foto ) VALUES ('%s', '%s', '%s', '%s', '%s', NULLIF('%s', ''), '%s', '%s', '%s', NULLIF('%s', ''), '%s', '%s', '%s', '%s')", $documento->detalle, $documento->tipo_documento, $documento->fecha, $documento->codigo_usuario, $documento->fecha_registro, $documento->documento_afectado, $documento->valor, $documento->monto, $documento->hora, $documento->codigo_usuario_secundario, $documento->estado, $documento->comentario, $documento->referencia, $documento->foto);
        return ejecutar($sql, $this->link);
    }

    public function update($documento)
    {
        $sql = sprintf("UPDATE dbo.documentos SET detalle = '%s', tipo_documento = '%s', fecha = '%s', codigo_usuario = '%s', fecha_registro = '%s', documento_afectado = NULLIF('%s', ''), valor = '%s', monto = '%s', hora = '%s', codigo_usuario_secundario = NULLIF('%s',''), estado = '%s', comentario = '%s', referencia = '%s', foto = '%s' WHERE documento = '%s'", $documento->detalle, $documento->tipo_documento, $documento->fecha, $documento->codigo_usuario, $documento->fecha_registro, $documento->documento_afectado, $documento->valor, $documento->monto, $documento->hora, $documento->codigo_usuario_secundario, $documento->estado, $documento->comentario, $documento->referencia, $documento->foto, $documento->documento);
        return ejecutar($sql, $this->link);
    }

    public function updateDocumentoValor($documento)
    {
        $sql = sprintf("UPDATE documentos SET valor = '%s' WHERE documento = '%s' ", $documento->valor, $documento->documento_afectado);
        return ejecutar($sql, $this->link);
    }

    public function select() {
        $sql = "SELECT * FROM documentos";
        return traer_filas($sql, $this->link);
    }

    // obtener un documento filtrado por el tipo de docunmento
    public function getByTipoDocumento($tipo_documento)
    {
        $sql = sprintf("SELECT documentos.*, tipos_documentos.descripcion as tipo_documento_descripcion FROM documentos
                        INNER JOIN tipos_documentos on tipos_documentos.tipo_documento = documentos.tipo_documento
                        WHERE documentos.tipo_documento = '%s' ", 
                $tipo_documento);
        return traer_filas($sql, $this->link);
    }

    // obtener solo los documentos de tipo notificacion (ventas, compra, robados)
    public function getNotificaciones()
    {
        $sql = "SELECT documentos.*, tipos_documentos.descripcion as tipo_documento_descripcion, documentos_vehiculo.foto as vehiculo_imagen FROM documentos
            INNER JOIN tipos_documentos on tipos_documentos.tipo_documento = documentos.tipo_documento
            LEFT JOIN documentos as documentos_vehiculo on documentos_vehiculo.documento = documentos.documento_afectado
            WHERE documentos.tipo_documento IN(2,25,26)";
        return traer_filas($sql, $this->link);
    }

    public function getNotificacionesByTipoDocumento($tipo_documento)
    {
        $sql = sprintf("SELECT documentos.*, tipos_documentos.descripcion as tipo_documento_descripcion, documentos_vehiculo.foto as vehiculo_imagen FROM documentos
            INNER JOIN tipos_documentos on tipos_documentos.tipo_documento = documentos.tipo_documento
            LEFT JOIN documentos as documentos_vehiculo on documentos_vehiculo.documento = documentos.documento_afectado
            WHERE documentos.tipo_documento = '%s'", $tipo_documento);
        return traer_filas($sql, $this->link);
    }

    // obtener solo los documentos(no vehiculos)
    public function getAllButNoVehiculos($codigo_usuario)
    {
        $sql = "SELECT documentos.*, tipos_documentos.descripcion as tipo_documento_detalle FROM documentos 
        INNER JOIN tipos_documentos on tipos_documentos.tipo_documento = documentos.tipo_documento 
        WHERE documentos.tipo_documento != 1";
        return traer_filas($sql, $this->link);
    }

    // obtener solo los documentos(no vehiculos) de un usuario en especifico
    public function getAllButNoVehiculosByUsuario($codigo_usuario) {
        $sql = sprintf("SELECT documentos.*, tipos_documentos.descripcion as tipo_documento_detalle FROM documentos 
        INNER JOIN tipos_documentos on tipos_documentos.tipo_documento = documentos.tipo_documento 
        WHERE documentos.tipo_documento != 1 and documentos.codigo_usuario = '%s'", $codigo_usuario);
        return traer_filas($sql, $this->link);
    }


    public function delete($codigo_documento)
    {
        $sql = sprintf("DELETE FROM documentos WHERE documento = '%s'", $codigo_documento);
        return ejecutar($sql, $this->link);
    }

    public function getById($codigo_documento)
    {
        $sql = sprintf("SELECT * FROM documentos WHERE documento = '%s'", $codigo_documento);
        return buscame_fila($sql, $this->link);
    }

    // obtener todos los documentos de un usuariio
    public function getByUsuarios($codigo_usuario)
    {
        $sql = sprintf("SELECT * FROM documentos WHERE codigo_usuario = '%s' ", $codigo_usuario);
        return traer_filas($sql, $this->link);
    }

    // obtener todos los vehicukos
    public function getVehiculos()
    {
        $sql = sprintf("SELECT * FROM documentos WHERE tipo_documento = '%s'", '1');
        return traer_filas($sql, $this->link);
    }

    // obtener los vehiculos de un usuario y su gastos
    public function getVehiculosByUsuario($codigo_usuario)
    {
        $sql = sprintf("SELECT documentos.*, ISNULL(gastos_por_vehiculo.gasto_total, 0)  
                        FROM   documentos 
                               LEFT JOIN gastos_por_vehiculo 
                                      ON documentos.documento = gastos_por_vehiculo.documento 
                        WHERE  tipo_documento = 1 
                               AND codigo_usuario = '%s' ", 
                $codigo_usuario);
        return traer_filas($sql, $this->link);
    }

    // obtener los documentos de un vehiculo
    public function getVehiculoDocumentos($codigo_documento)
    {
        $sql = sprintf("SELECT documentos.*, tipos_documentos.descripcion as tipo_documento_detalle  FROM documentos 
        INNER JOIN tipos_documentos on tipos_documentos.tipo_documento = documentos.tipo_documento
        WHERE documento_afectado = '%s'", $codigo_documento);
        return traer_filas($sql, $this->link);
    }

    public function consultaFilterByUsuario($codigo_usuario, $filtros)
    {
        $sql = sprintf("SELECT documentos.*, tipos_documentos.descripcion as tipo_documento_detalle FROM documentos 
        INNER JOIN tipos_documentos on tipos_documentos.tipo_documento = documentos.tipo_documento 
        WHERE documentos.tipo_documento != 1 and documentos.codigo_usuario = '%s'", $codigo_usuario);

        if($filtros["tipo_documento"]) {
            $sql = $sql . sprintf(" AND documentos.tipo_documento = '%s'", $filtros['tipo_documento']);
        }

        if($filtros["vehiculo"]) {
            $sql = $sql . sprintf(" AND documentos.documento_afectado = '%s'", $filtros['vehiculo']);
        }

        if($filtros["desde"]) {
            $sql = $sql . sprintf(" AND documentos.fecha > '%s'", $filtros['desde']);
        }

        if($filtros["hasta"]) {
            $sql = $sql . sprintf(" AND documentos.fecha < '%s'", $filtros['hasta']);
        }
        return traer_filas($sql, $this->link);
    }

    /* ############### reportes data ############# */

    // Obtener gastos por mes de los usuarios
    public function getGastosPorMes($codigo_usuario)
    {
        $sql = sprintf("SELECT DATEPART(MONTH, fecha), SUM(monto) 
                       FROM documentos WHERE codigo_usuario = '%s'
                       GROUP BY DATEPART(MONTH, fecha)", 
                $codigo_usuario);

        return traer_filas($sql, $this->link);
    }

    public function getCountUsuarios()
    {
        $sql = "SELECT COUNT(*) as total_usuarios FROM usuarios";

        return buscame_fila($sql, $this->link);
    }

    public function getCountDocumentos()
    {
        $sql = "SELECT COUNT(*) as total_documentos from documentos";
        return buscame_fila($sql, $this->link);
    }

    public function getCountVehiculos()
    {
        $sql = "SELECT COUNT(*) as total_vehiculos from documentos WHERE tipo_documento = 1";
        return buscame_fila($sql, $this->link);
    }


}