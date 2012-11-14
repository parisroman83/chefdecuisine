<?php

$to="parisroman@gmail.com";



$email2= "Comments@chefdecuisine.com";

$user_fName= $_GET["fname"];

$user_Subject= "User message from online form.";

$user_lName= $_GET["lname"];

$user_address= $_GET["address"];

$user_city= $_GET["city"];

$user_zip= $_GET["zip"];

$user_state= $_GET["state"];

$user_email= $_GET["email"];

$user_comments= $_GET["comments"];


	$user_Text="Name: " . $user_fName . " " . $user_lName . "\r\n". "Address: " . $user_address . " " . $user_city . " " . $user_state . " " . $user_zip . " " . "\r\n" . "Email: " . $user_email . "\r\n" . "Message: \r\n" . $user_comments;

	$successful=mail($to,$user_Subject,$user_Text,"From:". $email2 ."\r\n" . "Reply-to: ".$user_Email."\r\n");
	

	if ($successful == TRUE) 

	{

		echo('Thank you for using the form to contact us! I will contact you as soon as possible') ;

	}

	else

	{

		echo('There was an error while sending.  Please try again.') ;

	}
?>