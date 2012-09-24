<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>SignUp Form</title>
		
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- Jquery scripts -->
		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="js/jquery.validate.js" type="text/javascript"></script>
		
		<!-- Signup values check script -->
		<script src="js/check.js" type="text/javascript"></script>
		
	</head>
	<body>
		
		<!-- Webpage Root Container -->
		<div id="container">
		
			<img class="logo" src="img/m2mobi-logo.jpg" />
			
			<h1><a href="http://www.arsbit.net/webassignment/">SignUp Form</a></h1>
			<h3>by Francesco Barbieri [kek@xxx]</h3>
			
			<!-- Including confirmation/error notice -->
			<?include "inc/notice.php";?>
			
			<!-- Including Signup Form -->
			<?include "inc/form.php";?>
			
			<!-- Including Login Link -->
			<?include "inc/login_link.php";?>
			
		</div>
		
	</body>
</html>