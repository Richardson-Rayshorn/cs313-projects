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
            <img src="../images/shopping-cart-images/';echo $products[$i][$y++]; 
            echo'" alt="product image" width="150" height="130"/>
            <div class="product-name">'; echo $products[$i][$y++];
            echo '</div>
            <div class="product-summary">'; echo $products[$i][$y++];
            echo '</div>
            <div class="price"> $'; echo $products[$i][$y++];
            echo '</div>
            <button class="see-product" data-id="'; 
            echo $data_id;
            echo'" data-name="';
            echo $products[$i][1]; echo '"';
            echo '" data-price ="';
            echo $products[$i][3]; echo '"
             onClick="seeProduct(this)">See Product</button>
            </div>';
        }
        $data_id++;
    }
echo '
</div> ';