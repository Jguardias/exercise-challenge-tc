
<?php

include_once('db_datos.php');
include_once('db_class_meekro.php');

DB::$user = $datos['user'];
DB::$password = $datos['pass'];
DB::$dbName = $datos['db'];
DB::$host = $datos['host'];
DB::$encoding = 'utf8mb4';

//  test connection
// try {

//     $resultado = DB::query("SELECT 1");
//     echo "connection successful ";
// } catch (MeekroDBException $e) {
//     echo "Error connection: " . $e->getMessage();
// }
?>