<?php
include_once '../config/db_init.php';

class Product
{

    public static function getlist()
    {
        $res = DB::query("SELECT * FROM productos WHERE estado = 1 ORDER BY id_producto DESC");
        return $res;
    }

    public static function getById($id)
    {
        $res = DB::query("SELECT * FROM productos WHERE id_producto = %d", $id);
        return $res;
    }

    public static function updateProduct($id, $data)
    {
        $dataNew = [
            'nombre_producto' => $data['nombre_producto'],
            'referencia'      => $data['referencia'],
            'precio'          => $data['precio'],
            'peso'            => $data['peso'],
            'categoria'       => $data['categoria'],
            'stock'           => $data['stock']
        ];
        $res = DB::update('productos', $dataNew, "id_producto=%d", $id);
        return $res;
    }

    public static function deleteProduct($id)
    {
        $data = ['estado' => 0];
        $res = DB::update('productos', $data, "id_producto=%d", $id);
        return $res;
    }

    public static function addProduct($data)
    {
        $dataNew = [
            'nombre_producto' => $data['nombre_producto'],
            'referencia'      => $data['referencia'],
            'precio'          => $data['precio'],
            'peso'            => $data['peso'],
            'categoria'       => $data['categoria'],
            'stock'           => $data['stock'],
            'estado'          => 1,
            'fecha_ultima_venta' => date('Y-m-d H:i:s')
        ];
        $res = DB::insert('productos', $dataNew);
        return $res;
    }
}
