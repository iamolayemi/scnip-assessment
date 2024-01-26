<?php


use Iamolayemi\ScnipAssessment\Catalog;
use Iamolayemi\ScnipAssessment\Contracts\ProductSorter;
use Mockery;

it('sorts an array of product by a sorter', function () {
    $products = [
        [
            'id' => 1,
            'name' => 'Zebra Table',
            'price' => 44.49,
        ],
        [
            'id' => 2,
            'name' => 'Alabaster Table',
            'price' => 12.99,
        ],
    ];

    $sortedProducts = [
        [
            'id' => 2,
            'name' => 'Alabaster Table',
            'price' => 12.99,
        ],
        [
            'id' => 1,
            'name' => 'Zebra Table',
            'price' => 44.49,
        ],
    ];

    $catalog = new Catalog($products);

    $sorter = Mockery::mock(ProductSorter::class);
    $sorter->shouldReceive('sort')->once()->with($products)->andReturn($sortedProducts);

    $result = $catalog->getProducts($sorter);

    expect($result)->toBe($sortedProducts);
});
