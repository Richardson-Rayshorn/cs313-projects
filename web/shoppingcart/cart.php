<?php

foreach ($_SESSION["cart"] as $key => $value)
    {
        echo $key . " " . $value;
    }

