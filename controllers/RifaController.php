<?php

class RifaController{
  public $rifas;

  function __construct()
  {
    $this->rifas = isset($_SESSION['rifas']) ? $_SESSION['rifas'] : [];
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

  function crearRifa($title, $begin, $end) {
    $rifa = new Rifa($title, $begin, $end);
    
    array_push($this->rifas, $rifa);
    $_SESSION['rifas'] = $this->rifas;

    header("location: /index.php");
  }

  function borrarRifa($id) {
    array_splice($this->rifas, $id, 1);
    $_SESSION['rifas'] = $this->rifas;

    header("location: /index.php/game");
  }

}
?>