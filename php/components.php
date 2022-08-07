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
                    <form action=\"\" method=\"POST\">
                    
                        <div class=\"image text-center\">
                            <img src=\"$product_img\" class=\"main-img\" alt=\"\">
                            <img src=\"$product_hov\" class=\"hover-img\" alt=\"\">

                            <div class=\"icons\">
                                <input type=\"number\" name=\"product_quantity\" min=\"1\" value=\"1\" id=\"\">
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
                    

                    <input type=\"hidden\" name=\"product_image\" value=\"$product_img\">
                    <input type=\"hidden\" name=\"product_name\" value=\"$product_name\">
                    <input type=\"hidden\" name=\"product_price\" value=\"$product_price\">
                </form>
            </div>
            

    ";

    echo $product;
}

function cart($cartimg, $cartname, $cartprice, $cartquantity, $cart_id)
{

    $cartelt = "

        <div class=\"box\">
                <a class=\"fas fa-times\" href=\"cart.php?remove=$cart_id\" onclick=\"confirm('Remove item from cart ?');\"></a>
                <img src=\"$cartimg\" alt=\"\">
                <div class=\"content\">
                    <h3>$cartname</h3>
                    <form action=\"\" method=\"POST\">
                        <div>
                            <span>quantity: </span>
                            <input type=\"number\" name=\"cart_quantity\" value=\"$cartquantity\" id=\"\">
                        </div>
                        <div class = \"cart-foot\">
                            <input type=\"hidden\" name=\"cart_id\" value=\"$cart_id\" id=\"\">
                            <button type=\"submit\" name=\"update_cart\" class=\"update-btn\" id=\"\">update</button>
                        </div>
                    </form>
                    <div class=\"price\">$cartprice fcfa</div>

            
                </div>
            </div>

    ";

    echo $cartelt;
}
