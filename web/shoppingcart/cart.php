<?php

session_id("productview");
session_start();

$count_products = count($_SESSION);

session_id("cartsession");
session_start();
$_SESSION[$a] = $count_products;
// $cart = [];

// for ($i = 0; $i < $count_products; $i++)
// {

// }

