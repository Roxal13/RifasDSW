<?php
include_once('includes/header.php');
?>
<main>
<h1>Tickets del sorteo</h1>
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));">
<?php 
for($i = $rifa->begin; $i<=$rifa->end; $i++) {
?>
  <div class="card text-center m-2">
    <div class="card-header">
      <?=$rifa->title?>
    </div>
    <div class="card-body">
      <p class="card-text"><?=$i?></p>
    </div>
  </div>
<?php 
}
?>
</div>
</main>
<?php
include_once('includes/footer.php');
?>