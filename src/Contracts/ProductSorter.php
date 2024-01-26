<?php

namespace Iamolayemi\ScnipAssessment\Contracts;

interface ProductSorter
{
    public function sort(array $products): array;
}
