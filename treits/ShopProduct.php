<?php

trait PriceUtilites
{
  private $textRate = 17;

  public function calculateTax($price)
  {
    return (($this->textRate / 100) * $price);
  }
}

trait IdentityTrait
{
  public function generateId()
  {
    return uniqid();
  }
}

class ShopProduct
{
  use PriceUtilites, IdentityTrait;
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
echo $p->generateId();