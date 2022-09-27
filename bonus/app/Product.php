<?php

class Product {
    public $name;
    public $price = 0;
    public $poster;
    public $description;
    public $weight = 0;
    public $volume = 0;
    public $brand;
    public $categories = [];

    function __construct($param) {
        $this->name = $param['name'];
        isset($param['price']) ? $this->price = $param['price'] : null;
        $this->poster = $param['poster'];
        $this->description = $param['description'];
        isset($param['weight']) ? $this->weight = $param['weight'] : null;
        isset($param['volume']) ? $this->volume = $param['volume'] : null;
        $this->brand = $param['brand'];
        isset($param['categories']) ? $this->categories = $param['categories'] : null;
    }

    public function addCategory($category) {
        array_push($this->categories, $category);
    }
}