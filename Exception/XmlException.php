<?php
class XmlException extends Exception
{
  private $error;

  public function __construct(LibXMLError $error)
  {
    $shortfile = basename($error->file);
    $msg = "[{$shortfile}, строка {$error->line}, ";
    $msg .= "колонка {$error->column}] {$error->message}";
    $this->error = $error;
    parent::__construct($msg, $error->code);
  }

  public function getLibXmlError()
  {
    return $this->error;
  }
}

class FileException extends Exception
{

}

class ConfException extends Exception
{

}