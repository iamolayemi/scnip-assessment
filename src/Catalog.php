<?php

namespace Iamolayemi\ScnipAssessment;

use Iamolayemi\ScnipAssessment\Contracts\ProductSorter;

final class Catalog
{
    public function __construct(private readonly array $products) {}

    public function getProducts(ProductSorter $productSorter): array
    {
        return $productSorter->sort($this->products);
    }
}
