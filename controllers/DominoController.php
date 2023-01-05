<?php

class DominoController{
  public $dominos;

  function __construct()
  {
    $this->rifas = isset($_SESSION['rifas']) ? $_SESSION['rifas'] : [];;
  }

  function verCreacionDomino() {
    require('views/crearRifa.php');
  }

  function verDomino($id) {
    $rifa = $this->rifas[$id];

    require('views/verRifa.php');
  }

  function crearDomino($title, $max) {
    $domino = new Domino($title, $max);
    
    array_push($this->dominos, $domino);
    $_SESSION['rifas'] = $this->rifas;

    header("location: /index.php");
  }

  function borrarDomino($id) {
    array_splice($this->rifas, $id, 1);
    $_SESSION['rifas'] = $this->rifas;

    header("location: /index.php/game");
  }

}
?>