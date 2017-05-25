<?php

require_once __DIR__ . '/ShopProduct.php';

abstract class ShopProductWrite
{
    public $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();

}



