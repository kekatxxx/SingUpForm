<?php
 
// Grab our config settings
require_once($_SERVER['DOCUMENT_ROOT'].'/webassignment/config.php');
 
// Grab the FreakMailer class
require_once($_SERVER['DOCUMENT_ROOT'].'/webassignment/lib/phpmailer/MailClass.inc');
 
// instantiate the class
$mailer = new FreakMailer();
 
// Set the subject
$mailer->Subject = 'Signup Form by kek@xxx';
 
// Body
$mailer->Body = 'Dear '.$firstname.' '.$lastname.',<br />Thank you for registering on SignUp Form by kek@xxx.<br /><br />Your Password is: '.$password.'<br /><br />Kindly, <br />Francesco Barbieri';
 
// Add an address to send to.
$mailer->AddAddress($email, $firstname." ".$lastname);

//HTML format
$mailer->isHTML(true);
 
if(!$mailer->Send())
{
    echo 'There was a problem sending this mail!';
}
else
{
    echo 'Mail sent!';
}
$mailer->ClearAddresses();
$mailer->ClearAttachments();
?>