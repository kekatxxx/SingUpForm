<?php
	//Database settings
		//settings for the db connection
		$db_host="localhost";
		$db_name="jwwwaars_webassignment";
		$db_user="jwwwaars_userwa";
		$db_pass="userwa01";

		//server connection
		$connect = mysql_connect($db_host,$db_user,$db_pass) or die ("Database connection error: ".mysql_error());
		//database selection
		mysql_select_db($db_name,$connect) or die ("Database selection error: ".mysql_error());

	//PhpMailer
		// Configuration settings for My Site
		 
		// Email Settings
		$site['from_name'] = 'Signup Form [Kek@xxx]'; // from email name
		$site['from_email'] = 'francesco.barbieri@eui.eu'; // from email address
		 
		// Just in case we need to relay to a different server,
		// provide an option to use external mail server.
		$site['smtp_mode'] = 'disabled'; // enabled or disabled
		$site['smtp_host'] = null;
		$site['smtp_port'] = null;
		$site['smtp_username'] = null;
?>