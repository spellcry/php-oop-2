<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Position.php';

class DogBed extends Product{
    public $length;
    public $depth;
    public $color;
    use Position;
    function __construct($param) {
        parent::__construct($param);
        $this->length = $param['length'];
        $this->depth = $param['depth'];
        $this->color = $param['color'];
        $scaffale = isset($param['scaffale']) ? $param['scaffale'] : null;
        $colonna = isset($param['colonna']) ? $param['colonna'] : null;
        $piano = isset($param['piano']) ? $param['piano'] : null;
        $this->setPosition($scaffale, $colonna, $piano);
    }
}