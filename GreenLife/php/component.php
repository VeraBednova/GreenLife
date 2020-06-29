<?php

function component($productname, $description, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-4 \">
                <form action=\"catalog.php\" method=\"post\">
                    <div class=\"card shadow \">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>

                            <p class=\"card-text\">$description</p>

                            <h5><span class=\"price\">$productprice ₽</span></h5>

                            <button type=\"submit\" class=\"btn btn-light my-3\" name=\"add\">Добавить<i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded my-4 mb-50\">
                        <div class=\"row bg-white \">
                            <div class=\"col-md-3 pl-0 \">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Товар в корзине</small>
                                <h5 class=\"pt-2\">$productprice ₽</h5>
                                <button type=\"submit\" class=\"btn btn-outline-secondary\" name=\"remove\">Удалить</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

















