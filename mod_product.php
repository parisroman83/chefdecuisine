<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Admin :: Modify Item</title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/getProduct-admin.js"></script>

</head>

<body>

<div id="wrapper">
	<?php include('includes/headerNav.php');?>
    <div id="contentBody">
		<?php include('includes/searchDiv.php');?>
        <div id="contentRight">
        
        	<ul id="adminNav">
            	<li><a href="modify.php">Add Product</a></li>
            	<li><a href="delete_product.php">Delete Product</a></li>
                <li><a href="mod_product.php">Modify Product</a></li>
            </ul>

        <form class="backendForms" action="#" method="post">
        	<p>
            <label for="product">Product Name:</label><br />
                <?php
                    $db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');
                    mysql_select_db('twoforpa_chefdecuisine',$db);
    
                    $results = mysql_query("SELECT id,prodName FROM products");
                    echo "<SELECT id='product' name='product' onchange='getProduct(this)'><OPTGROUP label='Category'>";
                    while($row=mysql_fetch_array($results))
                            {
                                echo "<OPTION value=".$row['id'].">" .$row['prodName']. "</OPTION>";
                            }
                    echo "</OPTGROUP></SELECT>"; 
                ?>
             </p>
		</form>

    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  



</body>
</html>


