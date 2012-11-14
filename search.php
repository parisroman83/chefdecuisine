<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Search Results</title>
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
        	<?php
				$search = $_GET['productSearch'];			   
				   $crumID = "SEARCH RESULTS";
				   $urlBack = "search.php";
			?>
        	<div class="crumbs">
            	<p style="text-transform: uppercase;"><a href="index.php">HOME &raquo;</a> SEARCH FOR: <?php echo $search?></p>
            </div>
    	
			<?php
            
            
            $db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');
            mysql_select_db('twoforpa_chefdecuisine',$db);
            
			
			
            
            $sql ="SELECT * FROM products WHERE prodName LIKE '%$search%' ORDER BY id,prodName,categoryId,descript,price,rating";
            $results = mysql_query($sql);
			
			echo '<h2>Results for "'.$search.'"</h2>';
            
                    echo "<div class='productList'>"; 
					
						while($row=mysql_fetch_array($results))
							{
								echo "<div class='singleProduct'>";
									echo "<p class='productName'>".$row['prodName']."</p>";
									echo "<img src='productsimg/thumImgs/s".$row['id'].".jpg' alt='".$row['prodName']."'/>";
									echo "<p class='productName priceProduct'>Price: $".$row['price']."</p>";
									
									$stringRow = '"'.$row['id'].'", '.'"'.$crumID.'", '.'"'.$urlBack.'"';
									echo "<input class='buttonProduct' type='button' name='button' value='Quick view' onclick='getProductInfo(this, ".$stringRow.")'/>";
								echo "</div>";
							}
					echo "</div>";
					
                    	$results2=mysql_query("SELECT * FROM products WHERE prodName LIKE '%$search%' ORDER BY id,prodName,categoryId,descript,price,rating");
						
						$fisrtRow = mysql_fetch_row($results2);
						echo "<div class='productPreview'>";
							echo "<p id='previewProductName'>".$fisrtRow[1]."</p>";
							echo "<img id='previewImg' src='productsimg/thumImgs/m".$fisrtRow[0].".jpg' alt='".$fisrtRow[1]."'/>";
							echo "<p class='left' id='priceProductPreview'>Price: $".$fisrtRow[4]."</p>";
							echo "<a class='right productLink descProductPreview' id='linkProductId' href='productPage.php?productID=".$fisrtRow[0]."'>Read description</a>";
							
							
							echo "<p class='labelPreview'>Order now</p>";
							echo "<p class='comboAdd'>";
								echo "<span class='left'>";
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
								echo "</span>";
								echo "<span class='right'>";
									echo "<input class='buttonProductPreview' type='button' name='button' value='Add to cart' onclick='addCart(this)'/>";
								echo "</span>";
							echo "</p>";
					echo "</div>";
					
            ?>    	
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  
</body>
</html>
