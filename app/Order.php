<?php

include_once __DIR__ . '/Cart.php';

class Order extends Cart {
    public $totalCost;

    public function __construct($products) {
        try {
            parent::__construct($products);
        } catch (Exception $e) {
            throw new Exception("Ordine non valido.");
        }
        $this->setTotalCost();
    }

    public function setTotalCost() {
        $total = 0;
        foreach ( $this->products as $product ) {
            $total += $product['product']->price * $product['quantity'];
        }
        $this->totalCost = $total;
    }
}