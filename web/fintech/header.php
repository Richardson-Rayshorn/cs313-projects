<?php
$link = htmlspecialchars("./business.php");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="./styles/index.css">
      <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <title>'; echo $title; echo ' | Fintech</title>
    </head>
    <body>
  <header>
      <div id="dropdown1" class="dropdown-content input-field">
        <input id="search" type="search" required>
        <i class="material-icons">close</i>
      </div>
    <nav>
      <div class="nav-wrapper white">
        <a href="#!" class="brand-logo left">FundMine</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">
            <i class="material-icons left">search</i></a></li>
          <li><a href="./signup">Signup</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container">
    ';