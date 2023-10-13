<?php

function shop_item_component($product_name, $product_price, $product_image, $product_description, $product_id){
 $element = "

    <div class=\"card-container-column\">
                <form action=\"shop.php\" method=\"post\">
                    <div class=\"card-item\">
                        <div class=\"image\">
                            <img src=\"$product_image\" alt=\"Image\" class=\"card-image\">
                        </div>
                        <div class=\"popup-overlay\">
                          <div class=\"popup-content\">
                            <img src=\"\" alt=\"\">
                            <button class=\"close-popup\">Close</button>
                          </div>
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$product_name</h5>

                            <p class=\"card-text\">
                                $product_description
                            </p>
                            <h5>
                                <span class=\"price\">Price: $product_price RON</span>
                            </h5>

                            <button type=\"submit\" class=\"item-submit-btn\" name=\"add\">Add to Cart</button>
                             <input type='hidden' name='product_id' value='$product_id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;

}
?>


