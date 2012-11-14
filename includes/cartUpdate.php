<?php session_start();



$itemToremove=$_GET['itemToremove'];

$quantity=$_GET['quantity'];



$_SESSION['cart'][$itemToremove][quantity]= $quantity;



Header("location: displayShoppingCart.php");

?>