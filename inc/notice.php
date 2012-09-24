<?
	//CONFIRMATION NOTICE
	if ($_REQUEST['mes']=="yes") echo "<h2>Registration successful!</h2><p style='margin-bottom:30px'>You will receive an email confirmation.</p>";

	//ERROR NOTICE
	if ($_REQUEST['mes']=="error") {
	
		//defining the URL values
		$firstname 	=	$_REQUEST['firstname'];
		$lastname	=	$_REQUEST['lastname'];
		$username	=	$_REQUEST['username'];
		$birth		=	$_REQUEST['birth'];
		$password	=	$_REQUEST['password'];
		$email		=	$_REQUEST['email'];
		$newsletter	=	$_REQUEST['newsletter'];
		$agree		=	$_REQUEST['agree'];
		
		echo "<h3'>Registration error:</h3>";
		
		//listing the specific errors
		if ($firstname == "") echo "<p class='perr'>First name missing</p>";
		if ($lastname == "") echo "<p class='perr'>First name missing</p>";
		if ($username == "err") {echo "<p class='perr'>Username missing or mispelled</p>"; $username == false;}
		if ($birth == "err") echo "<p class='perr'>Date of Birth missing</p>";
		if ($password == "err") echo "<p class='perr'>Password missing or mismatch</p>";
		if ($email == "err") {echo "<p class='perr'>Email address missing or mispelled</p>"; $email == false;}
		if ($agree == "err") {echo "<p class='perr'>You must accept the agreement</p>";}

	}
?>