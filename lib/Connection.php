<?php
// El servidor con el formato: <computer>\<instance name> o 
// <server>,<port> cuando se use un número de puerto diferente del de defecto
$server = 'WINDOWS-A0KTN8I\SQLEXPRESS';

// Connect to MSSQL
$link = mssql_connect($server, 'web', 'web');

// select database
mssql_select_db("carfax", $link);

$sql = "SELECT * FROM ciudades";

$statement = mssql_query($sql);

$result = mssql_fetch_array($statement);

var_dump($result);

if (!$link) {
    die('Algo fue mal mientras se conectaba a MSSQL');
}
else {
    echo "Connecion : " . $link;
}
?>