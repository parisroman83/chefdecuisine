<?php session_start();



$itemToremove=$_GET['itemToremove'];



unset($_SESSION['cart'][$itemToremove]);

$_SESSION['cart'] = array_values($_SESSION['cart']);



Header("location: displayShoppingCart.php");



?>