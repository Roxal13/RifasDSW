<?php
include_once("models/Sorteo.php");

class SorteoController {
  public $sorteos;

  function __construct()
  {
    $sorteos = [];
  }

  function principal() {
    require_once('views/principal.php');
  }

  function verLista() {
    $sorteos = $this->sorteos;
    require_once('views/lista.php');
  }

}
?>