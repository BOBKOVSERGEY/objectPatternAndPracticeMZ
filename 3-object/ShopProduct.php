<?php

// создаем класс
class ShopProduct
{
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия Автора";
    public $producerFirstName = "Имя Автора";
    public $price = 0;

    // определяем метод конструктора
    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
    }

    // добавляем метод к классу
    public function getProducer()
    {
        return $this->producerFirstName  . " " . $this->producerMainName;
    }
}

// вызываем метод констракт
$product1 = new ShopProduct("Собачье сердце", "Булгаков", "Михаил", 5.99);


// обращение к свойствам объекта
//print "Автор: " . $product1->producerFirstName . ' ' . $product1->producerMainName;

// Обращение к методу
echo "Автор: " . $product1->getProducer();


//$product2 = new ShopProduct();

echo '<pre>';
var_dump($product1);
