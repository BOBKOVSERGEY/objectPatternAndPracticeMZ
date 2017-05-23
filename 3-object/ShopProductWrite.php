<?php

require_once __DIR__ . '/ShopProduct.php';

class ShopProductWrite
{
    public $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = '';
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title}: ";
            $str .= $shopProduct->getProducer;
            $str .= $shopProduct->getPrce;
        }
        print $str;
    }
}

$write = new ShopProductWrite();

var_dump($write);

echo $write->write();

