<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Welcome</title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="js/login.js"></script>

</head>

<body>
<div id="wrapper">
	<?php include('includes/headerNav.php');?>
    <div id="contentBody">
		<?php include('includes/searchDiv.php');?>
        <div id="contentRight">
        	<div class="slideshow">
    			<img src="images/cooking-1.jpg" alt="Chef de Cuisine slide picture" width="808" height="260" />
    			<img src="images/cooking-2.jpg" alt="Chef de Cuisine slide picture" width="808" height="260" />
            </div>
            <div class="bottom-homeButtons">
            	<a href="shop-knives.php"><span>Knives Selection</span><img src="images/knives-home.jpg" width="268" height="158" border="0"/> </a>
            	<a href="sale.php"><span>Specials Sales</span><img src="images/sale-home.jpg" width="268" height="158" border="0"/> </a>
                <a href="shop-kitchen.php"><span>Kitchen Electronics</span><img src="images/kitchen-home.jpg" width="268" height="158" border="0"/>  </a>
            </div>
    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		speed: 2000,
		timeout: 10000
	});
});
</script>
</html>
