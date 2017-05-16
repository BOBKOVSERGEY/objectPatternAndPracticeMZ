<?php

// создаем класс
class ShopProduct
{
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия Автора";
    public $producerFirstName = "Имя Автора";
    public $price = 0;

    // добавляем метод к классу
    public function getProducer()
    {
        return $this->producerFirstName  . " " . $this->producerMainName;
    }
}

// создаем экземляр объекта, создается объект типа ShopProduct
$product1 = new ShopProduct();


// меняем значение свойств
$product1->title = "Собачье сердце";
$product1->producerMainName = "Булгаков";
$product1->producerFirstName = "Михаил";
$product1->price = 5.99;

// обращение к свойствам объекта
//print "Автор: " . $product1->producerFirstName . ' ' . $product1->producerMainName;

// Обращение к методу

echo "Автор: " . $product1->getProducer();


$product2 = new ShopProduct();

echo '<pre>';
var_dump($product1);
var_dump($product2);