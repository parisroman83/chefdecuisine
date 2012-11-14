<?php 



if (isset($_SESSION['user'])) {


	$db=mysql_connect('localhost','twoforpa_chef','Delacocina2!');

	mysql_select_db('twoforpa_chefdecuisine',$db);

	

	$pass=$_SESSION['pass'];
	$uname=$_SESSION['user'];

	$dbpass = mysql_query("SELECT password FROM users WHERE username = '$uname'");

	$fetch_em = mysql_fetch_array($dbpass);

	$numrows = mysql_num_rows($dbpass);



	if($numrows != "0" & $pass == $fetch_em["password"]) 

		{

		echo "<p>Hello admin <a id='gotoP' href='modify.php'>Go to Form</a> or <a id='logout' href='reset.php'>Log Out</a>
</p>";

		}

		else{

		echo "<form action='#'>";
			echo "<input type='text' name='userName' value='User Name' />";
			echo "<input type='password' name='passUser' value='Password' />";
			echo "<input type='button' class='button' value='log in' onclick='login(this)' />";
		echo "</form>";

		}

}else{

		echo "<form action='#'>";
			echo "<input type='text' name='userName' value='User Name' />";
			echo "<input type='password' name='passUser' value='Password' />";
			echo "<input type='button' class='button' value='log in' onclick='login(this)' />";
		echo "</form>";

		}

?>