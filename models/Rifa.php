<?php
class Rifa {
  public $title;
  public $begin;
  public $end;

  function __construct($title, $begin, $end)
  {
    $this->title = $title;
    $this->begin = $begin;
    $this->end = $end;
  }
}
?>