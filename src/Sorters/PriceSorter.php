<?php

namespace Iamolayemi\ScnipAssessment\Sorters;

use Iamolayemi\ScnipAssessment\Contracts\ProductSorter;
use Illuminate\Support\Collection;

final class PriceSorter implements ProductSorter
{
    public function sort(array $products): array
    {
        $productsCollection = new Collection($products);

        return $productsCollection->sortBy('price')->toArray();
    }
}
