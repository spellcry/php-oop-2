<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Position.php';

class PetFood extends Product{
    public $expirationDate;
    use Position;

    function __construct($param) {
        parent::__construct($param);
        $this->expirationDate = $param['expiration-date'];
        $scaffale = isset($param['scaffale']) ? $param['scaffale'] : null;
        $colonna = isset($param['colonna']) ? $param['colonna'] : null;
        $piano = isset($param['piano']) ? $param['piano'] : null;
        $this->setPosition($scaffale, $colonna, $piano);
    }
}