<?php include 'productlist.php'; 

$data_id = 1;
$num = count($products);
$numinside = count($products, COUNT_RECURSIVE);
$numval = $numinside - $num;
$numres = $numval / $num;

// echo $num . "<span>total 2</span>";
    echo '
<div class="products">';
    for($i = 0; $i < $num; $i++)
    {
        for($y = 0; $y < $numres; $y++)
        {
            echo '<div>
            <img src="" alt="product image" />
            <div class="product-name">'; echo $product[$i][$y];
            echo '</div>
            <div class="product-summary">'; echo $product[$i][$y];
            echo '</div>
            <div class="price"> $'; echo $product[$i][$y];
            echo '</div>
            <button class="add-to-cart" data-id="'; 
            echo data_id;
            echo'">Add to Cart</button>
            </div>';
        }
    }
echo '
</div> ';