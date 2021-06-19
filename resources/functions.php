<?php

//helper function


function set_message($msg){

if(!empty($msg)){

$_SESSION['message'] = $msg;

} else {

    $msg = "";
}

}

function display_msg(){

if(isset($_SESSION['message'])) {

    echo $_SESSION['message'];
    unset($_SESSION['message']);
}


}






function redirect($location){

header("Location: $location");

}

function query($sql){

    global $connection;

return mysqli_query($connection, $sql);

}

function confirm($result){

    global $connection;

    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

}


function escape_string($string) {
global $connection;

return mysqli_escape_string($connection, $string);

}


function  fetch_array($result){

return mysqli_fetch_array($result);

}





/*****************************Front end functions **********************/

// get products


function get_products(){

$query = query("SELECT * FROM products");

confirm($query);

while($row = fetch_array($query)){


$product = <<<DELIMETER
<div class="product">
        <div class="product-thumb">
            <a href="product.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
        </div>
        <h4><a href="product.php?id={$row['product_id']}">{$row['product_title']} </a></h4>
        <p></p>
        <div class="price-rating">
        <p class="price">&#36;{$row['product_price']}</p>
        <ul class="rating">
            <li class="fa fa-star"></li>
            <li class="fa fa-star"></li>
            <li class="fa fa-star"></li>
            <li class="fa fa-star"></li>
            <li class="fa fa-star"></li>
        </ul>
        <div class="clearfix"></div>
        </div>
        <span class="sperator"></span>
        <a href="shopping-cart.php" class="ad-to-cart"><i class="fa fa-shopping-cart" style="color:red"></i>Buy Now</a>
        <a href="shopping-cart.php?id={$row['product_id']}" class="ad-to-cart"><i class="fa fa-shopping-cart"></i>add to cart</a>
    </div>
DELIMETER;

echo $product;

}

}


function get_categories(){

    $query = query("SELECT * FROM categories");
   

    confirm($query);
    
    while($row = fetch_array($query)) {

$categories_link = <<<DELIMETER

<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_title']}</a></li>


DELIMETER;

echo $categories_link;
}


}



function get_category(){

    $query = query("SELECT * FROM categories WHERE cat_id = " . escape_string($_GET['id']) . "  ");
   

    confirm($query);
    
    while($row = fetch_array($query)) {

$category = <<<DELIMETER
<h2 class="bordered light">{$row['cat_title']}<span>Products</span></h2>


DELIMETER;

echo $category;
}

}



function get_products_cat_page(){

    $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . "  ");
    
    confirm($query);
    
    while($row = fetch_array($query)){
    
    
    $product = <<<DELIMETER
    <div class="product">
            <div class="product-thumb">
                <a href="category.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
            </div>
            <h4><a href="product.php?id={$row['product_id']}">{$row['product_title']} </a></h4>
            <p></p>
            <div class="price-rating">
            <p class="price">&#36;{$row['product_price']}</p>
            <ul class="rating">
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <span class="sperator"></span>
            <a href="shopping-cart.php" class="ad-to-cart"><i class="fa fa-shopping-cart" style="color:red"></i>Buy Now</a>
            <a href="shopping-cart.php?id={$row['product_id']}" class="ad-to-cart"><i class="fa fa-shopping-cart"></i>add to cart</a>
        </div>
    DELIMETER;
    
    echo $product;
    
    }
    
    }


    



    function get_products_in_shop_page(){

        $query = query("SELECT * FROM products");
        
        confirm($query);
        
        while($row = fetch_array($query)){
        
        
        $product = <<<DELIMETER
        <div class="product">
                <div class="product-thumb">
                    <a href="category.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                </div>
                <h4><a href="product.php?id={$row['product_id']}">{$row['product_title']} </a></h4>
                <p></p>
                <div class="price-rating">
                <p class="price">&#36;{$row['product_price']}</p>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="clearfix"></div>
                </div>
                <span class="sperator"></span>
                <a href="shopping-cart.php" class="ad-to-cart"><i class="fa fa-shopping-cart" style="color:red"></i>Buy Now</a>
                <a href="shopping-cart.php?id={$row['product_id']}" class="ad-to-cart"><i class="fa fa-shopping-cart"></i>add to cart</a>
            </div>
        DELIMETER;
        
        echo $product;
        
        }
        
        }


function login_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);

$query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' " );

confirm($query);

if(mysqli_num_rows($query) == 0){

    set_message("Your username or Password Wrong");

redirect("login.php");

} else {

    set_message("welcome Admin {$username}");

redirect("admin");

}



}


}




function send_message(){

    if(isset($_POST['submit'])){


            $to          = "emailaddress@gmail.com";
            $fname        = $_POST['name'];
            $subject     = $_POST['subject'];
            $email       = $_POST['email'];
            $message     = $_POST['message'];


            $headers = "From: {$fname} {$email}";


            $result = mail($to, $subject, $message, $headers);

            if(!$result) {


                set_message("Sorry we could not sent your Email");
                redirect("contact-us2.php");

            } else {

               set_message("your message Has Been Sent");

            }

}
}










/*****************************Back end functions **********************/











?>