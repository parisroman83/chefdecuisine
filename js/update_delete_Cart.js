function updateIt(x)

{

	

var itemR= x.parentNode.parentNode.parentNode;

var quantity = itemR.getElementsByTagName('div')[3].getElementsByTagName('input')[0].value;



var indexArray = itemR.getAttribute('id');



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

			requester.onreadystatechange = function()

			{

				if(requester.readyState == 4)

				{

					if(requester.status == 200 || requester.status == 304)

					{

						

						var resp = requester.responseText;

						//var resp = requester.responseXML.documentElement;

						

						

						

					}

					else

					{

						//alert("failed");

					}

				}

			}

			var vars = "?itemToremove="+indexArray+"&quantity="+quantity;

			requester.open("GET","includes/cartUpdate.php"+vars,true);

			requester.send(null);

		}





}



function deleteIt(x)

{

var itemR= x.parentNode.parentNode.parentNode;

document.getElementById('contentRight').removeChild(itemR);



var itemToremove = itemR.getAttribute('id');



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

			requester.onreadystatechange = function()

			{

				if(requester.readyState == 4)

				{

					if(requester.status == 200 || requester.status == 304)

					{

						

						var resp = requester.responseText;

						//var resp = requester.responseXML.documentElement;

						

						

						

					}

					else

					{

						//alert("failed");

					}

				}

			}

			var vars = "?itemToremove="+itemToremove;

			requester.open("GET","includes/cart.php"+vars,true);

			requester.send(null);

		}

}

// JavaScript Document