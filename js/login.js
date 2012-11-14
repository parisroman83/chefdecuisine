function login(x)
{
	var user = document.getElementById('searchBar2').getElementsByTagName('input')[0].value;
	var pass = document.getElementById('searchBar2').getElementsByTagName('input')[1].value;
	
	var ele = document.getElementById("searchBar2");
	
	
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
						
						if(resp == 1)
						{
							
							while (ele.firstChild)
								{
									ele.removeChild(ele.firstChild);
								}
								
									var newEle=document.createElement('p');
									
									var text=document.createTextNode("Hello admin ");
									
									var gotoP=document.createElement('a');
									
										gotoP.setAttribute('href','modify.php');
										
										gotoP.setAttribute('id','gotoP');
									
									var textP=document.createTextNode('Go to Form');
									
										gotoP.appendChild(textP);
									
									
									
									var logoutA=document.createElement('a');
									
										logoutA.setAttribute('href','reset.php');
										
										logoutA.setAttribute('id','logout');
									
									var textA=document.createTextNode('Log Out');
									
										logoutA.appendChild(textA);
									
									
									
									var or=document.createTextNode(' or ');
									
									
									
										newEle.appendChild(text);
										
										newEle.appendChild(gotoP);
										
										newEle.appendChild(or)
										
										newEle.appendChild(logoutA);
										
										ele.appendChild(newEle);
									
									
									

						}

						else if(resp == 0)
						{
							alert('Enter a correct Username or Password');
							
						}
						
						else if(resp == 2)
						{ 

							alert('user');
							
							while (ele.firstChild)
								{
									ele.removeChild(ele.firstChild);
								}
						}

					}

					else

					{

						alert("failed");

					}

				}

			}

			var vars = "?user="+user+"&pass="+pass;

			requester.open("GET","includes/login.php"+vars,true);

			requester.send(null);

		}	
	
}