<?php session_start();?>
<?php   $productID=$_GET['productID'];  $crumID=$_GET['crumID'];  $urlBack=$_GET['urlBack'];
		$db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');
		mysql_select_db('twoforpa_chefdecuisine',$db);
		$results=mysql_query("SELECT prodName,descript,price,categoryId FROM products WHERE id = '$productID'");
		$fisrtRow = mysql_fetch_row($results);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Shop :: <?php echo $fisrtRow[0]; ?></title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
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
            	<p><a href="index.php">HOME &raquo;</a> <a href="shop.php"> SHOP &raquo;</a> <?php echo"<a href='".$urlBack."'> ".$crumID." &raquo;</a> ".$fisrtRow[0];?></p>
            </div>
            <?php 
				
        		echo "<h2>".$fisrtRow[0]."</h2>";
				
				echo "<div class='left productPageIMG'>";
				
					echo "<img src='productsimg/".$productID.".jpg' alt='".$fisrtRow[0]."' width='400' height='400' class='largeImg' id='imgProductURL'/>";
					
					echo "<a href='".$urlBack."' class='backtocategory'>&laquo;Back to list</a>";
									
				echo "</div>";
				
				echo "<div class='right productPageDescription'>";
				
					echo "<p class='descriptionP'>".$fisrtRow[1]."</p>";
					
					echo "<p class='priceP' id='pricePID'>$".$fisrtRow[2]."</p>";
					
					echo "<p id='comboSelect'>";
							echo "<label id='labelQHolder'>Quantity:</label>";
								echo "<select>";
									echo "<optgroup label='Quantity'>";
									echo "<option value='1'>1</option>";
									echo "<option value='2'>2</option>";
									echo "<option value='3'>3</option>";
									echo "<option value='4'>4</option>";
									echo "<option value='5'>5</option>";
									echo "</optgroup>";
								echo "</select>";
					echo "</p>";
			
					echo "<input class='buttonProductPreview' type='button' name='button' value='Add to cart' onclick='addCart_ProductPage(this)'/>";
			
				echo "</div>";
			?>
            
        </div>
    </div>
	<?php include('includes/footer.php');?>
</div>  
</body>
</html>