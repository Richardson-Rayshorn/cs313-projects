<?php 
session_start();
include 'productlist.php'; 

$data_id = 0;
$num = count($products);
$numinside = count($products, COUNT_RECURSIVE);
$numval = $numinside - $num;
$numres = $numval / $num;

    echo '
<div class="products row">';
    for($i = 0; $i < $num; $i++)
    {
        for($y = 0; $y < $numres;)
        {
            echo '<div class="col s12 m4 l4">
            <img src="../images/shopping-cart-images/';echo $products[$i][$y++]; 
            echo'" alt="product image" width="150" height="130"/>
            <div class="product-name">'; echo $products[$i][$y++];
            echo '</div>
            <div class="product-summary">'; echo $products[$i][$y++];
            echo '</div>
            <div class="price"> $'; echo $products[$i][$y++];
            echo '</div>
            <a class="see-product btn waves-effect darken-text-2" data-id="'; 
            echo $data_id;
            echo '"
             onClick="seeProduct(this)">See Product</a>
            </div>';
        }
        $data_id++;
    }
echo '
</div> ';