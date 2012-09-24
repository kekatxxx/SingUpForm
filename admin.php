<?
session_start();
include "config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>SignUp Form Admin Panel</title>
		
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- Jquery scripts -->
		<script src="js/jquery-1.7.2.js" type="text/javascript"></script>
		<script src="js/jquery.validate.js" type="text/javascript"></script>
		<!-- Signup values check script -->
		<script src="js/check.js" type="text/javascript"></script>
		
	</head>
	<body id="admin">
		
		<!-- Webpage Root Container -->
		<div id="container">
		
			<img class="logo" src="img/m2mobi-logo.jpg" />
			
			<h1><a href="http://www.arsbit.net/webassignment/admin.php">SignUp Form - Admin Panel</a></h1>
			<h3>by Francesco Barbieri [kek@xxx]</h3>
			
			<?
			//LOGIN FORM
			if (!$_SESSION['login']){
			
				if ($_REQUEST['mes']=='logerr') echo "<p style='color:#660033'>Login failed, try again.</p>";
			
				echo '<form id="loginForm" action="function.php" method="post">';
					echo '<input type="hidden" name="section" value="login" />';
					echo '<p><label for="passlogin">Password</label>';
					echo '<input id="passlogin" name="passlogin" type="password" /></p>';
					echo '<p><input type="submit" value="Login" /></p>';
				echo '</form>';
			
			}else{
			//LOGGED IN: ADMIN PANEL 
			
				include "inc/adm_user.php";
				
			}
			?>
			
			<!-- Including Login Link -->
			<?include "inc/login_link.php";?>
			
		</div>
		
	</body>
</html>