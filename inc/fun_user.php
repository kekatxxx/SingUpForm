<?
	//defining form values
	$id 		=	$_REQUEST['id'];
	$firstname 	=	$_REQUEST['firstname'];
	$lastname	=	$_REQUEST['lastname'];
	$username	=	$_REQUEST['username'];
	$birth		=	$_REQUEST['birthy']."-".$_REQUEST['birthm']."-".$_REQUEST['birthd'];
	if ($_REQUEST['birth']) $birth	=	$_REQUEST['birth'];
	$password	=	$_REQUEST['password'];
	$confirm_password	=	$_REQUEST['confirm_password'];
	$email		=	$_REQUEST['email'];
	$newsletter	=	$_REQUEST['newsletter'];
	$agree		=	$_REQUEST['agree'];

	switch($_REQUEST['act']){

		//QUERY FOR ADD NEW USER TO DB
		case 'add':

			//form validation from server side (in case of jQuery malfunctioning)
			
				//firstname
				if ($firstname == "") $valid_error = true;
				
				//lastname
				if ($lastname == "") $valid_error = true;
				
				//username
				if (!preg_match('/^[a-z0-9.-_]+$/', $username) || $username == "") {$valid_error = true; $username = "err";}
				
				//birth
				if (checkdate($_REQUEST['birthm'],$_REQUEST['birthd'],$_REQUEST['birthy']) == false) {$valid_error = true; $birth = "err";}
				
				//password
				if (strlen($password)<5 || $password != $confirm_password) {$valid_error = true; $password = "err";}
				
				//email
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == "") {$valid_error = true; $email = "err";}
				
				//aggreement
				if ($agree != 'on') {$valid_error = true; $agree = "err";}
				
			//
			
			//if var $valid_error exists, that is one or more errors occured, I return to the root page with the error notice
			if ($valid_error) {
			
				//if password field is valid, I reset it in order to avoid to show it on the URL
				if ($password != "err") $password = false;

				//I compile the form fields for the return page (both with the valid values and the "error" value)
				$error_link  = "&firstname=".$firstname;
				$error_link .= "&lastname=".$lastname;
				$error_link .= "&username=".$username;
				$error_link .= "&birth=".$birth;
				$error_link .= "&password=".$password;
				$error_link .= "&email=".$email;
				$error_link .= "&newsletter=".$newsletter;
				$error_link .= "&agree=".$agree;
				
				header("location:./?mes=error".$error_link);
			
			}
			else
			//if there are no errors I do the query for insert the user in the DB and I return on the root page with the confirmation message
			{
		
				$query	 =	"INSERT INTO users ";
				$query	.=	"VALUES(0,";
				$query	.=	"'".$firstname."',";
				$query	.=	"'".$lastname."',";
				$query	.=	"'".$username."',";
				$query	.=	"'".$birth."',";
				$query	.=	"'".$password."',";
				$query	.=	"'".$email."',";
				$query	.=	"'".$newsletter."')";
				
				//Query to DB
				mysql_query($query);
				
				//Confirmation mail to user
				include "confirmation-mail.php";
				
				header("location:./?mes=yes");
				
			}
			
		break; 

		//QUERY FOR EDIT EXISTING USERS IN DB
		case 'edit':

			$query = "UPDATE users set ";
			$query.= "firstname='".$firstname."',";
			$query.= "lastname='".$lastname."',";
			$query.= "username='".$username."',";
			$query.= "birth='".$birth."',";
			$query.= "password='".$password."',";
			$query.= "email='".$email."',";
			$query.= "newsletter='".$newsletter."'";
			$query.=" WHERE id='".$id."'";
			
			mysql_query($query);
			header("location:admin.php?mes=ed");
			
		break;

		//QUERY FOR DELETE USERS FROM DB
		case 'canc':

			mysql_query("DELETE FROM users where id=".$id);
			header("location:admin.php?mes=del");
			
		break;
	} 
?>