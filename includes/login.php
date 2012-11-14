<?php session_start();?>

<?php
	$db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');
	mysql_select_db('twoforpa_chefdecuisine',$db);

	$_SESSION['user'] = $_GET['user'];
	$_SESSION['pass'] = $_GET['pass'];
	$pass=$_SESSION['pass'];
	$uname=$_SESSION['user'];
	
	
	
	
	$dbpass = mysql_query("SELECT password FROM users WHERE username = '$uname'");
	$fetch_em = mysql_fetch_array($dbpass);
	$numrows = mysql_num_rows($dbpass);

	if($numrows != "0" & $pass == $fetch_em["password"]) 
		{
			if ($pass === 'admin')
				{
					echo 1;
				}
			else{
					echo 2;
				}
		}

	else{
			echo 0;
		}







?>