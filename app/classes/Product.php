<?php


namespace App\classes;


class Product
{
    public $products;
    public function getAllProduct(){
        return [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'name' => 'Sony Xperia X2',
                'price' => 55600,
                'image' => '1.png',
                'description' => 'Sony Xperia X2 Description It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal'
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'brand_id' => 3,
                'name' => 'New Hatil Phone',
                'price' => 25600,
                'image' => '2.png',
                'description' => 'New Hatil Phone Description It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal'
            ],
            2 => [
                'id' => 3,
                'category_id' => 3,
                'brand_id' => 3,
                'name' => 'New Party Dress',
                'price' => 3690,
                'image' => '3.png',
                'description' => 'New Party Dress Description It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal'
            ],
            3 => [
                'id' => 3,
                'category_id' => 3,
                'brand_id' => 2,
                'name' => 'New soft Shoe',
                'price' => 4200,
                'image' => '4.png',
                'description' => 'New Soft Shoe Description It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal'
            ],
            4 => [
                'id' => 4,
                'category_id' => 2,
                'brand_id' => 4,
                'name' => 'New Wallet',
                'price' => 3690,
                'image' => '3.png',
                'description' => 'New Wallet Description It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal'
            ],
            5 => [
                'id' => 6,
                'category_id' => 4,
                'brand_id' => 3,
                'name' => 'New Bed',
                'price' => 10230,
                'image' => '5.png',
                'description' => 'New Bed Description It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal'
            ],
            6 => [
                'id' => 7,
                'category_id' => 4,
                'brand_id' => 3,
                'name' => 'New Sofa Set',
                'price' => 38500,
                'image' => '6.png',
                'description' => 'New Sofa Set Description It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal'
            ],
        ];
    }

    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){
            if($product['id'] == $id){
                return $product;
            }
        }
    }
}