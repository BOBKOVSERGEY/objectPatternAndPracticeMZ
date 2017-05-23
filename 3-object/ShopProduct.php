<?php

// создаем класс
class ShopProduct
{
    private $numPages;
    private $playLength;
    private $title;
    private $producerMainName;
    private $producerFirstName;
    private $price;
    private $discount = 0;


    // определяем метод конструктора
    public function __construct($title, $firstName, $mainName, $price, $numPages = 0, $playLength = 0)
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }

    public function setDiscount($num)
    {
        $this->discount = $num;
    }

    public function getPrice()
    {
        return ($this->price - $this->discount);
    }

    // добавляем метод к классу
    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = $this->title . " " . "($this->producerMainName, ";
        $base .= "$this->producerFirstName)";
        return $base;
    }
}

class CDProduct extends ShopProduct
{
    private $playLength;

    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price, $playLength);
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }



    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}

class BookProduct extends ShopProduct
{
    private $numPages;
    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price, $numPages);
        $this->numPages = $numPages;
    }

    public function getNumberOfPage()
    {
        return $this->numPages;
    }


    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр.";
        return $base;
    }
}

$product2 = new CDProduct("Пропавший без вести", "Группа", "ДДТ", 10.99, 60.33);
$product2->setDiscount(1);
