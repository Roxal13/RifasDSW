<?php
include_once("models/User.php");

class UserController {
  public $users;

  function __construct()
  {
    $this->users = [
      new User ("pepe", "1234", 1),
      new User ("maria", "1234", 2)
    ];
  }

  function verLogin() {
    require_once('views/login.php');
  }

  function login() {

  }
}
?>