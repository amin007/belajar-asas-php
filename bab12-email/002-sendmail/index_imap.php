<html>
<head>How to Retrieve Emails from Gmail using PHP IMAP</head>
<body>
<h1>Gmail Email Inbox using PHP with IMAP</h1>
<?php
#--------------------------------------------------------------------------------------------------
$user = 'apaNama@duduk.mana';
$pass = 'passApadaa';
#--------------------------------------------------------------------------------------------------
if (! function_exists('imap_open'))
{
	echo "IMAP is not configured.";
	exit();
}
else
{
	?><div class="container"><?php
	/* IMAP Connection code with GMAIL IMAP */
	$imap_conn = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', $user, $pass)
	or die('Cannot connect to Gmail: ' . imap_last_error());

	/* SET email subject filter criteria */
	$inbox = imap_search($imap_conn, 'SUBJECT "JOB"');

	if (! empty($inbox))
	{
		?><table class="table table-striped"><?php
		foreach ($inbox as $email)
		{
			// Get email header information
			$overview = imap_fetch_overview($imap_conn, $email, 0);
			// Get email body
			$message = imap_fetchbody($imap_conn, $email, '2');
			$date = date("d F, Y", strtotime($overview[0]->date));
		?><tr><?php
		?><td><?php echo $overview[0]->from; ?></td><?php
		?><td><?php echo $overview[0]->subject; ?> - <?php echo $message; ?></td><?php
		?><td><?php echo $date; ?></td><?php
		?></tr>	<?php
		}
		?></table><?php
	}
	imap_close($imap_conn);// Close imap connection
}
?>