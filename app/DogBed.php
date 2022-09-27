<?php

include_once __DIR__ . '/Product.php';

class DogBed extends Product{
    public $length;
    public $depth;
    public $color;
    function __construct($param) {
        parent::__construct($param);
        $this->length = $param['length'];
        $this->depth = $param['depth'];
        $this->color = $param['color'];
    }
}