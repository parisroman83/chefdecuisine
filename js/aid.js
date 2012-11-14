var Aid = new Object();

Aid.init = function ()

{

	//var calc = document.getElementsByTagName('input'); // get all the input elements

	var c2 = document.getElementById('container').getElementsByTagName('h3');

	for (var i=0;i<c2.length;i++)

	{

	Core.addEventListener(document.getElementById('container').getElementsByTagName('h3')[i],"click",Aid.findProd);

	}

	

}

Aid.findProd = function ()

{

	alert("working");

	

	/*var selection = this.firstChild.nodeValue;

	

	var container = document.getElementById('container');

	while (container.firstChild)

			{

				container.removeChild(container.firstChild);

			}

	

	alert(this.firstChild.nodeValue);

	

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

						var resp = requester.responseXML.documentElement;

						var product= resp.getElementsByTagName("product");

						for (var i=0; i<product.length;i++)

						

							{

								var para=document.createElement("div");

								var name = product[i].getAttribute('name');

								var description = product[i].getAttribute('description');

								var price = product[i].getAttribute('price');

								var txt = document.createTextNode(name+" - "+description+" - "+price);

								

								para.appendChild(txt);

								

				

								container.appendChild(para);

							

							}

						

						

					}

					else

					{

						alert("failed");

					}

				}

			}

			var vars = "?search="+selection;

			requester.open("GET","productsResult.php"+vars,true);

			requester.send(null);

		}

		*/



}

Core.start(Aid);