<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Shop</title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
<script type="text/javascript" src="js/login.js"></script>

</head>

<body>
<div id="wrapper">
	<?php include('includes/headerNav.php');?>
    <div id="contentBody">
		<?php include('includes/searchDiv.php');?>
        <div id="contentRight">
        	<div class="crumbs">
            	<p><a href="index.php">HOME &raquo;</a> SHOP</p>
            </div>
        	<h2>Is time to Cook!!!!</h2>
            <p class="subtitles">Make life easy. Get convenience, value, quality, and great style with our wide selection of chef supplies.</p>

        	<div class="categoriesShop">
            	<div class="categoriesShop3">
                	<div class="categoryLabel">
                    	<a href="shop-bakeware.php">
                            <span>Bakeware</span>
                            <img src="images/category1.jpg" alt="Bakeware" />
                        </a>
                	</div>
                	<div class="categoryLabel">
                    	<a href="shop-cutlery.php">
                            <span>Cutlery</span>
                            <img src="images/category2.jpg" alt="Cutlery" />
                        </a>
                	</div>
                	<div class="categoryLabel">
                    	<a href="shop-kitchen.php">
                            <span>Kitchen Electronics</span>
                            <img src="images/category3.jpg" alt="Kitchen Electronics" />
                        </a>
                	</div>
            	</div>
            	<div class="categoriesShop3">
                	<div class="categoryLabel">
                    	<a href="shop-outdoor.php">
                            <span>Outdoor Cooking</span>
                            <img src="images/category4.jpg" alt="Outdoor Cooking" />
                        </a>
                	</div>
                	<div class="categoryLabel">
                    	<a href="shop-knives.php">
                            <span>Knives</span>
                            <img src="images/category5.jpg" alt="Knives" />
                        </a>
                	</div>
                	<div class="categoryLabel">
                    	<a href="shop-cookware.php">
                            <span>Cookware</span>
                            <img src="images/category6.jpg" alt="Cookware" />
                        </a>
                	</div>
            	</div>
        	</div>
        </div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  
</body>
</html>

