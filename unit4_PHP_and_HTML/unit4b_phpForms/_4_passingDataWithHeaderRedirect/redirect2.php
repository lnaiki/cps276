<?php


if($value === ""){
		header('Location: form_redirect2.html');
		exit;
	}
}

/* IF EVERYTHING IS OKAY REDIRECT TO THE ACKNOWLEDGEMENT PAGE. */

header("Location: acknowledgment2.php?fname={$_POST['firstName']}&lname={$_POST['lastName']}");
	//The first and last name are just in the URL. Can rewrite first or last name by retyping in the URl
?>