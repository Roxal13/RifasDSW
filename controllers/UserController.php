<?php

class UserController{
  public $users;

  function __construct()
  {
    $this->users = [
      new User("pepe", "1234", 1),
      new User("maria", "1234", 2)
    ];
  }

  function verLogin() {
    require_once('views/login.php');
  }

  function searchUser($username, $password) {
    foreach($this->users as $user) {
      if($user->getUsername() == $username && $user->getPassword() == $password) {
        return $user;
      }
    }
  }

  function login($username, $password) {
    $user = $this->searchUser($username, $password);
    if(isset($user)){
      $_SESSION['user'] = $user;
      header("location: /index.php");
    }else{
      unset($_POST['username']);
      unset($_POST['password']);
      header("location: /index.php/login");
    }
  }

  function logout(){
    session_destroy();
    header ("location: /index.php");
  }

  function principal() {
    if(isset($_SESSION['user'])){
      $user = $_SESSION['user'];
    }
    include('views/principal.php');
  }
  
}
?>