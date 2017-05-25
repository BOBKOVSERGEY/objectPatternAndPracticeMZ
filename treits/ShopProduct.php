<?php

trait PriceUtilites
{
  private $textRate = 17;

  public function calculateTax($price)
  {
    return (($this->textRate / 100) * $price);
  }
}

class ShopProduct
{
  use PriceUtilites;
}

abstract class Service
{

}

class UtilityService extends Service
{
  use PriceUtilites;
}

$p = new ShopProduct();
print $p->calculateTax(100);