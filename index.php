<?php 
session_start();
include"header.php";
?>
			<!-- container -->
			<div class="clear"></div>
			<main class="content">
				<div class="container text-center center-block" id="apropos">
					<h2 class="title">courses et livraisons entreprise et particulier</h2><br><br>
					<div class="row center-block apropos">
						<div class="col-md-3 apropos_left">
						 	<ul class="ch-grid">
								<li>
									<div class="ch-item ch-img-1">				
										<div class="ch-info-wrap">
											<div class="ch-info">
												<div class="ch-info-front ch-img-1"></div>
												<div class="ch-info-back">
													<h3>Vous n'avez pas le temps</h3>
													<p>pour faire vous courses ?</p>
												</div>	
											</div>
										</div>
									</div>
								</li>
							</ul>
						 	<div class="texts">Vous n'avez pas le temps<br> pour faire vos courses ?</div >
						</div>
						<div class="col-md-1"><img src="img/fleche.png" class="fleche" alt=""></div>
						<div class="col-md-3">
						 	<ul class="ch-grid">
								<li>
									<div class="ch-item ch-img-2">				
										<div class="ch-info-wrap">
											<div class="ch-info">
												<div class="ch-info-front ch-img-2"></div>
												<div class="ch-info-back">
													<h3>ksa.ma</h3>
													<p></p>
												</div>	
											</div>
										</div>
									</div>
								</li>
							</ul>
						 	<div class="texts">Vous pouvez commander votre<br> course directement sur le site<br> ou nous faire votre demande par téléphone.</div>
						</div>
						<div class="col-md-1"><img src="img/fleche.png" class="fleche" alt=""></div>
						<div class="col-md-3">
						 	<ul class="ch-grid">
								<li>
									<div class="ch-item ch-img-3">				
										<div class="ch-info-wrap">
											<div class="ch-info">
												<div class="ch-info-front ch-img-3"></div>
												<div class="ch-info-back">
													<h3>Nous engageons </h3>
													<p> de faire vos courses</p>
												</div>	
											</div>
										</div>
									</div>
								</li>
							</ul>
						 	<div class="texts">Nous nous engageons à faire vos <br>courses partout dans la ville.</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="container-fluid categorie" id="services">
					<div class="row center-block">
						<h4 class="text-center slg">Ksa vous offre un service de coursiers à Casablanca, pour les entreprises et/ou les particuliers.<br>100% disponible pour répondre à vos besoins :</h4>
						<div class="col-md-6 col-xs-12 col-sm-6 center-block text-center">
							<img src="img/bike.png" class="" alt="">
							<h5>Livraison Express de plis, colis à Casablanca</h5>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-6 center-block text-center">
							<img src="img/flyer.png" class="" alt="">
							<h5>Distribuer vos flyers, magazine, journaux, échantillons, factures…</h5>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-6 center-block text-center">
							<img src="img/paper.png" class="" alt="">
							<h5>Légaliser des documents à la commune urbaine</h5>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-6 center-block text-center">
							<img src="img/cheque.png" class="" alt="">
							<h5>Déposer un chèque ou un dossier de visa</h5>
						</div>
							
					</div>	
				</div>
				<div class="clear"></div>
				<div class="container-fluid bande" id="philosophie">
					<!-- <div class="row center-block text-center">
						<img src="img/ksa_logoo.png" class="" alt="">
					</div> -->
					<div class="clear"></div>
					<div class="row center-block text-center">
						<div class="col-md-3 col-xs-12 col-sm-6  center-block text-center">
							<img src="img/pratique.png" class="" alt="">
							<h5>PRATIQUE</h5>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-6  center-block text-center">
							<img src="img/save.png" class="" alt="">
							<h5>ÉCONOMIQUE</h5>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-6  center-block text-center">
							<img src="img/eco.png" class="" alt="">
							<h5>ÉCOLOGIQUE</h5>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-6  center-block text-center">
							<img src="img/secure.png" class="" alt="">
							<h5>SÉCURISÉ</h5>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="container-fluid textblock">
					<div class="row center-block ">
						<div class="col-md-1  center-block "></div>
						<div class="col-md-10  center-block ">
							<p>Vous recherchez un coursier en urgence ou un coursier disponible de façon régulière et programmée ? Nous disposerons toujours d’un coursier à votre service !</p>

							<p>Quelle que soit la nature de la livraison à effectuer, le plus grand soin sera apporté à ce que vous nous confiez.Que ce soit un simple pli, un colis, un objet précieux ou des documents sensibles, nous vous assurons un service irréprochable, doublé d’une confidentialité exemplaire. </p>			
						
							<p>Simple et Rapide, Commandez votre coursier en urgence sur <strong>www.ksa.ma</strong>, par mail ou par un simple appel <strong>06 66 809 911 !</strong></p>
						
							<p>Paiement à la course ou ouverture de compte pour les Professionnels.</p>
						
							<p>Nous restons à votre écoute afin de trouver une solution à vos demandes, aussi spécifiques soient-elles. </p>
						</div>
						<div class="col-md-1  center-block "></div>
					</div>
				</div>





				<div class="container"  id="contact">
					<div class="row">
						<br>
						<div class="col-md-12">
							<?php if (array_key_exists('errors', $_SESSION)): ?>
								<div class="alert alert-danger"><?= implode('<br>',$_SESSION['errors']); ?></div>
							<?php endif; ?>
							<?php if (array_key_exists('success', $_SESSION)): ?>
								<div class="alert alert-success">votre formulaire a été bien envoyé</div>
							<?php endif; ?>
							<h3 class="text-center">CONTACTEZ-NOUS</h3>
						</div>
						<div class="col-md-6 center-block">
							<form method="POST" action="post_mail.php">
								
							        <div class="form-group">
							        <label for="nom">Nom : </label>
							            <input type="text" class="form-control"  name="nom" id="nom">
							        </div>
							        <div class="form-group">
							        <label for="prenom">Prénom : </label>
							            <input type="text" class="form-control"  name="prenom" id="prenom">
							        </div>
							        <div class="form-group">
							        <label for="email">Email : </label>
							            <input type="email" class="form-control"  name="email" id="email">
							        </div>
							        <div class="form-group">
							        <label for="tel">Téléphone : </label>
							            <input type="text" class="form-control"  name="tel" id="tel">
							        </div>
							        <div class="form-group">
							        <label for="adresse">Adresse : </label>
							            <input type="text" class="form-control"  name="adresse" id="adresse">
							        </div>
							        <div class="form-group">
							        <label for="message">Message : </label>
							            <textarea rows="6" class="form-control"  name="message" id="message"></textarea>
							        </div>
						        <button type="submit" class="btn-space btn btn-primary">Envoyer</button>

						    </form>
						</div>
						<div class="col-md-6 center-block">
							<br>
							<div class="espacen"><span class="glyphicon glyphicon-globe"></span><span class="adress"><a href="http://ksa.ma" target="_blank">www.ksa.ma</a></span></div>
							<div class="espace"><span class="glyphicon glyphicon-map-marker"></span><span class="adress">17, Saria Ibnou Zounaim Palmier Casablanca</span></div>
							<div class="espace"><span class="glyphicon glyphicon-earphone"></span><span class="adress">06 66 80 99 11</span></div>
							<div class="espace"><span class="glyphicon glyphicon-envelope"></span><span class="adress">ksa.mandoubi@gmail.com</span></div>
							<div id="map-canvas" class="mapcanvas1"></div>
						</div>
					</div>
				</div>

			</main>
			
			<div class="clear"></div>
<?php 
	include"footer.php";
	unset($_SESSION['errors']);
	unset($_SESSION['success']);
?>