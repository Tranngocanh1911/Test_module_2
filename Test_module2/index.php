<?php
require __DIR__. '/vendor/autoload.php';
use App\Controller;
$dbConnect = new \App\Model\DBConnect();
$dbConnect->connect();
$controller = new Controller\ProductController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
include_once 'app/View/Layout/header.php';
try {
    switch ($page){
        case 'product-list':
            $controller->showAllProduct();
            break;
        case 'add-product':
            $controller->addProduct();
            break;
        case 'delete-product':
            $controller->deleteProduct();
            break;
        case 'update-product':
            $controller->updateProduct();
            break;
        case 'search-name':
            $controller->searchProduct();
            break;
        default:
            $controller->showAllProduct();
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
include_once 'app/View/Layout/footer.php';