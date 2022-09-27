<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/Order.php';

$param = [
    'name' => 'Crocchette al manzo',
    'poster' => 'Poster del prodotto',
    'description' => 'Descrizione del prodotto',
    'brand' => 'PLATINUM NATURAL',
    'price' => 101.99,
    'expiration-date' => '29/01/2023'
];

$crocchetteM = new PetFood($param);

$param = [
    'name' => 'Crocchette al tacchino',
    'poster' => 'Poster del prodotto',
    'description' => 'Descrizione del prodotto',
    'brand' => 'Metropets',
    'price' => 89.99,
    'expiration-date' => '17/05/2024'
];

$crocchetteT = new PetFood($param);

$products = [
    [
        'product' => $crocchetteM,
        'quantity' => 3
    ],
    [
        'product' => $crocchetteT,
        'quantity' => 2
    ]
];

$order = new Order($products);

var_dump($order);

echo $order->getTotalCost();