<?php

include_once __DIR__ . '/Cart.php';

class Order extends Cart {

    public function __construct($products) {
        parent::__construct($products);
    }

    public function getTotalCost() {
        $total = 0;
        foreach ( $this->products as $product ) {
            $total += $product['product']->price * $product['quantity'];
        }
        return $total;
    }
}