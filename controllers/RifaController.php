<?php

class RifaController{
  public $rifas;

  function __construct()
  {
    $this->rifas = isset($_SESSION['rifas']) ? $_SESSION['rifas'] : [];;
  }

  function verLista() {
    $rifas = $this->rifas;

    require('views/lista.php');
  }

  function verRifa() {
    require('views/raffle.php');
  }

  function crearRifa($title, $begin, $end) {
    $rifa = new Rifa($title, $begin, $end);
    
    array_push($this->rifas, $rifa);
    $_SESSION['rifas'] = $this->rifas;

    header("location: /index.php");
  }

}
?>