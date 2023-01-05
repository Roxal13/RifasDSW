<?php

require("models/User.php");
require('controllers/UserController.php');
require("models/Rifa.php");
require('controllers/RifaController.php');

session_start();

$rController = new RifaController();
$uController = new UserController();

if (isset( $_SERVER['PATH_INFO'])) {
  $partes = explode('/', $_SERVER['PATH_INFO']);
  if($partes[1] == "login" && isset($_POST['username']) && isset($_POST['password'])){
    $uController->login($_POST['username'], $_POST['password']);
  }else if($partes[1] == "login"){
    $uController->verLogin();
  }else if($partes[1] == "logout"){
    $uController->logout();
  }else if($partes[1] == "raffle" && isset($_POST['title']) && isset($_POST['begin']) && isset($_POST['end'])){
    $rController->crearRifa($_POST['title'], $_POST['begin'], $_POST['end']);
  }else if($partes[1] == "raffle") {
    $rController->verCreacionRifa();
  }else if(isset($partes[2]) && $partes[2] == "delete" && isset($partes[3])) {
    $rController->borrarRifa($partes[3]);
  }else if(isset($partes[2]) && $partes[2] == "print" && isset($partes[3])) {
    $rController->verRifa($partes[3]);
  } else if($partes[1] == "game")
    $rController->verLista();
}else{
  $uController->principal();
}