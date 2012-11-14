<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Admin :: Upload Confirmation</title>
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
        
        	<ul id="adminNav">
            	<li><a href="modify.php">Add Product</a></li>
            	<li><a href="delete_product.php">Delete Product</a></li>
                <li><a href="mod_product.php">Modify Product</a></li>
            </ul>

			<?php
            
                $db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');
                mysql_select_db('twoforpa_chefdecuisine',$db);
            
                $product=$_POST['product'];
                $category=$_POST['category'];
                $manufacture=$_POST['manufacture'];
                $cuisine=$_POST['cuisine'];
                $price=$_POST['price'];
                $onsale=$_POST['onsale'];
                $description=$_POST['description'];
                
                mysql_query("INSERT INTO products (prodName, categoryId, manufactId, cuisineId, descript, price, onsale) VALUES ('$product', '$category', '$manufacture', '$cuisine', '$description', '$price', '$onsale')");
                
                $results = mysql_query("SELECT id FROM products WHERE prodName ='$product'");
                
                $row=mysql_fetch_array($results);
                
                $nameNumber = $row['id'];
                
                //echo $nameNumber;
                
                
                if ((($_FILES["img"]["type"] == "image/gif") // gif in both browsers
                || ($_FILES["img"]["type"] == "image/jpeg") // jpeg as named by firefox
                || ($_FILES["img"]["type"] == "image/pjpeg")) // jpeg as named by ie
                && ($_FILES["img"]["size"] < 500*1024))  // size of less than 500k
                {
                    if ($_FILES["img"]["error"] > 0) // if there is an error (the error code is greater than 0)
                    {
                        echo "Return Code: " . $_FILES["img"]["error"] . "<br />"; // show the error
                    }
                    else
                    {
                        // the file must be valid and uploaded
                        echo "Upload: " . $_FILES["img"]["name"] . "<br />"; // display the file name
                        echo "Type: " . $_FILES["img"]["type"] . "<br />"; // display the file type
                        echo "Size: " . ($_FILES["img"]["size"] / 1024) . " Kb<br />"; // display the file size in kb (divided by 1024)
                        echo "Temp file: " . $_FILES["img"]["tmp_name"] . "<br />"; // show the temporary file name
                        if (file_exists("upload/" . $_FILES["img"]["name"])) // if the file exists
                        {
                            echo $_FILES["img"]["name"] . " already exists. "; // show that the file has already been uploaded
                        }
                        else
                        {
                            // at this point the file has been uploaded, but only temporarily.  
                            // we must transfer it from the temp folder to the folder of our choice in order to save it off properly
                            move_uploaded_file($_FILES["img"]["tmp_name"], // move the file from the temporary upload directory
                            "productsimg/" .$nameNumber.".jpg"); // to the new directory
                            echo "<p id='cartMessage'>Stored in: " . "productsimg/" .$nameNumber.".jpg"; // show where the file is now stored
                            echo $product." ".$category." ".$manufacture." ".$cuisine." ".$price." ".$onsale." ".$description."</p>";
                        }
                        echo "<br /><img src='" . "productsimg/" . $nameNumber.".jpg"."' alt='" . $_POST['product'] . "' />"; // show the uploaded file on the page
                    }
                }
                else
                {
                    echo "<p id='cartMessage'>Product Added</p>"; // show that the file is invalid
                }
            ?>

    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  



</body>
</html>


