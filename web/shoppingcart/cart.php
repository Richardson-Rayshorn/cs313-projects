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
                        <td><h4>Product Name</h4></td>
                        <td><h4>Price</h4></td>
                        <td><h4>Quantity</h4></td>
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

echo '
<div class="row">
    <div class="col s12 m4 l4">
        <a href="#" class="btn waves-effect darken-text-2" onClick="browse()">Add More</a> 
    </div>
    <div class="col s12 m4 l4">
        <a href="#" class="btn waves-effect darken-text-2" onClick="order()">Order</a> 
    </div>
</div>';


