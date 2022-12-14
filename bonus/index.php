<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/Toy.php';
include_once __DIR__ . '/app/DogBed.php';
include_once __DIR__ . '/app/Order.php';
include_once __DIR__ . '/app/User.php';

$param = [
    'name' => 'Crocchette al manzo',
    'poster' => 'Poster del prodotto',
    'description' => 'Descrizione del prodotto',
    'brand' => 'PLATINUM NATURAL',
    'price' => 101.99,
    'expiration-date' => '29/01/2023',
    'volume' => 0.5,
    'scaffale' => 10,
    'colonna' => 2,
    'piano' => 4
];

$crocchetteM = new PetFood($param);

$param = [
    'name' => 'Crocchette al tacchino',
    'poster' => 'Poster del prodotto',
    'description' => 'Descrizione del prodotto',
    'brand' => 'Metropets',
    'price' => 89.99,
    'expiration-date' => '17/05/2024',
    'volume' => 0.7,
    'scaffale' => 4,
    'piano' => 1
];

$crocchetteT = new PetFood($param);

$param = [
    'name' => 'Pallina che lampeggia',
    'poster' => 'Poster del prodotto',
    'description' => 'Descrizione del prodotto',
    'brand' => 'Una marca a caso',
    'price' => 10.99,
    'type' => 'Pallina',
    'color' => 'Blue',
    'volume' => 0.1,
    'weight' => 0.5,
    'scaffale' => 1,
    'colonna' => 3
];

$pallina = new Toy($param);

$param = [
    'name' => 'Cuccia grande',
    'poster' => 'Poster del prodotto',
    'description' => 'Descrizione del prodotto',
    'brand' => 'Una marca a caso',
    'price' => 50.99,
    'length' => 100,
    'depth' => 60,
    'color' => 'Light Green',
    'volume' => 100.15,
    'scaffale' => 3,
    'colonna' => 2,
    'piano' => 10
];

$cuccia = new DogBed($param);

$products = [
    [
        'product' => $crocchetteM,
        'quantity' => 3
    ],
    [
        'product' => $crocchetteT,
        'quantity' => 2
    ],
    [
        'quantity' => 2
    ],
    [
        'product' => $pallina,
        'quantity' => 4
    ],
    [
        'product' => $pallina,
    ],
    [
        'product' => $cuccia,
        'quantity' => 2
    ],
    [
        'product' => 'Pippo',
        'quantity' => 2
    ]
];

$user = new User('Marco', 'Sangiorgi', 'example@email.com');

// $emptyCart = [];

try {
    $order = new Order($products, $user);
} catch (Exception $e) {
    if ( $e->getMessage() == 'Ordine non valido.' )
        $order = null;
}

echo "Ordine:";
var_dump($order);

if ( $order != null ) {
    echo "Prodotti:";
    foreach ( $order->getProducts() as $product ) {
        var_dump($product);
    }
    echo "Costo Totale: " . $order->getTotalCost() . "<br>";
    echo "Volume Totale: " . $order->getTotalVolume() . "<br>";
    echo "Costi di spedizione: " . $order->getShippingCost();
} else {
    echo "ERRORE!! Ordine non valido. Il carrello ?? vuoto.";
}