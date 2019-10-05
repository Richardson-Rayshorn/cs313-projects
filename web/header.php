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
      <title>Personal Homepage</title>
    </head>
    <body>
  <header>
    <nav id="navbar">
      <div class="nav-wrapper">
        <img src="./images/close-512.png" alt="Close" id="close-menu">
        <ul id="header-nav" class="right hide-on-med-and-down">';
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
    <span class="hamburger-icon" id="hamburger"><img src="./images/hamburger_menu_9163.png" alt="Menu"></span>
    ';