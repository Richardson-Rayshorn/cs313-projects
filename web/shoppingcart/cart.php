<?php
session_start();

$count_session = count($_SESSION["cart"]);

echo '
        <div class="row">
            <div class="col s12 m12 l12">
                <h3>Shopping Cart</h3>
            </diV>
            <div class="col s12 m4 l4">';
for ($i = 0; $i < $count_session; $i++)
{
    foreach ($_SESSION["cart"][$i] as $key => $value)
    {
                echo $key;
        echo '</div>
            <div class="col s12 m4 l4">';
                echo $value;
    }
}

echo '</div>
        </div>';


