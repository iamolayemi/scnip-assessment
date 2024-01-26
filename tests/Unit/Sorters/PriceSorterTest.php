<?php

use Iamolayemi\ScnipAssessment\Catalog;
use Iamolayemi\ScnipAssessment\Sorters\PriceSorter;

it('sorts an array of products by price', function () {
    $products = [
        [
            'id' => 1,
            'name' => 'Alabaster Table',
            'price' => 12.99,
        ],
        [
            'id' => 2,
            'name' => 'Zebra Table',
            'price' => 44.49,
        ],
        [
            'id' => 3,
            'name' => 'Coffee Table',
            'price' => 10.00,
        ]
    ];

    $sortedProducts = [
        [
            'id' => 3,
            'name' => 'Coffee Table',
            'price' => 10.00,
        ],
        [
            'id' => 1,
            'name' => 'Alabaster Table',
            'price' => 12.99,
        ],
        [
            'id' => 2,
            'name' => 'Zebra Table',
            'price' => 44.49,
        ],
    ];


    $priceSorter = new PriceSorter();
    $catalog = new Catalog($products);
    $result = $catalog->getProducts($priceSorter);

    expect($result)->not()->toBe($products)
        ->and($result)->toBe($sortedProducts);
});
