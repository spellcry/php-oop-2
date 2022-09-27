<?php

include_once __DIR__ . '/Product.php';

class Toy extends Product{
    public $type;
    public $color;
    function __construct($param) {
        parent::__construct($param);
        $this->type = $param['type'];
        $this->color = $param['color'];
    }
}