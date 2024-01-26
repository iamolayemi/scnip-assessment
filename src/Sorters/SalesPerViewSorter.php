<?php

namespace Iamolayemi\ScnipAssessment\Sorters;

use Iamolayemi\ScnipAssessment\Contracts\ProductSorter;
use Illuminate\Support\Collection;

final class SalesPerViewSorter implements ProductSorter
{
    public function sort(array $products): array
    {
        $productsCollection = new Collection($products);

        return $productsCollection->sortBy(fn($product) => $product['sales_count'] / $product['views_count'])->values()->all();
    }
}
