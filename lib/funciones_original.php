<?php 

function db_conectar(){
    $link=mssql_connect("WINDOWS-A0KTN8I\SQLEXPRESS", "web", "web") or die ('No hubo conexión con la base de datos:' . mssql_error());
    mssql_select_db ("carfax"); 
    return $link;
} 

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


function ejecutar($sql,$link){
    $resultado = mssql_query($sql, $link);
    return $resultado;
}

?>