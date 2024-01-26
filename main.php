<?php

require_once 'vendor/autoload.php';

use Iamolayemi\ScnipAssessment\Catalog;
use Iamolayemi\ScnipAssessment\Sorters\SalesPerViewSorter;
use Iamolayemi\ScnipAssessment\Sorters\PriceSorter;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutput;

$products = [
    [
        'id' => 1,
        'name' => 'Alabaster Table',
        'price' => 12.99,
        'created' => '2019-01-04',
        'sales_count' => 32,
        'views_count' => 730,
    ],
    [
        'id' => 2,
        'name' => 'Zebra Table',
        'price' => 44.49,
        'created' => '2012-01-04',
        'sales_count' => 301,
        'views_count' => 3279,
    ],
    [
        'id' => 3,
        'name' => 'Coffee Table',
        'price' => 10.00,
        'created' => '2014-05-28',
        'sales_count' => 1048,
        'views_count' => 20123,
    ]
];

$catalog = new Catalog($products);

$productPriceSorter = new PriceSorter();
$productsSortedByPrice = $catalog->getProducts($productPriceSorter);

$productSalesPerViewSorter = new SalesPerViewSorter();
$productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

displayProductTable('Products Without Sorting', $products);
displayProductTable('Products Sorted By Price', $productsSortedByPrice);
displayProductTable('Products Sorted By Sales Per View', $productsSortedBySalesPerView);

function displayProductTable(string $title, array $products): void
{
    $output = new ConsoleOutput();
    $table = new Table($output);

    $table->setHeaders(['ID', 'Name', 'Price', 'Sales Count', 'Views Count', 'Created At']);

    foreach ($products as $product) {
        $table->addRow([
            $product['id'],
            $product['name'],
            $product['price'],
            $product['sales_count'],
            $product['views_count'],
            $product['created'],
        ]);
    }

    $output->writeln("<info>$title</info>");
    $table->render();
    $output->writeln('');
}


