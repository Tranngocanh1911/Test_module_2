<?php

namespace App\Controller;

use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function showAllProduct()
    {
        $products = $this->productModel->getAll();
        include_once 'app/View/Product/list.php';
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'app/View/Product/add-product.php';
        } else {
            $this->productModel->create($_REQUEST);
            header('location:index.php');
        }
    }

    public function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $product = $this->productModel->getById($id);
            include_once 'app/View/Product/update-product.php';
        } else {
            $this->productModel->update($_REQUEST);
            header('location:index.php');
        }
    }
    public function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->productModel->delete($id);
        header('location:index.php');
    }
    public function searchProduct()
    {
        $products = $this->productModel->search($_REQUEST);
        include_once 'app/View/Product/list.php';
    }
}