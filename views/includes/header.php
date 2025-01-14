<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      main {
        margin-left: 60px;
        margin-right: 60px;
      }
    </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-2" href="/">Sorteos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php
      if(isset($_SESSION['user'])){
    ?>
      <li class="nav-item active">
        <a class="nav-link" href="/index.php/game">Lista</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Crear
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/index.php/raffle">Rifas</a>
          <?php
          if($_SESSION['user']->getLevel() == 2) {
          ?>
          <a class="dropdown-item" href="/index.php/domino">Dominó</a>
          <?php
          }
          ?>
      </li>
    <?php
      }
    ?>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
    <?php
      if(isset($_SESSION['user'])){
    ?>
      <p class="text-muted mr-4 my-2"><?php echo $_SESSION['user']->getUsername()?></p>
      <a class="btn btn-outline-danger my-2 my-sm-0 ms-auto me-2" type="button" href="/index.php/logout">Logout</a>
    <?php
      }else {
    ?>
      <a class="btn btn-outline-primary my-2 my-sm-0 ms-auto me-2" type="button" href="/index.php/login">Login</button></a>
    <?php
      }
    ?>
    </form>
  </div>
</nav>
