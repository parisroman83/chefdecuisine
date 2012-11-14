<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Recipes</title>
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
            	<p><a href="index.php">HOME &raquo;</a> RECIPE OF THE MONTH</p>
            </div>
        	<h2>Recipe of the month</h2>
            
            	<h4 class="recepieTitle">Blueberry Orange Bran Muffin</h4>
                
				<div class="specs_recepies">
                <ul class="titleSpecs">
                	<li><p>Prep Time:</p></li>
                    <li><p>Cook Time:</p></li>
                    <li><p>Ready In:</p></li>
                </ul>		
				<ul class="contentSpecs">
                	<li><p>25 Min</p></li>
                    <li><p>15 Min</p></li>
                    <li><p>1 Hr</p></li>
                </ul>
                </div>
                
                <p class="subTitle_recepie">Ingredients</p>
				<ul class="ingredients_recepies">
                    <li><p>1/2 cup oat bran</p></li>
                    <li><p>1 cup wheat bran</p></li>
                    <li><p>1/2 cup sour cream</p></li>
                    <li><p>1/2 cup milk</p></li>
                    <li><p>1 cup all-purpose flour</p></li>
                    <li><p>1 teaspoon baking powder</p></li>
                    <li><p>1 teaspoon baking soda</p></li>
                    <li><p>2/3 cup brown sugar</p></li>
                    <li><p>1/2 teaspoon salt</p></li>
                    <li><p>1 cup fresh blueberries</p></li>
                    <li><p>1/3 cup vegetable oil</p></li>
                    <li><p>1 orange, juiced and zested</p></li>
                    <li><p>1 egg</p></li>
                    <li><p>1 teaspoon vanilla extract</p></li>
				</ul>

                <p class="subTitle_recepie">Directions</p>

				<ul class="ingredients_recepies">
					<li class="number_recepies"><p>1. Preheat an oven to 375 degrees F (190 degrees C). Grease 12 muffin cups, or line with paper muffin liners.</p></li>				
                	<li class="number_recepies"><p>2. Combine the oat bran and wheat bran in a large bowl. Stir in sour cream and milk. Allow mixture to stand for 10 minutes. Combine flour, baking powder, baking soda, brown sugar, and salt in a separate bowl. Gently stir blueberries into the flour mixture, carefully coating all the blueberries with flour. Stir vegetable oil, orange juice and zest, egg, and vanilla extract into the bran mixture. Combine flour mixture with the wet ingredients until just blended. Drop batter into lined muffin cups.</p></li>
                	<li class="number_recepies"><p>3. Bake in the preheated oven until a toothpick inserted into the center comes out clean, 15 to 20 minutes. Cool in the pans for 10 minutes before removing to cool completely on a wire rack.</p></li>
                </ul>
            
    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  
</body>
</html>
