<?php
session_start();

$count_session = count($_SESSION["cart"]);

echo '
        <div class="row">
            <div class="col s12 m12 l12">
                <h3>Shopping Cart</h3>
            </diV>
            <div class="col s12 m12 l12">
                <table>
                    <tr>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                    </tr>
                    ';
for ($i = 0; $i < $count_session; $i++)
{
                echo '<tr>';
    foreach ($_SESSION["cart"][$i] as $key => $value)
    {
                echo '<td>';
                  echo $value;
                echo '</td>';
    }
                echo '</tr>';
}

echo '
                </table>
            </div>
        </div>';

echo '<a href="#" class="btn waves-effect darken-text-2">Order</a> ';


