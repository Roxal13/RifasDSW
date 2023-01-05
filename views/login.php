<?php
include_once('includes/header.php');
?>
<form class="m-4" method="post">
  <div class="form-group">
    <label for="username">Nombre</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
<?php
include_once('includes/footer.php');
?>