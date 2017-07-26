<?php 

function db_conectar(){
    $link=mssql_connect("WINDOWS-A0KTN8I\SQLEXPRESS", "web", "web") or die ('No hubo conexión con la base de datos:' . mssql_error());
    mssql_select_db ("carfax"); 
    return $link;
} 

function ejecutar($sql,$link){
    $resultado = mssql_query($sql, $link);
    return $resultado;
}

// traer multiples filas de un select
function traer_filas($sql, $link) {
    $execute_result = ejecutar($sql, $link);
    $resultado = array();
    while($row = mssql_fetch_row($execute_result)) {
        array_push($resultado, $row);
    }
    return $resultado;
}

// do not use this
function buscame($sql,$link){
    $res=ejecutar($sql,$link);
    $row=traer_fila($res);
    return $row[0];
}

function buscame_fila($sql,$link){
    $res=ejecutar($sql,$link);
    $row=traer_fila($res);
    return $row;
} 

function traer_fila($resultado){
    $fila=mssql_fetch_row($resultado);
    return $fila;
} 

function dd($value) {
    var_dump($value);
    die();
}




?>