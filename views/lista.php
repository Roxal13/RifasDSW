<?php
include_once('includes/header.php');
?>
<main class="my-4">
  <h1>Lista de Sorteos del usuario</h1>
  <ol>
  <?php
  foreach($rifas as $rifa) {
  ?>
  <div class="card">
    <div class="card-body">
      <li>
        <b><?=$rifa->title?></b>
        <div class="float-right mt-2">
          <a class="btn btn-danger" type="button" href="/index.php/game?borrar">Borrar</a>
          <a class="btn btn-success" type="button" href="/index.php/game?imprimir">Imprimir</a>
        </div>
      </li>
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