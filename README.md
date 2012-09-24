SIGNUP FORM (v1.0) by kek@xxx - Francesco Barbieri

LINK

Public form: http://www.arsbit.net/webassignment/

Public repository: https://github.com/kekatxxx/SingUpForm/

DESCRIPTION

The SignUp Form is a simple form system to sign requesting users from client to server side, into a MYSQL database. The system includes an administration panel to manage the database, therefore the system is structured on two main sections:

1. index.php = Front-end page, the root page with the signup form; if the registration is successful, the system automatically send a confirmation mail;

2. admin.php = Back-end page, throught  a login form we access on the administration panel, where the administrator user can view, modify and delete the signed users.

VALIDATION SYSTEM

The SignUp Form is provided with two-side validation systems: 

1. from client side, the page includes a jQuery script that simultaneously checks the typing values, in order to respect the form requirements;

2. from server side, the PHP page (inc/fun_users.php) checks the form values one by one, and if they don't correspond to the form requirements, the system returns to the root page with the error notification.

ADMIN PANEL

You can access to Admin panel from the link at the bottom of the page, or going to direct URL: http://www.arsbit.net/webassignment/admin.php (password:password)

TOOLS & PLUGIN

For the development of this application I used pure PHP with Notepad++, including some plugin for specific functions:

1. Client validation = jQuery Validation 
http://docs.jquery.com/Plugins/Validation
In particular, I used the Bassistance plugin (http://bassistance.de/jquery-plugins/jquery-plugin-validation/), adding a function on the jquery.validate.php file (line:1101)

2. Email sending = PHPMailer 
http://www.askapache.com/php/phpfreaks-eric-rosebrocks-phpmailer-tutorial.html