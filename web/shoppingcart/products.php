<?php include 'productlist.php'; 

$data_id = 1;
$num = count($products);
$numinside = count($products, COUNT_RECURSIVE);
$numval = $numinside - $num;
$numres = $numval / $num;
echo $numres;
// echo $num . "<span>total 2</span>";
    echo '
<div class="products">';
    for($i = 0; $i < $num; $i++)
    {
        for($y = 0; $y < $numres;)
        {
            echo '<div>
            <img src="';echo $products[$i][$y++]; 
            echo'" alt="product image" />
            <div class="product-name">'; echo $products[$i][$y++];
            echo '</div>
            <div class="product-summary">'; echo $products[$i][$y++];
            echo '</div>
            <div class="price"> $'; echo $products[$i][$y++];
            echo '</div>
            <button class="add-to-cart" data-id="'; 
            echo data_id;
            echo'">Add to Cart</button>
            </div>';
        }
    }
echo '
</div> ';