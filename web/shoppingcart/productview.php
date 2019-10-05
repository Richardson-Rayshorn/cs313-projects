<button class="see-product" data-id="'; 
            echo $data_id;
            echo'" data-name="';
            echo $products[$i][1]; echo '"';
            echo '" data-price ="';
            echo $products[$i][3]; echo '"
             onClick="seeProduct(this)">See Product</button>
            </div>';