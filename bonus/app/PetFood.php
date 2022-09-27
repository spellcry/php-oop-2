<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product{
    public $expirationDate;
    function __construct($param) {
        parent::__construct($param);
        $this->expirationDate = $param['expiration-date'];
    }
}