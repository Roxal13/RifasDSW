<?php
include_once('includes/header.php');
?>
<main>
  <h1>Lista de Sorteos del usuario</h1>
  <ol class="list-group">
  <?php
  foreach($rifas as $rifa) {
  ?>
  <div class="card">
    <div class="card-body d-flex justify-content-between ml-2">
      <div>
      <li>
        <b><?=$rifa->title?></b>
        <br>
        Comienza en el número <?=$rifa->begin?> y acaba en el <?=$rifa->end?>
      </li>
      </div>
      <div class="relative-right">
        <a class="btn btn-danger" type="button" href="/index.php/game/delete/<?=array_search($rifa, $rifas)?>">Borrar</a>
        <a class="btn btn-success" type="button" href="/index.php/game/print/<?=array_search($rifa, $rifas)?>">Imprimir</a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
  </ol>
</main>
<?php
include_once('includes/footer.php');
?>