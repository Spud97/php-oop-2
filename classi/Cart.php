<?php

class Cart {
    private $products = [];

    public function add($product) {
        $this->product [] = $product;
    }

    public function remove($product) {

    }

    public function getTotal($product) {

    }

    public function getProducts($product) {
        return $this->prducts;
    }
}