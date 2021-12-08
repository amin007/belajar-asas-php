<?php
#--------------------------------------------------------------------------------------------------
	# define pembolehubah global
	define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
	define('SERVER', 'http://' . $_SERVER['SERVER_NAME'] . '/');
#--------------------------------------------------------------------------------------------------
// multiple recipients
$to  = 'puteratangkak@duduk.mana' . ', '; // note the comma
$to .= 'teknologiapa@duduk.mana';
$t1  = 'Putera Tangkak<puteratangkak@duduk.mana>' . ', '; // note the comma
$t1 .= 'Teknologi Apa<teknologiapa@duduk.mana>';

// subject
$subject = 'Sahkan Anda Wujud';

// message
$message = '
<html>
<head>
<title>Sahkan Anda Wujud</title>
</head>
<body>
<p>Klik ini untuk sahkan anda wujud</p>
<p><a>' . SERVER . 'andawujud</a></p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: ' . "$t1\r\n";
$headers .= 'From: Amin Ledang <biarahsia@duduk.mana>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);