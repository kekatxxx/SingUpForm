<?
if($_SESSION['login']){

	$login_link = "function.php?section=logout";
	$login_link_par = "Logout";

}else{

	$login_link = "/webassignment/admin.php";
	$login_link_par = "Admin";
}

	echo "<p id='loginlink'><a href='http://www.arsbit.net/webassignment/'>Home</a> | <a href='$login_link'>$login_link_par</a></p>";
?>