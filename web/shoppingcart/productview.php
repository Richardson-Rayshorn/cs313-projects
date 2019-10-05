<?php include 'productlist.php'; 
    $ids = $_REQUEST["q"];
    $id_int = (int)$ids;

    $num = count($products);
    $numinside = count($products, COUNT_RECURSIVE);
    $numval = $numinside - $num;
    $numres = $numval / $num;

    echo '
    <div class="row">
        <div class="col s12 m12 l8">
            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect white grey-text darken-text-2">Add to Cart</a>
                </div>
                <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <h4>Product Name</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id 
            est laborum.</p>
            <span class="row">
                <p class="col s6 m6 l6">Price : $0.00</p>
                <p class="col s6 m6 l6">Quantity : 0 </p>
            </span>
        </div>
    </div>';
