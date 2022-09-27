<?php

include_once __DIR__ . '/Product.php';

class Cart {
    public $products;

    public function __construct($products) {
        if ( count($products) > 0 ) {
            $filteredProducts = array_filter($products, function ($product) {
                return array_key_exists('product', $product) && array_key_exists('quantity', $product) && $product['product'] instanceof Product;
            });
            $this->products = $filteredProducts;
        } else {
            $this->products = [];
        }
    }
}