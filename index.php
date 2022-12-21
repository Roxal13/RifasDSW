<?php
session_start();

require('controllers/SorteoController.php');
require('controllers/UserController.php');

$sController = new SorteoController();
$uController = new UserController();

if (isset( $_SERVER['PATH_INFO'])) {
  $partes = explode('/', $_SERVER['PATH_INFO']);
  if($partes[1] == "login"){
    $uController->verLogin();
  }else if($partes[1] == "lista")
    $sController->verLista();
}else{
  if(isset($_SESSION['user'])){
    
  }else{
    $sController->principal();
  }
}