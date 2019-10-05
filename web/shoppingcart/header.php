<?php
    $menu_links = array('about', 'assignments');
    $arr_length = count($menu_links);

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="./styles/index.css">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              
      <title>Personal Homepage</title>
    </head>
    <body>
  <header>
    <nav id="navbar">
      <img src="./images/close-512.png" alt="Close" id="close-menu">
      <ul id="header-nav">';
      for($i = 0; $i < $arr_length; $i++) {
        echo '<li><a class="anchorTag" id="'; 
        echo $menu_links[$i]; 
        echo '" onClick="navigation(this)">';
        echo $menu_links[$i]; 
        echo '</a></li>';
      }
      echo '</ul>
    </nav>
  </header>
  <div class="container">
    <span class="hamburger-icon" id="hamburger"><img src="./images/hamburger_menu_9163.png" alt="Menu"></span>
    ';