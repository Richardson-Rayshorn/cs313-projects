<?php

session_id("productview");
session_start();

$count_products = count($_SESSION);
echo $count_products;
// $cart = [];

// for ($i = 0; $i < $count_products; $i++)
// {

// }

