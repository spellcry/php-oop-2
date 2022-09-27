<?php

include_once __DIR__ . '/Product.php';

class Cart {
    public $products;

    public function __construct($products) {
        count($products) > 0 ? $this->products = $products : null;
    }
}