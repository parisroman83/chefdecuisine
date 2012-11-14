<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Sales</title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
<script type="text/javascript" src="js/previewProduct.js"></script>
<script type="text/javascript" src="js/addtoCart.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>

<body>
<div id="wrapper">
	<?php include('includes/headerNav.php');?>
    <div id="contentBody">
		<?php include('includes/searchDiv.php');?>
        <div id="contentRight">
        	<div class="crumbs">
            	<p><a href="index.php">HOME &raquo;</a> SALES</p>
            </div>
        	<h2>Sales</h2>
    
        	<?php  $saleGroup= "1";				   
				   $crumID = "SALES";
				   $urlBack = "sale.php"; ?>
			
			<?php include('includes/saleProducts.php');?>
    
		</div>    
    </div>
    
	<?php include('includes/footer.php');?>
</div>  
</body>
</html>

