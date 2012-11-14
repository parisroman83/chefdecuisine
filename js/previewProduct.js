function getProductInfo(x, y, a, b)
{
	var name_price = x.parentNode.getElementsByTagName('p');
	
	var productName = name_price[0].firstChild.nodeValue;
	var productPrice = name_price[1].firstChild.nodeValue;
	
	var imgURL = "productsimg/thumImgs/m"+y+".jpg";
	var pageURL = "productPage.php?productID="+y+"&crumID="+a+"&urlBack="+b;
	
		
	document.getElementById('previewProductName').firstChild.nodeValue = productName;
	document.getElementById('previewImg').setAttribute('src', imgURL);
	document.getElementById('priceProductPreview').firstChild.nodeValue = productPrice;
	document.getElementById('linkProductId').setAttribute('href', pageURL);
}