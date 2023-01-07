<?php

class RifaController extends SorteoController{

  function __construct()
  {
    parent::__construct();
  }

  function crearRifa($title, $begin, $end) {
    $rifa = new Rifa($title, $begin, $end);

    parent::añadirValor($rifa);
  }

}
?>