<?php
session_start();
include"header.php"; ?>
			<!-- container -->
			<div class="clear"></div>
			<main class="content">
				<div class="container">
					<h1 class="text-center center-block">PARTICULIER</h1>
					<div class="row">
						<div class="col-md-12">
							<?php if (array_key_exists('errors', $_SESSION)): ?>
								<div class="alert alert-danger"><?= implode('<br>',$_SESSION['errors']); ?></div>
							<?php endif; ?>
							<?php if (array_key_exists('success', $_SESSION)): ?>
								<div class="alert alert-success">votre formulaire a été bien envoyé</div>
							<?php endif; ?>
						</div>
						<div class="col-md-6 center-block" id="contact">
							<form method="POST" action="post_mail_prtc.php">
								<h4>Coordonnées :</h4>
							        <div class="form-group">
							            <input type="text" class="form-control" placeholder="Nom & Prénom" name="nom">
							        </div>
							        <div class="form-group">
							            <input type="email" class="form-control" placeholder="Email" name="email">
							        </div>
							        <div class="form-group">
							            <input type="text" class="form-control" placeholder="Adresse" name="adresse">
							        </div>
							        <div class="form-group">
							            <input type="text" class="form-control" placeholder="Ville" name="ville">
							        </div>
							        <div class="form-group">
							            <input type="text" class="form-control" placeholder="Téléphone" name="tel">
							        </div>
						        
						       	<h4>Informations sur la livraison :</h4>
						       		<div class="form-group">
							            <input type="text" class="form-control" placeholder="Point de départ" name="pointd">
							        </div>
							        <div class="form-group">
							            <input type="text" class="form-control" placeholder="Point de livraison" name="pointl">
							        </div>
							        <div class="form-group">
							            <input type="text" class="form-control" placeholder="Heure de livraison" name="heurel">
							        </div>

							    <h4>Natures des marchandises à transporter :</h4>
							    	<div class="form-group">
							            <textarea class="form-control" rows="3" placeholder="Conditionnement" name="cond"></textarea>
							        </div>
							        <div class="form-group">
							            <textarea class="form-control" rows="3" placeholder="Informations complémentaires" name="info"></textarea>
							        </div>
							    
						        <button type="submit" class="btn-space btn btn-primary">Envoyer</button>

						    </form>
						</div>
						<div class="col-md-6 center-block">
							<h4>Contactez-Nous :</h4>
							<span class="glyphicon glyphicon-map-marker"></span><span class="adress">17, Saria Ibnou Zounaim Palemier Casablanca</span><br>
							<span class="glyphicon glyphicon-earphone"></span><span class="adress">06 66 80 99 11</span><br>
							<span class="glyphicon glyphicon-envelope"></span><span class="adress">ksa.mandoubi@gmail.com</span><br>
							<div id="map-canvas" class="mapcanvas2"></div>
						</div>
					</div>
				</div>
			</main>
			<div class="clear"></div>
<?php include"footer.php";
unset($_SESSION['errors']);
unset($_SESSION['success']);
 ?>