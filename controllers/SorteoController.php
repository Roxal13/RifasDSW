<?php

class SorteoController{
  public $sorteo;

  function __construct()
  {
    $this->rifas = isset($_SESSION['sorteo']) ? $_SESSION['sorteo'] : [];
  }

  function verLista() {
    $rifas = $this->rifas;

    require('views/lista.php');
  }

  function verCreacionRifa() {
    require('views/crearRifa.php');
  }

  function verRifa($id) {
    $rifa = $this->rifas[$id];

    require('views/verRifa.php');
  }
}
?>