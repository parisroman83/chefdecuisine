function getProduct(x)

{

var container = document.getElementById('contentRight').getElementsByTagName('form');
	while (container.length>1)
			{
				document.getElementById('contentRight').removeChild(container[1]);
			}
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

						var resp = requester.responseXML.documentElement;

						var product= resp.getElementsByTagName("product");

								var name = product[0].getAttribute('name');

								var description = product[0].getAttribute('description');

								var price = product[0].getAttribute('price');

								var id = product[0].getAttribute('id');

								var url="productsimg/"+id+".jpg";

								var category = product[0].getAttribute('category');

								var manufact = product[0].getAttribute('manufact');

								var cuisine = product[0].getAttribute('cuisine');

								var onsale = product[0].getAttribute('onsale');						

						var formModify = document.createElement('form');

							formModify.setAttribute('class','backendForms');

							formModify.setAttribute('action','formModify.php');

							formModify.setAttribute('method','post');

						document.getElementById('contentRight').appendChild(formModify);
						
						/* generic paragraph */
						var genericPara1 = document.createElement('p');
						/* END */
						
						/* generic <br /> */
						var lineSkip1 = document.createElement('br');
						/* END */
						
						var nameLabel = document.createElement('label');

						var nameLabelTxt = document.createTextNode('Name: ');

							nameLabel.appendChild(nameLabelTxt);
							

						var nameInput = document.createElement('input');

							nameInput.setAttribute('value',name);

							nameInput.setAttribute('id','prodName');

							nameInput.setAttribute('name','prodName');
							
							genericPara1.appendChild(nameLabel);
							genericPara1.appendChild(lineSkip1);
							genericPara1.appendChild(nameInput);
							formModify.appendChild(genericPara1);
							
							
						/* generic paragraph */
						var genericPara2 = document.createElement('p');
						/* END */
						
						/* generic <br /> */
						var lineSkip2 = document.createElement('br');
						/* END */

						var descriptLabel = document.createElement('label');

						var descriptLabelTxt = document.createTextNode('Description: ');

							descriptLabel.appendChild(descriptLabelTxt);

						var descriptInput = document.createElement('input');

							descriptInput.setAttribute('value',description);

							descriptInput.setAttribute('id','description');

							descriptInput.setAttribute('name','description');

							
							genericPara2.appendChild(descriptLabel);
							genericPara2.appendChild(lineSkip2);
							genericPara2.appendChild(descriptInput);
							formModify.appendChild(genericPara2);
							
						

						/* generic paragraph */
						var genericPara3 = document.createElement('p');
						/* END */
						
						/* generic <br /> */
						var lineSkip3 = document.createElement('br');
						/* END */

						var priceLabel = document.createElement('label');

						var priceLabelTxt = document.createTextNode('Price: ');

							priceLabel.appendChild(priceLabelTxt);

						var priceInput = document.createElement('input');

							priceInput.setAttribute('value',price);

							priceInput.setAttribute('id','price');

							priceInput.setAttribute('name','price');
							
							
							genericPara3.appendChild(priceLabel);
							genericPara3.appendChild(lineSkip3);
							genericPara3.appendChild(priceInput);
							formModify.appendChild(genericPara3);
							
					
					
					
						/* generic paragraph */
						var genericPara4 = document.createElement('p');
						/* END */
						
						/* generic <br /> */
						var lineSkip4 = document.createElement('br');
						/* END */
							

						var onsaleD = document.createElement('label');

						var	onsaleDTxt = document.createTextNode('Is the Item on sale: ');

							onsaleD.appendChild(onsaleDTxt);

							

						var onsaleSelect= document.createElement('select');

							onsaleSelect.setAttribute('id','onsale');

							onsaleSelect.setAttribute('name','onsale');

						var onsaleOPT = document.createElement('optgroup');

							onsaleSelect.appendChild(onsaleOPT);

							

						var onsaleOp1=document.createElement('option');

							onsaleOp1.setAttribute('value','1');

						var	onsaleOpTxt1 = document.createTextNode('Yes');

							onsaleOp1.appendChild(onsaleOpTxt1);

							

						var onsaleOp2=document.createElement('option');

							onsaleOp2.setAttribute('value','0');

						var	onsaleOpTxt2= document.createTextNode('No');

							onsaleOp2.appendChild(onsaleOpTxt2);

							

							onsaleOPT.appendChild(onsaleOp1);

							onsaleOPT.appendChild(onsaleOp2);
							
							
							genericPara4.appendChild(onsaleD);
							genericPara4.appendChild(lineSkip3);
							genericPara4.appendChild(onsaleSelect);
							formModify.appendChild(genericPara4);
							

						/* generic paragraph */
						var genericPara5 = document.createElement('p');
						/* END */

						var subChange= document.createElement('input');

							subChange.setAttribute('type', 'submit');

							subChange.setAttribute('id', 'submit');

							subChange.setAttribute('value', 'Submit');
							
							genericPara5.appendChild(subChange);
							formModify.appendChild(genericPara5);

					}
					else
					{
						alert("failed");
					}
				}
			}
			var vars = "?itemTochange="+x.value;
			requester.open("GET","includes/getProduct-admin.php"+vars,true);
			requester.send(null);
		}
}
