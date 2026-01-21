<?php
include_once '../config/db_init.php';

class Product
{

    public static function getlist()
    {
        $res = DB::query("SELECT * FROM productos WHERE estado = 1 ORDER BY id_producto DESC");
        return $res;
    }
}
