<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Position.php';

class Toy extends Product{
    public $type;
    public $color;
    use Position;

    function __construct($param) {
        parent::__construct($param);
        $this->type = $param['type'];
        $this->color = $param['color'];
        $scaffale = isset($param['scaffale']) ? $param['scaffale'] : null;
        $colonna = isset($param['colonna']) ? $param['colonna'] : null;
        $piano = isset($param['piano']) ? $param['piano'] : null;
        $this->setPosition($scaffale, $colonna, $piano);
    }
}