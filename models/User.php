<?php
class User {
  private $username;
  private $password;
  private $level;

  function __construct($username, $password, $level)
  {
    $this->username = $username;
    $this->password = $password;
    $this->level = $level;
  }

  function getUsername() {
    return $this->username;
  }

  function getPassword() {
    return $this->password;
  }

  function getLevel() {
    return $this->level;
  }
}
?>