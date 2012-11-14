			<?php
                    $db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');
                    mysql_select_db('twoforpa_chefdecuisine',$db);
                    
                    
                    
                    $results=mysql_query("SELECT id,prodName,descript,price FROM products WHERE onsale = '$saleGroup'");
                    echo "<div class='productList'>"; 
					
						while($row=mysql_fetch_array($results))
							{
								echo "<div class='singleProduct'>";
									echo "<p class='productName'>".$row['prodName']."</p>";
									echo "<img src='productsimg/thumImgs/s".$row['id'].".jpg' alt='".$row['prodName']."' height='100' width='100'/>";
									echo "<p class='productName priceProduct'>Price: $".$row['price']."</p>";
									
									$stringRow = '"'.$row['id'].'", '.'"'.$crumID.'", '.'"'.$urlBack.'"';
									echo "<input class='buttonProduct' type='button' name='button' value='Quick view' onclick='getProductInfo(this, ".$stringRow.")'/>";
								echo "</div>";
							}
					echo "</div>";
					
                    	$results2=mysql_query("SELECT id,prodName,descript,price FROM products WHERE onsale = '$saleGroup'");
						
						$fisrtRow = mysql_fetch_row($results2);
						echo "<div class='productPreview'>";
							echo "<p id='previewProductName'>".$fisrtRow[1]."</p>";
							echo "<img id='previewImg' src='productsimg/thumImgs/m".$fisrtRow[0].".jpg' alt='".$fisrtRow[1]."' height='200' width='200'/>";
							echo "<p class='left' id='priceProductPreview'>Price: $".$fisrtRow[3]."</p>";
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
