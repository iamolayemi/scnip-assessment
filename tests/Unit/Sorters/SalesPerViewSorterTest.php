<?php

use Iamolayemi\ScnipAssessment\Catalog;
use Iamolayemi\ScnipAssessment\Sorters\SalesPerViewSorter;

it('sorts an array of products by sales per view', function () {
    $products = [
        [
            'id' => 1,
            'name' => 'Alabaster Table',
            'sales_count' => 32,
            'views_count' => 730,
        ],
        [
            'id' => 2,
            'name' => 'Zebra Table',
            'sales_count' => 301,
            'views_count' => 3279,
        ],
        [
            'id' => 3,
            'name' => 'Coffee Table',
            'sales_count' => 1048,
            'views_count' => 20123,
        ]
    ];

    $sortedProducts = [
        [
            'id' => 1,
            'name' => 'Alabaster Table',
            'sales_count' => 32,
            'views_count' => 730, // sales per view: 32/730 = 0.044
        ],
        [
            'id' => 3,
            'name' => 'Coffee Table',
            'sales_count' => 1048,
            'views_count' => 20123, // sales per view: 1048/20123 = 0.052
        ],
        [
            'id' => 2,
            'name' => 'Zebra Table',
            'sales_count' => 301,
            'views_count' => 3279,  // sales per view: 301/3279 = 0.092
        ],
    ];


    $salesPerViewSorter = new SalesPerViewSorter();
    $catalog = new Catalog($products);
    $result = $catalog->getProducts($salesPerViewSorter);

    expect($result)->not()->toBe($products)
        ->and($result)->toBe($sortedProducts);
});
