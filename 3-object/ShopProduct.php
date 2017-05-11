<?php

// создаем класс
class ShopProduct
{
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия Автора";
    public $producerFirstName = "Имя Автора";
    public $price = 0;
}

// создаем экземляр объекта, создается объект типа ShopProduct
$product1 = new ShopProduct();

// обращение к свойству объекта
print $product1->title;

// меняем значение свойства
$product1->title = "Собачье сердце";


$product2 = new ShopProduct();

echo '<pre>';
var_dump($product1);
var_dump($product2);