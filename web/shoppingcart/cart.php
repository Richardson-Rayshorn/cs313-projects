<?php
session_start();

$count_session = count($_SESSION["cart"]);
for ($i = 0; $i < $count_session; $i++)
{
    foreach ($_SESSION["cart"][$i] as $key => $value)
    {
        echo $i;
        echo $_SESSION['counter'];
        echo $count_session;
        echo $value . "<br/>";
    }
}


