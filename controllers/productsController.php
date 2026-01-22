<?php
require_once '../models/productsModel.php';

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        switch ($_POST['opcn']) {
            case 'listProducts':
                $res = Product::getlist();
                echo json_encode($res);
                break;
            case 'getProductById':
                $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
                $res = Product::getById($id);
                echo json_encode($res[0]);
                break;
            case 'updateProduct':
                $id = isset($_POST['id_producto']) ? intval($_POST['id_producto']) : 0;
                $res = Product::updateProduct($id, $_POST);
                echo json_encode($res);
                break;
            case 'deleteProduct':
                $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
                $res = Product::deleteProduct($id);
                echo json_encode($res);
                break;
            case 'addProduct':
                $res = Product::addProduct($_POST);
                echo json_encode($res);
                break;
        }
        break;
}
