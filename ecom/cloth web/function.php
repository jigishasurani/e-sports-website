<?php

// required statement my sql connection 
 require('database\datacontroller.php');
// required statement product class 
require('database\product.php');
// required statement cart  class 
 require('database\cart.php');

 //DB controller object
$db =new datacontroller();


//product  object
$product =new product($db);
$product_suffel = $product->getData();
// print_r($product->getData());

// cart object 
$cart = new cart($db);
// print_r();
// $arr = array(
//     "user_id"=>2,
//     "item_id"=>9
// );
// $cart->insertintoCart($arr);
