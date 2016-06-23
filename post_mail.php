<?php
$errors = [];

if (!array_key_exists('nom', $_POST) || $_POST['nom'] =='') {
	$errors['nom'] = "vous n'avez pas renseigné votre nom";
}

if (!array_key_exists('prenom', $_POST) || $_POST['prenom'] =='' ) {
	$errors['prenom'] = "vous n'avez pas renseigné votre prenom";
}

if (!array_key_exists('email', $_POST) || $_POST['email'] =='' || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	$errors['email'] = "vous n'avez pas renseigné un email valide";
}

if (!array_key_exists('tel', $_POST) || $_POST['tel'] =='' ) {
	$errors['tel'] = "vous n'avez pas renseigné votre téléphone";
}


if (!array_key_exists('adresse', $_POST) || $_POST['adresse'] =='' ) {
	$errors['adresse'] = "vous n'avez pas renseigné votre adresse";
}


if (!array_key_exists('message', $_POST) || $_POST['message'] =='' ) {
	$errors['message'] = "vous n'avez pas renseigné votre message";
}


session_start();
if (!empty($errors)) {
	
	$_SESSION['errors'] = $errors;
	header('Location: index.php#contact');

}else {
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$tel = $_POST['tel'];
	$prenom = $_POST['prenom'];
	$msg = $_POST['message'];

	

	// message
	$message = "
		<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html  xmlns:v='urn:schemas-microsoft-com:vml'>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<meta name='viewport' content='width=device=width; initial-scale=1'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,300,700' rel='stylesheet' type='text/css'>

	</head>
	<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
		<table bgcolor='#27333A' width='100%' border='0' cellpadding='0' cellspacing='0'>
			<tbody>
				<tr><td>
				<table align='center' width='90%' border='0' cellpadding='0' cellspacing='0'>
					<tbody>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='text-align: center;' align='center'><a href='http://ksa.ma/'><img width='150' border='0' src='http://ksa.ma/img/logoksa.png' alt='logo_ksa.ma'></a></td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td align='center'><table bgcolor='#0FA184' width='255' border='0' cellpadding='0' cellspacing='0'><tr><td height='4' style='font-size: 4px; line-height: 4px'>&nbsp;</td></tr></table></td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='font-family: Roboto,Helvetica; text-align: center; font-size: 30px; color: #fff; line-height: 28px;' align='center'> Formulaire de contact</td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
					</tbody>
				</table>
			</td></tr>
			</tbody>
		</table>
		<table bgcolor='#E5E7E7' width='100%' border='0' cellpadding='0' cellspacing='0'>
			<tbody>
				<tr><td>
				<table align='center' width='90%' border='0' cellpadding='0' cellspacing='0'>
					<tbody>
						
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='font-family: Roboto,Helvetica; text-align: center; font-size: 30px; color: #000; line-height: 28px;' align='center'>Informations sur clients :</td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='font-family: Roboto,Helvetica; text-align: left; font-size: 20px; color: #0FA184; line-height: 20px;' align='left'>Coordonnées du client : </td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'>
						<strong>Nom : </strong> ".$nom."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Email :</strong> ".$email."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Adresse :</strong> ".$adresse."
						</td></tr>
						
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Téléphone :</strong> ".$tel."
						</td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>

						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Message :</strong> ".$msg."
						</td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
					</tbody>
				</table>
			</td></tr>
			</tbody>
		</table>
	</body>
</html>
	";
	$subject = "Demande de course : ".$_POST['nom'];
	$to = 'contact.ksa.info@gmail.com'.' ,'; 
	$to  .= 'ksa.mandoubi@gmail.com'; 
	

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To:karim nandoubi <contact.ksa.info@gmail.com>' . "\r\n";
	$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n";

	mail($to,$subject,$message,$headers);



	$_SESSION['success']= 1;
	header('Location: index.php#contact');
}

?>