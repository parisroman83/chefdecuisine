<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef de Cuisine :: Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/mainCss.css" />
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/login.js"></script>


</head>

<body>
<div id="wrapper">
	<?php include('includes/headerNav.php');?>
    <div id="contentBody">
		<?php include('includes/searchDiv.php');?>
        <div id="contentRight">
        	<div class="crumbs">
            	<p><a href="index.php">HOME &raquo;</a> CONTACT US</p>
            </div>
        	<h2>Contact Us</h2>
            
            <div class="left formContent">
                <form id="contactForm" action="#">
    
                    <p><label for="first">First Name:</label> <input type="text" id="first" /></p>
    
                    <p><label for="last">Last Name:</label> <input type="text" id="last" /></p>
    
                    <p><label for="address">Address:</label> <input type="text" id="address" /></p>
    
                    <p><label for="city">City:</label> <input class="short" type="text" id="city"/></p>
    
                    <p><label for="zip">Zip:</label> <input class="short" type="text" id="zip" /></p>
    
                    <p><label for="state">State:</label> <input type="text" id="state" /></p>
    
                    <p><label for="email">E-mail:</label> <input type="text" id="email" /></p>
    
                    <p><label for="comments">Comments:</label><textarea name="comments"></textarea></p>
    
                    
    
                    <p class="submit"><input type="submit" value="Submit" onclick="sendit()"/></p>
    
                </form>
            </div>

            <div class="right imageContent">
                
                <p><b>Our address and phone number</b></p>

                <div id="map"><img src="../images/map.jpg" width="350" height="200" border="0" /></div>

                <p class="phone_address">1121 White Rock Rd # 101</p>

                <p class="phone_address">El Dorado Hills, CA 95762</p>

                <p class="phone_address">(916) 941-8787</p>
                
            </div>
        
        
        
    	</div>
    </div>
    
	<?php include('includes/footer.php');?>
</div>  
</body>
</html>

