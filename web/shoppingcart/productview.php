<?php 
    session_start();
    include 'productlist.php'; 
    $ids = $_REQUEST["q"];
    $id_int = (int)$ids;
    $num = count($products);
    $numinside = count($products, COUNT_RECURSIVE);
    $numval = $numinside - $num;
    $numres = $numval / $num;

    $_SESSION["cart"][] = array($_REQUEST["prodname"],$_REQUEST["price"],$_REQUEST["quantity"]);

     for($i = 0; $i < $num; $i++)
        {
            if ($id_int == $i)
            {
                echo '
                <div class="row productviewpage">
                    <div class="col s12 m12 l8">
                        <div class="carousel carousel-slider center">
                            <div class="carousel-fixed-item center">
                                <a class="btn waves-effect darken-text-2" onClick="addCart()">Add to Cart</a>
                            </div>
                        <a class="carousel-item" href="#one!">
                        ';
                    for ($y = 0; $y < $numres;)
                    {
                        echo '<img src="../images/shopping-cart-images/';
                        echo $products[$i][$y++]; echo '">
                        </a>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                                <h4 id="productname">'; 
                                echo $products[$i][$y++]; 
                                echo '</h4>
                            <p>';
                            echo $products[$i][$y++];
                            echo '</p>
                            <span class="row">
                                <p class="col s6 m6 l6">Price : $<span id="price">';
                                echo $products[$i][$y++];
    
                    }
                                echo' </span></p>
                                <p class="col s6 m6 l6">Quantity : <input type="number" id="quantity" value="1" min="1" max="25"></p>
                            </span>
                    </div>
                </div>';
            break;
            }
            
        }
