<?php
require_once '../models/productsModel.php';

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        switch ($_POST['opcn']) {
            case 'listProducts':
                $respuesta = Product::getlist();
                echo json_encode($respuesta);
                break;
        }
        break;
}
