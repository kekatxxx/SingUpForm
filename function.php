<? 
session_start();
include "config.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/webassignment/lib/phpmailer/class.phpmailer.php');

switch($_REQUEST['section']){

	//FUNCTION SECTION FOR ADD, EDIT, DELETE USERS
	case 'user':
	
		include "inc/fun_user.php";
		
	break;
	
	//ADMIN PANEL LOGIN
	case 'login':

		if ($_REQUEST['passlogin']=='password') {
		
			$_SESSION['login'] = true;
			header("location:admin.php");
		
		}else{
			
			header("location:admin.php?mes=logerr");
			
		}

	break;
	
	//ADMIN PANEL LOGOUT
	case 'logout':
		
		unset($_SESSION['login']);
		header("location:admin.php");
		
	break;
}
?>