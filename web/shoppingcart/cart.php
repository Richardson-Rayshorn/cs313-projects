<?php
session_start();

foreach ($_SESSION["cart"] as $key => $value)
    {
        echo $key . " " . $value;
    }

