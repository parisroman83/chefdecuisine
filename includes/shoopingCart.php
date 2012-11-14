<?php session_start();





$name=$_GET['name'];

$url=$_GET['url'];


$price=$_GET['price'];

$quantity=$_GET['quantity'];



$prod = array('name' => $name, 'url' => $url, 'price' => $price, 'quantity' => $quantity);



$i=count($_SESSION['cart']);

$cart = $_SESSION['cart'];

if (isset($_SESSION['cart'])) {



array_push($cart,$prod);

} else {

echo "ok";

$cart = array($prod);

}



$_SESSION['cart'] = $cart;



echo count($cart);

print_r(array_values($cart));



?>