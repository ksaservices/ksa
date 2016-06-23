<?php
$errors = [];

if (!array_key_exists('nom', $_POST) || $_POST['nom'] =='') {
	$errors['nom'] = "vous n'avez pas renseigné votre nom & prénom";
}


if (!array_key_exists('email', $_POST) || $_POST['email'] =='' || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	$errors['email'] = "vous n'avez pas renseigné un email valide";
}

if (!array_key_exists('adresse', $_POST) || $_POST['adresse'] =='' ) {
	$errors['adresse'] = "vous n'avez pas renseigné votre adresse";
}

if (!array_key_exists('ville', $_POST) || $_POST['ville'] =='' ) {
	$errors['ville'] = "vous n'avez pas renseigné votre ville";
}

if (!array_key_exists('tel', $_POST) || $_POST['tel'] =='' ) {
	$errors['tel'] = "vous n'avez pas renseigné votre tel";
}

if (!array_key_exists('pointd', $_POST) || $_POST['pointd'] =='' ) {
	$errors['pointd'] = "vous n'avez pas renseigné votre point depart";
}

if (!array_key_exists('pointl', $_POST) || $_POST['pointl'] =='' ) {
	$errors['pointl'] = "vous n'avez pas renseigné votre point livraison";
}

if (!array_key_exists('heurel', $_POST) || $_POST['heurel'] =='' ) {
	$errors['heurel'] = "vous n'avez pas renseigné votre point livraison";
}


session_start();
if (!empty($errors)) {
	
	$_SESSION['errors'] = $errors;
	header('Location: particulier.php#contact');

}else {
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$tel = $_POST['tel'];
	$pointd = $_POST['pointd'];
	$pointl = $_POST['pointl'];
	$heurel = $_POST['heurel'];
	$info = $_POST['info'];
	$cond = $_POST['cond'];
	

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
						<tr><td style='font-family: Roboto,Helvetica; text-align: center; font-size: 30px; color: #fff; line-height: 28px;' align='center'> Demande de course</td></tr>
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
						<strong>Nom & prénom : </strong> ".$nom."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Email :</strong> ".$email."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Adresse :</strong> ".$adresse."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Ville : </strong>".$ville."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Téléphone :</strong> ".$tel."
						</td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='font-family: Roboto,Helvetica; text-align: left; font-size: 20px; color: #0FA184; line-height: 20px;' align='left'>Informations sur la livraison : </td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Point de départ :</strong> ".$pointd."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Point de livraison :</strong> ".$pointl."
						</td></tr>
						<tr><td style='font-weight:400;font-family: Roboto,Helvetica; text-align: left;color: #000; line-height: 30px;' align='left'> 
						<strong>Heure de livraison :</strong> ".$heurel."
						</td></tr>

						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr><td style='font-family: Roboto,Helvetica; text-align: left; font-size: 20px; color: #0FA184; line-height: 20px;' align='left'>Natures des marchandises à transporter : </td></tr>
						<tr><td height='30' style='font-size: 30px; line-height: 30px'>&nbsp;</td></tr>
						<tr>
							<td>
								<table width='300' border='0' cellpadding='0' cellspacing='0' align='left'>
									<tbody>
									<tr><td style='font-weight: 500;font-family: Roboto,Helvetica; text-align: left; font-size: 18px; color: #000; line-height: 30px;' align='center'>Conditionnement : </td></tr>
										<tr>
											<td style='text-align: justify;'>".$info."</td>
										</tr>
									</tbody>
								</table>
								<table width='30' border='0' cellpadding='0' cellspacing='0' align='left'><tbody><tr><td>&nbsp;</td></tr></tbody></table>
								<table width='300' border='0' cellpadding='0' cellspacing='0' align='left'>
									<tbody>
									<tr><td style='font-weight: 500;font-family: Roboto,Helvetica; text-align: left; font-size: 18px; color: #000; line-height: 30px;' align='center'>Informations complémentaires : </td></tr>
										<tr>
											<td style='text-align: justify;'>".$cond."</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
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
	header('Location: professionel.php#contact');
}

?>