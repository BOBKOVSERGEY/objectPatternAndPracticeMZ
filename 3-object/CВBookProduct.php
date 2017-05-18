<?php

class CDProduct
{
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    // определяем метод конструктора
    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
        $this->playLength = $playLength;
    }

    // Получаем время диска
    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = $this->title . " " . "($this->producerMainName, ";
        $base .= "$this->producerFirstName)";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }

    // добавляем метод к классу
    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}

class BookProduct
{
    public $numPages;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    // определяем метод конструктора
    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
        $this->numPages = $numPages;
    }

    // Получаем кол-во страниц
    public function getNumberOfPage()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = $this->title . " " . "($this->producerMainName, ";
        $base .= "$this->producerFirstName)";
        $base .= ": {$this->numPages} стр.";
        return $base;
    }

    // добавляем метод к классу
    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}