<?php

class SorteoController{
  public $sorteo;

  function __construct()
  {
    $this->sorteo = isset($_SESSION['sorteo']) ? $_SESSION['sorteo'] : [];
  }

  function verLista() {
    $sorteo = $this->sorteo;

    require('views/lista.php');
  }

  function verCreacionRifa() {
    require('views/crearRifa.php');
  }

  function verCreacionDomino() {
    require('views/crearDomino.php');
  }

  function imprimir($id) {
    $selected = $this->sorteo[$id];

    require('views/imprimirSorteo.php');
  }

  function añadirValor($valor) {
    array_push($this->sorteo, $valor);

    $this->updateSorteo();

    header("location: /index.php");
  }

  function borrarValor($id) {
    array_splice($this->sorteo, $id, 1);
    $_SESSION['sorteo'] = $this->sorteo;

    header("location: /index.php/game");
  }

  function updateSorteo() {
    $_SESSION['sorteo'] = $this->sorteo;
  }
}
?>