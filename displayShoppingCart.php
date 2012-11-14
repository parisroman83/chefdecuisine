<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
<script type="text/javascript" src="js/update_delete_Cart.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>

<body>
<div id="wrapper">
	<?php include('includes/headerNav.php');?>
    <div id="contentBody">
		<?php include('includes/searchDiv.php');?>
        <div id="contentRight">
        	<div class="crumbs">
            	<p><a href="index.php">HOME &raquo;</a> SHOPPING CART</p>
            </div>
        <h2>Shopping Cart</h2>
    	
        
        <?php

		function writeShoppingCart() 

			{

			$cart = $_SESSION['cart'];

			if (!$cart) {

				return '<p id="cartMessage">You have no items in your shopping cart</p>';

				} 

			}

			

			echo writeShoppingCart();

			$counter=count($_SESSION['cart']);

			for ($i=0;$i<$counter;$i++)

			{

				$url= $_SESSION['cart'][$i]['url'];

				$name= $_SESSION['cart'][$i]['name'];

				$price= $_SESSION['cart'][$i]['price'];

				$quantity= $_SESSION['cart'][$i]['quantity'];

				echo "<div id='".$i."' class='cartProd'><div class='cartImg'><img src='".$url."' width='100' height='100'/></div>";

				echo "<div class='cartName'><h3>".$name."</h3></div>";

				echo "<div class='cartPrice'><h3>".$price."</h3></div>";

				echo "<div class='cartQuan'> <input type='text' value='".$quantity."'/></div>";

				echo "<div class='cartButtons'><a href='#'><p onclick='updateIt(this)'>Update</p></a><a href='#'><p onclick='deleteIt(this)'>Delete</p></a></div></div>";

			}

        ?>
        
        
        
    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  
</body>
</html>
