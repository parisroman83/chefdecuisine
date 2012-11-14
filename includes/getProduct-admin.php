<?php session_start();

header('Content-type: text/xml');

$db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');

mysql_select_db('twoforpa_chefdecuisine',$db);

	

$id=$_GET['itemTochange'];

$_SESSION['id']=$id;



$results=mysql_query("SELECT * FROM products WHERE id = '$id'");



	

	

$doc = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>";

$doc = $doc . "<products>";



while($row=mysql_fetch_array($results))



	{

			

			

			$doc.= "<product id=\"".$row['id']."\" name=\"".$row['prodName']."\" description=\"".$row['descript']."\" price=\"".$row['price']."\" category=\"".$row['categoryId']."\" cuisine=\"".$row['cuisineId']."\" onsale=\"".$row['onsale']."\" manufact=\"".$row['manufactId']."\"/>";

		

	}

	

	$doc = $doc . "</products>";

	

	echo $doc;





  

?>