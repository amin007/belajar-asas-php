<?php
//require "vendor/autoload.php";
#--------------------------------------------------------------------------------------------------
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
#--------------------------------------------------------------------------------------------------
$user = 'apaNama@duduk.mana';
$pass = 'passApadaa';
$robo = 'robot@example.com';
$developmentMode = true;
$mailer = new PHPMailer($developmentMode);
#--------------------------------------------------------------------------------------------------
try {
	hantarEmail($developmentMode,$mailer,$user,$pass);
	echo 'MAIL HAS BEEN SENT SUCCESSFULLY';
}
catch (Exception $e)
{
	echo 'EMAIL SENDING FAILED. INFO: ' . $mailer->ErrorInfo;
}
#--------------------------------------------------------------------------------------------------
	function hantarEmail($developmentMode,$mailer,$user,$pass)
	{
		$mailer->SMTPDebug = 2;
		$mailer->isSMTP();
		if ($developmentMode) {
		$mailer->SMTPOptions = [
			'ssl'=> [
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
				]
			];
		}
		$mailer->Host = 'smtp.gmail.com';
		$mailer->SMTPAuth = true;
		$mailer->Username = $user;
		$mailer->Password = $pass;
		$mailer->SMTPSecure = 'tls';
		$mailer->Port = 587;
		$mailer->setFrom('bancitangkak@gmail.com', 'Name of sender');
		$mailer->addAddress('helmi007@yahoo.com', 'Name of recipient');
		$mailer->isHTML(true);
		$mailer->Subject = 'PHPMailer Test';
		$mailer->Body = 'This is a <b>SAMPLE<b> email sent through <b>PHPMailer<b>';
		$mailer->send();
		$mailer->ClearAllRecipients();
	}
#--------------------------------------------------------------------------------------------------