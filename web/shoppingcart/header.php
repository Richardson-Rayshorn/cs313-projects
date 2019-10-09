<?php
    session_start();
    $menu_links = array('products', 'cart');
    $arr_length = count($menu_links);

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
              
      <title>Shopping Cart</title>
    </head>
    <body>
  <header>
    <nav id="navbar">
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">';
        for($i = 0; $i < $arr_length; $i++) {
          echo '<li><a class="anchorTag" id="'; 
          echo $menu_links[$i]; 
          echo '" onClick="navigation(this)">';
          echo $menu_links[$i]; 
          echo '</a></li>';
        }
        echo '</ul>
      </div>
    </nav>
  </header>
  <div class="container">
    ';