<?php

class StaticExample
{
  static public $aNum = 0;
  static public function sayHello()
  {
    self::$aNum++;
    echo "Привет " . self::$aNum;
  }
}

StaticExample::sayHello();