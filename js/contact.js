function sendit()

{
	var fname= document.getElementById('contactForm').getElementsByTagName('input')[0].value;

	var lname= document.getElementById('contactForm').getElementsByTagName('input')[1].value;

	var address= document.getElementById('contactForm').getElementsByTagName('input')[2].value;

	var city= document.getElementById('contactForm').getElementsByTagName('input')[3].value;

	var zip= document.getElementById('contactForm').getElementsByTagName('input')[4].value;

	var state= document.getElementById('contactForm').getElementsByTagName('input')[5].value;

	var email= document.getElementById('contactForm').getElementsByTagName('input')[6].value;

	var comments= document.getElementById('contactForm').getElementsByTagName('textarea')[0].value;
	
	//alert(comments);

	

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

							alert (resp);
					}

					else

					{

						alert("failed");

					}

				}

			}

			var vars = "?fname="+fname+"&lname="+lname+"&address="+address+"&city="+city+"&zip="+zip+"&state="+state+"&email="+email+"&comments="+comments;

			requester.open("get","includes/email.php"+vars,true);

			requester.send(null);

		}



	

}







