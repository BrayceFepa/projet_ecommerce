<?php

function categories($categname, $categimg)
{

    $category = "
    
        <a href=\"#\" class=\"box\">
                <img src=\"$categimg\" alt=\"\">
                <h3>$categname</h3>
            </a>

    ";

    echo $category;
}


function products($product_name, $product_price, $product_img, $product_hov)
{

    $product = "
            
                <div class=\"box col-lg-4 col-sm-6 mx-3\">
                    <div class=\"image text-center\">
                        <img src=\"$product_img\" class=\"main-img\" alt=\"\">
                        <img src=\"$product_hov\" class=\"hover-img\" alt=\"\">

                        <div class=\"icons\">
                            <button type=\"submit\" name=\"add\" class=\"btn btn-primary\">Add to cart <i class=\"fas fa-shopping-cart\"></i></button>
                        </div>

                        <div class=\"content\">
                            <h3 class=\"card-title mt-3\">$product_name</h3>
                            <div class=\"price\">$product_price FCFA </div>
                            <div class=\"stars mt-4\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half-alt\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            

    ";

    echo $product;
}
