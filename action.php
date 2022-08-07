<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Category;



$category = new Category();
$categories = $category->getAllCategory();

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'detail'){
        $productId = $_GET['id'];
        $product = new Product();
        $singleProduct = $product->getProductById($productId);
        include 'pages/detail.php';
    }
}