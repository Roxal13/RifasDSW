<?php
include_once('includes/header.php');
?>
<main class="my-4">
<h1>Gestión de Sorteos</h1>
<?php
 if(isset($user)){
?>
<p>Bienvenido <?php echo $user->getUsername()?></p>
<p>Tu nivel de acceso es: <?php echo $user->getLevel()?></p>
<?php
 }else {
?>
<p></p>Aún no se ha validado</p>
<?php
 }
?>
<?php
include_once('includes/footer.php');
?>