<?php
include_once('includes/header.php');
?>
<form class="m-4" method="post">
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-row">
    <div class="col">
      <label for="begin">Primer ticket: </label>
      <input type="number" class="form-control" id="begin" name="begin">
    </div>
    <div class="col">
      <label for="end">Último ticket: </label>
      <input type="number" class="form-control" id="end" name="end">
    </div>
  </div>
<button type="submit" class="btn btn-primary my-3">Crear</button>
</form>
<?php
include_once('includes/footer.php');
?>