<?php
function getTotal($products_costs, $tax)
{
    $total = 0.00;

    $callback =
        function ($pricePerItem) use ($tax, &$total) { // after use we put the arguments what we need to use from the getTotal function

            $total += $pricePerItem * ($tax + 1.0);
        };

    array_walk($products_costs, $callback);
    return round($total, 2);
}


echo getTotal([1,6],3);


class Firs{

    protected $total = 0.00;
    public function getTotal($products_costs, $tax)
    {

        $callback =
            function ($pricePerItem) use ($tax) { // after use we put the arguments what we need to use from the getTotal function

                $this->total += $pricePerItem * ($tax + 1.0);
            };

        array_walk($products_costs, $callback);
        return round($this->total, 2);
    }
}

echo (new Firs())->getTotal([1,7],3);