function addCart(x)
{

	var prodAdded = new Array();

		prodAdded[0] = document.getElementById('previewProductName').firstChild.nodeValue;

		prodAdded[1] = document.getElementById('previewImg').getAttribute('src');

		prodAdded[2] = document.getElementById('priceProductPreview').firstChild.nodeValue;


	var	index = document.getElementsByTagName('SELECT')[0].options.selectedIndex;

		prodAdded[3] = document.getElementsByTagName('OPTION')[index].value;
		
		

		

		

		

		try

		{

			var requester = new XMLHttpRequest();

		}

		catch (error)

		{

			try

			{

				var requester = new ActiveXObject("Microsoft.XMLHTTP");

			}

			catch (error)

			{

				var requester = null;

			}

		}

		if (requester == null) {

			alert("You are not using an ajax enabled client");

		}

		else

		{

			requester.onreadystatechange = function ()

			{

				if(requester.readyState == 4)

				{

					if(requester.status == 200 || requester.status == 304)

					{

						var resp = requester.responseText;

						alert('The product: '+ prodAdded[0] + ' has been added to your cart');

					}

					else

					{

						alert("failed");

					}

				}

			}

			var vars = "?name="+prodAdded[0]+"&url="+prodAdded[1]+"&price="+prodAdded[2]+"&quantity="+prodAdded[3];

			requester.open("GET","includes/shoopingCart.php"+vars,true);

			requester.send(null);

		}
}






function addCart_ProductPage(x)
{

	var prodAdded = new Array();

		prodAdded[0] = document.getElementById('contentRight').getElementsByTagName('h2')[0].firstChild.nodeValue;

		prodAdded[1] = document.getElementById('imgProductURL').getAttribute('src');

		prodAdded[2] = document.getElementById('pricePID').firstChild.nodeValue;


	var	index = document.getElementsByTagName('SELECT')[0].options.selectedIndex;

		prodAdded[3] = document.getElementsByTagName('OPTION')[index].value;
		
				
		

		

		

		

		try

		{

			var requester = new XMLHttpRequest();

		}

		catch (error)

		{

			try

			{

				var requester = new ActiveXObject("Microsoft.XMLHTTP");

			}

			catch (error)

			{

				var requester = null;

			}

		}

		if (requester == null) {

			alert("You are not using an ajax enabled client");

		}

		else

		{

			requester.onreadystatechange = function ()

			{

				if(requester.readyState == 4)

				{

					if(requester.status == 200 || requester.status == 304)

					{

						var resp = requester.responseText;

						alert('The product: '+ prodAdded[0] + ' has been added to your cart');

					}

					else

					{

						alert("failed");

					}

				}

			}

			var vars = "?name="+prodAdded[0]+"&url="+prodAdded[1]+"&price="+prodAdded[2]+"&quantity="+prodAdded[3];

			requester.open("GET","includes/shoopingCart.php"+vars,true);

			requester.send(null);

		}
}