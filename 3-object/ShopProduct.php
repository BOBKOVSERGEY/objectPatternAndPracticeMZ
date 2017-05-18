<?php

// создаем класс
class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

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
    public $playLength;

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
    public $numPages;
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
echo date('H:i:s') . '<br>';
echo "Исполнитель: {$product2->getSummaryLine()} <br>";
echo date('H:i:s') . '<br>';