#!/usr/local/bin/php
<?php
	//require('phpmailer/class.phpmailer.php');
	require('phpmailer/PHPMailerAutoload.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port     = 587;  
	$mail->Username = "savucactus@gmail.com";
	$mail->Password = "cactus213";
	$mail->Host     = "smtp.gmail.com";
	$mail->Mailer   = "smtp";
	$mail->SetFrom("savucactus@gmail.com", "Savu Cactus");
	//$mail->AddReplyTo("from email", "PHPPot");
	$adresse_mail_client = "yoyo_14@hotmail.fr";
	$mail->AddAddress($adresse_mail_client);
	$mail->Subject = "Compte rendu de votre appel";
	$mail->WordWrap   = 80;
	$content = "<h3><b>Bonjour,</b></h3><p>Suite a votre appel, nous vous envoyons le recapitulatif de votre demande.<p><p>Veuillez cliquer sur ce <h2><a href='https://www.google.fr'>lien</a></h2> pour retrouver votre recapitulatif.</p><br/><br/><p>Cordialement,</p><br/><h3>SAV'U</h3><p>Creation de SAV sur mesure</p><p></p>savucactus@gmail.com<p>Tel : 01 02 03 04 05 - Mob : 06 12 34 45 78</p>"; $mail->MsgHTML($content);
	$mail->IsHTML(true);
	if(!$mail->Send()) 
	echo "Problem sending email.";
	else 
	echo "email sent.";
?>
