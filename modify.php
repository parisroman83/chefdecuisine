<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Admin :: Add Item</title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="js/login.js"></script>

<script type="text/javascript">
function onsubmitform()
{
var img = document.getElementById('img').value;

if(img == ""){
alert ('Please select an image');
  return false;	
}


}
/*
{
  if(document.pressed == 'Insert')
  {
   document.myform.action ="insert.html";
  }
  else
  if(document.pressed == 'Update')
  {
    document.myform.action ="update.html";
  }
  return true;
}*/
</script>


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

            <form class="backendForms" action="formUpload.php" method="post" enctype="multipart/form-data" onsubmit="return onsubmitform();">
            	<p>
                    <label for="product">Product Name:</label><br />
                    <input type="text" id="product" name="product" />
        		</p>
                
                <p>
                	<span class="leftFormSpan">
                        <label for="category">Category:</label><br />
                        <SELECT id="category" name="category">
                             <OPTGROUP label="Category">
                               <OPTION value="1">Bakewawre</OPTION>
                               <OPTION value="2">Cutlery</OPTION>
                               <OPTION value="3">Kitchen Electrics</OPTION>
                               <OPTION value="4">Outdoor Cooking</OPTION>
                               <OPTION value="5">Knives</OPTION>
                             </OPTGROUP>
                        </SELECT>
                	</span>

					<span class="rightFormSpan">
                        <label for="manufacture">Manufacture:</label><br />
                        <SELECT id="manufacture" name="manufacture">
                             <OPTGROUP label="Manufacture">
                               <OPTION value="1">All-Clad</OPTION>
                               <OPTION value="2">Calphalon</OPTION>
                               <OPTION value="3">Cuisinart</OPTION>
                               <OPTION value="4">Cuisinart Electrics</OPTION>
                               <OPTION value="5">Henckles</OPTION>
                               <OPTION value="6">Kitchen Aid</OPTION>
                               <OPTION value="7">Le Creuset</OPTION>
                               <OPTION value="8">Woring</OPTION>
                               <OPTION value="9">Wusthof</OPTION>
                             </OPTGROUP>
                        </SELECT>
                	</span>
        		</p>
                
                <p>
                	<span class="leftFormSpan">
                        <label for="cuisine">Cuisine:</label><br />
                        <SELECT id="cuisine" name="cuisine">
                             <OPTGROUP label="Cuisine">
                               <OPTION value="1">Chinese</OPTION>
                               <OPTION value="2">Thai</OPTION>
                               <OPTION value="3">Italian</OPTION>
                               <OPTION value="4">Mexican</OPTION>
                               <OPTION value="5">Japanese</OPTION>
                               <OPTION value="6">Indian</OPTION>
                               <OPTION value="7">Greek</OPTION>
                               <OPTION value="8">American</OPTION>
                               <OPTION value="9">French</OPTION>
                             </OPTGROUP>
                        </SELECT>
                	</span>
        		
					<span class="rightFormSpan">
                        <label for="price">Price:</label><br />
                        <input type="text" id="price" name="price" />
                	</span>
        		</p>
                
                <p>
                <label for="onsale">Article on sale:</label><br />
                <SELECT id="onsale" name="onsale">
                     <OPTGROUP label="onsale">
                       <OPTION value="1">Yes</OPTION>
                       <OPTION value="2">No</OPTION>
                     </OPTGROUP>
                </SELECT>
                </p>
        		
                <p>
                <label for="description">Description:</label><br />
                <textarea id="description" name="description" /></textarea>
        		</p>
                
                <p>
                <label for="img">Image:</label><br />
                <input type="file" id="img" name="img" />
        		</p>
                
                <p>
                <input type="submit" id="submit"/>
    			</p>
            </form>

    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  



</body>
</html>


