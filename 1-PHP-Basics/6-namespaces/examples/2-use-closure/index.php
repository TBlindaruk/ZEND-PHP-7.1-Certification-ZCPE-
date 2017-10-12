<?php
function getTotal($products_costs, $tax)
{
    $total = 0.00;

    $additional = 0;

    $callback =
        function ($pricePerItem) use ($tax, &$total,$additional) {

            $total += $pricePerItem * ($tax + 1.0) + $additional;
        };

    array_walk($products_costs, $callback);
    return round($total, 2);
}

echo getTotal([1,6],3);