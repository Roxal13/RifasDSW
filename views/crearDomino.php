<?php
include_once('includes/header.php');
?>
<form class="m-4" method="post">
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="max">Número más alto de la ficha: </label>
    <input type="number" class="form-control" id="max" name="max">
  </div>
<button type="submit" class="btn btn-primary my-3">Crear</button>
</form>
<?php
include_once('includes/footer.php');
?>