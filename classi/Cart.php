<?php

class Cart
{
    private $products = [];

    public function add(...$product)
    {
        array_push($this->products, ...$product);
    }

    public function remove($product)
    {
        array_
    }

    public function getTotal($discount = 0)
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }

    public function getProducts()
    {
        return $this->products;
    }
}
