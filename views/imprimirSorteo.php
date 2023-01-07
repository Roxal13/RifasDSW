<?php
include_once('includes/header.php');
?>
<main>
<h1>Tickets del sorteo</h1>
<?php
if($selected instanceof Rifa) {
?>
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));">
<?php
  for($i = $selected->begin; $i<=$selected->end; $i++) {
?>
  <div class="card text-center m-2">
    <div class="card-header">
      <?=$selected->title?>
    </div>
    <div class="card-body">
      <p class="card-text"><?=$i?></p>
    </div>
  </div>
<?php
  }
}else if($selected instanceof Domino) {
?>
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(10%, 1fr));">
<?php
  for($i = 1; $i<=$selected->max; $i++){
    for($y = $i; $y<=$selected->max; $y++) {
?>
  <div class="card text-center m-1">
    <div class="card-body">
      <?=$i?>
    </div>
    <hr style="width: 7px; margin: auto;">
    <div class="card-body text-white bg-dark" style="
        display: inline;
        -moz-transform: scale(-1, -1);
        -webkit-transform: scale(-1, -1);
        -o-transform: scale(-1, -1);
        -ms-transform: scale(-1, -1);
        transform: scale(-1, -1);">
      <?=$y?>
    </div>
  </div>
<?php 
    }
  }
?>
</div>
<?php
}
?>
</main>
<?php
include_once('includes/footer.php');
?>