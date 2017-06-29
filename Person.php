<?php
class Person
{
  private $name;
  private $age;
  private $id;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function __clone()
  {
    $this->id = 0;
  }

  public function __destruct()
  {
    if (!empty($this->id)) {
      echo 'Сохранение объекта Person';
    } else {
      echo 'Пусто';
    }
  }
}

$person = new Person("Иван", 44);
$person->setId(343);

unset($person);