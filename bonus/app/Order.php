<?php

include_once __DIR__ . '/Cart.php';

class Order extends Cart {
    protected $totalCost;
    protected $totalVolume;
    protected $shippingCost;

    public function __construct($products) {
        parent::__construct($products);
        $this->setTotalCost();
        $this->setTotalVolume();
        $this->setShippingCost();
    }

    public function setTotalCost() {
        $total = 0;
        foreach ( $this->getProducts() as $product ) {
            $total += $product['product']->price * $product['quantity'];
        }
        $this->totalCost = $total;
    }

    public function getTotalCost() {
        return $this->totalCost;
    }

    public function setTotalVolume() {
        $total = 0;
        foreach ( $this->getProducts() as $product ) {
            $total += $product['product']->volume * $product['quantity'];
        }
        $this->totalVolume = $total;
    }

    public function getTotalVolume() {
        return $this->totalVolume;
    }

    public function setShippingCost() {
        $totalCost = $this->getTotalCost();
        $shippingCost = 0;
        if ( $totalCost > 200 )
        $shippingCost = 0;
        else {
            $totalVolume = $this->getTotalVolume();
            if ( $totalVolume > 100 )
                $shippingCost = 50;
            if ( $totalVolume > 200 )
                $shippingCost = 80;
            if ( $totalVolume > 300 )
                $shippingCost = 120;
        }
        $this->shippingCost = $shippingCost;
    }

    public function getShippingCost() {
        return $this->shippingCost;
    }
}