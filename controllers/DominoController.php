<?php

class DominoController extends SorteoController{
  public $dominos;

  function __construct()
  {
    parent::__construct();
  }

  function verCreacionDomino() {
    require('views/crearRifa.php');
  }

  function crearDomino($title, $max) {
    $domino = new Domino($title, $max);
    
    parent::añadirValor($domino);
  }
}
?>