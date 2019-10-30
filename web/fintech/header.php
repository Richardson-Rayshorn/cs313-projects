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
              
       
      <title>'; echo $title; echo ' | Fintech</title>
    </head>
    <body>
  <header>
    <nav>
      <div class="nav-wrapper white">
        <a href="#!" class="brand-logo left">FundMine</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
              <div class="input-field">
                <input id="search" type="search" onchange="submit()" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
          </li>
          <li><a href="./signup">Signup</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container">
    ';