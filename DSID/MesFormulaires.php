<?php 

	function accueil() { 

		session_start();


		?>
		<!DOCTYPE html>
		<html>
		<meta charset="utf-8">
		<head>
			<link rel="stylesheet" href="css/accueil.css?v=<?php echo time(); ?>">
			<title>Accueil</title>
		</head>
		<body>

			<div id="entete">
				<div id="logo">
					<img src="image/logo.jpg">
				</div>
				<div id="titre">
					<h1>Projet de programmation sécurisée</h1>
					<p>Gestion des demandes de stage</p>
				</div>
			</div>

			<div id="menu">
				<ul>
					<li><a href= "deconnexion_form1.php" target="zone">accueil</a></li>
					<!-- <li><a href="a_propos.php" target="zone">à propos</a></li> -->
					<li><a href="services.php" target="zone">services</a></li>
					<li><a href="contact.php" target="zone">contact</a></li>
					
				</ul>
			</div>

						<iframe src="deconnexion_form1.php" id="corps" name="zone"></iframe>

			<div id="pied">
				<pre>www.esp.sn	 	copyright &copy; avril 2024</pre>
			</div>

		</body>
		</html>
		<?php
	}

	function contact() {
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
		<body>

		
		<div class="table">
			<form action="" method="POST">
				<table border="2px solide">
					<caption><h2>Nous contacter</h2></caption>
					<tr>
						<td class="name"><input type="text" name="name" placeholder="Tapez votre nom ici !" ></td>
						<td class="email"><input type="text" name="email" placeholder="Tapez votre adresse e-mail ici !"></td>
					</tr>
					<tr>
						<td class="col" colspan="2"><textarea minlength="10" maxlength="200" wrap="soft" name="message" placeholder="Tapez votre message ici !!!"></textarea></td>
					</tr>
					<tr>
						<td class="submit" colspan="2"><input type="submit" name="envoi" value="Envoyer"></td>
					</tr>
				</table>	
			</form>	
		</div>

		<?php  
			if (isset($_POST['envoi'])) {
				if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) {
					$destinataire = 'ibrahimadiagneseck@esp.sn';
					$sujet = htmlspecialchars($_POST['name']);
					$email = htmlspecialchars($_POST['email']);
					$message = htmlspecialchars($_POST['message']);

					$message = wordwrap($message, 70, "\r\n");

					$headers = [
						"From" => "gestion_de_stage@douanes.sn",
						"Reply-To" => "$email"
					];

					mail($destinataire, $sujet, $message, $headers);
				}
			}
			
		?>
		

		<div class="info">

			<div class="info1">
				<h2>Adresse :</h2>
				<h5>Université Cheikh Anta Diop, Dakar 10700</h5>
			</div>

			<div class="info2">
				<h2>Telephone :</h2>
				<h5>Telephone : 33 800 00 01</h5>
				<h5>FAX : 33 800-00-00</h5>
			</div>

			<div class="info3">
				<h2>E-mail :</h2>
				<h5>email@esp.sn</h5>
			</div>
			
		</div>
		

		</body>

		<?php
	}

	function services() {
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/services.css?v=<?php echo time(); ?>">
		<body>

			<div class="table">
				<table>
			   <caption><h2>Les fonctionnalités de gestion des stages</h2></caption>

			   <tr>
			   		<th class="border"></th>
			   		<th colspan="3" class="border"><h3>Les acteurs</h3></th>
			   </tr>
			   <tr>
			   		<th rowspan="13" class="border"><h3>Les fonctionnalités</h3></th>
			    	<th class="border">Stagiaire</th>
			    	<th class="border">Encadrant</th>
			    	<th class="border">Administrateur</th>
			   </tr>
			   <tr>
			   		
			    	<td class="border">Se connecter</td>
			    	<td class="border">Se déconnecter</td>
			    	<td class="border">Se déconnecter</td>
			   </tr>
			   <tr>
			    	<td class="border">Créer compte</td>
			    	<td class="border">Consulter</td>
			    	<td class="border">Ajouter</td>
			   </tr>
			   <tr>
			    	<td class="border">Supprimer compte</td>
			    	<td class="border">Rechercher</td>
			    	<td class="border">Supprimer</td>
			   </tr>
			   <tr>
			    	<td class="border">Changer mot de passe</td>
			    	<td class="border">Définir planning</td>
			    	<td class="border">Mettre à jour</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher accueil</td>
			    	<td class="border">Suivre planning</td>
			    	<td class="border">Consulter</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher à propos</td>
			    	<td class="border">Définir étape</td>
			    	<td class="border">Rechercher</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher services</td>
			    	<td class="border">Valider étape</td>
			    	<td class="border">Affecter bureau</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher contact</td>
			    	<td class="border">Clôturer stage</td>
			    	<td class="border">Imprimer carte stagiaire</td>
			   </tr>
			   <tr>
			    	<td rowspan="4" class="border"></td>
			    	<td class="border">Changer mot de passe</td>
			    	<td class="border">Imprimer attestation</td>
			   </tr>
			   <tr>
			   		<td rowspan="3" class="border"></td>
			    	<td class="border">Imprimer liste stage</td>
			   </tr>
			   <tr>
			    	<td class="border">Imprimer liste stagiaire</td>
			   </tr>
			   <tr>
			    	<td class="border">Changer mot de passe</td>
			   </tr>

			</table>
			</div>
			
			
		</body>

		<?php
	}


	function inscription_form() { 
	
		session_start();
		$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
		session_destroy();
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/inscription_form.css?v=<?php echo time(); ?>">
		<body>

	
		<form action="inscription.php" method="REQUEST">

				<div class="formContainer">

					<div class="formSection">

						<h1>Inscription</h1>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/id.png">
							</div>
							<input type="number" name="Matricule_personnel" id="userName" placeholder="Entrez votre identifiant" value="<?=(isset($_REQUEST['Matricule_personnel'])&&$_REQUEST['Matricule_personnel']!='')?$_REQUEST['Matricule_personnel']:'';?>" autocomplete="off">
						</div>


						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/user.png">
							</div>
							<input type="text" name="Login" id="userName" placeholder="Entrez votre pseudonyme" value="<?=(isset($_REQUEST['Login'])&&$_REQUEST['Login']!='')?$_REQUEST['Login']:'';?>" autocomplete="off">
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe" id="userPassword" placeholder="Entrez votre mot de passe" value="<?=(isset($_REQUEST['Mot_de_passe'])&&$_REQUEST['Mot_de_passe']!='')?$_REQUEST['Mot_de_passe']:'';?>" autocomplete="off">
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe1" id="userPassword" placeholder="Mot de passe à nouveau" value="<?=(isset($_REQUEST['Mot_de_passe1'])&&$_REQUEST['Mot_de_passe1']!='')?$_REQUEST['Mot_de_passe1']:'';?>" autocomplete="off">
						</div>

						<div class="btnRow">
							<input type="submit" value="S'Inscrire" class="btn" name="envoi" id="loginBtn">
						</div>

					</div>
					
				</div>

		</form>
			

		</body>
		<?php 
	} 



	function connexion_form() { 


		session_start();
		$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
		session_destroy();
		?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/connexion_form.css?v=<?php echo time(); ?>">
			<!-- <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap_min.css">
			<script src="bootstrap/js/bootstrap_min.js"></script>
			<script src="bootstrap/js/jquery.js"></script> -->
			<body>
				
				
			<form action="connexion.php" method="REQUEST">
				
					<div class="formContainer">
						
						<div class="formSection">

							<h1>Connexion</h1>

							<div class="inputRow">
								<div class="inputIcon">
									<img src="image/user.png">
								</div>
								<input type="text" name="Login" id="userName" placeholder="Entrez votre pseudonyme" value="<?=(isset($_REQUEST['Login'])&&$_REQUEST['Login']!='')?$_REQUEST['Login']:'';?>">
							</div>

							<div class="inputRow">
								<div class="inputIcon">
									<img src="image/lock.png">
								</div>
								<input type="password" name="Mot_de_passe" id="userPassword" placeholder="Entrez votre mot de passe" value="<?=(isset($_REQUEST['Mot_de_passe'])&&$_REQUEST['Mot_de_passe']!='')?$_REQUEST['Mot_de_passe']:'';?>">
							</div>

							<br>

							<div class="btnRow">
								<input type="submit" value="Se connecter" class="btn" name="envoi" id="loginBtn">
							</div>
							<div>
								<a href="modifier_password_form.php" id="forgotPassword">Mot de passe oublié ?</a>
								<a href="inscription_form.php" id="link">S'Inscrire !</a>
							</div>
							
						</div>

					</div>

			
			</form>
			

			</body>
		<?php 
	} 






	function deconnexion_form1() {

		session_start();


		if (empty($_SESSION['Mot_de_passe'])) { // Si la session password n'est pas actif sur le site
		 	header('Location: connexion_form.php');
		}

		if (isset($_SESSION['Mot_de_passe_admin'])) { 
		 	header('Location: deconnexion_admin_form1.php');
		}

		?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1.css?v=<?php echo time(); ?>">
			<body>
				<iframe src="deconnexion_form1_1.php" id="corps" name="zone1"></iframe>
			</body>
		<?php  
	} 



	function deconnexion_form1_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			require('Month.php');
	  		require('Events.php');
	  		$events = new Events();
	  	 	$month = new Month($_GET['month'] ?? null, $_GET['year'] ?? null); 

	  	 	$start = $month->getStartingDay();
	  	 	$start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');

	  	 	$weeks = $month->getWeeks();
	  	 	$end = (clone $start)->modify('+'.(6 + 7 * ($weeks - 1)).' days');
	  	 	$events = $events->getEventsBetweenByDay($start, $end);
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>

				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><h1 id="titre">Tableau de bord</h1></li>
					
						        <li class="menu-item" id="haut"><a href="deconnexion_form1_2.php" target="zone1"><button><img src="image/task.png">&nbsp;&nbsp;Etape du planning</button></a></li>
						        <li class="menu-item"><a href="deconnexion_form1_3.php" target="zone1"><button><img src="image/calendar.png">&nbsp;&nbsp;Suivi du stage</button></a></li>
						        <li class="menu-item"><a href="deconnexion_form1_4.php" target="zone1"><button><img src="image/cloture.png">&nbsp;&nbsp;Clôturer un stage</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion_form1_2_1.php" target="zone1"><button><img src="image/compte.png">&nbsp;&nbsp;Mon compte</button></a></li>
						        <li class="menu-item"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>

			  </header>

			  <div class="corps">

			  	<div class="calendar">
			 	
			 	<h3>Mon calendrier</h3>

			  	<!--$month->getWeeks() : Affiche le nombre de semaine-->

			  	<div class="d-flex flex-row align-items-center justify-content-between mx-sm-3">

			  		<h4><?= $month->toString(); ?></h4>

			  		<a href="deconnexion_form1_3_2.php" class="calendar__button">+</a>

			  		<div>
			  			<a style="background-color: #787d34; border: 3px solid azure; border-radius: 20px;" href="deconnexion_form1_3.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class="btn btn-dark">&lt;&lt;</a>
			  			<a style="background-color: #787d34; border: 3px solid azure; border-radius: 20px;" href="deconnexion_form1_3.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-dark">&gt;&gt;</a>
			  		</div>
			  	</div>

			  	<table class="calendar__table calendar__table--<?= $weeks; ?>weeks">
			  		<?php for ($i = 0; $i < $weeks; $i++): ?>
			  			<tr>

			  				<?php foreach($month->days as $k => $day): 
			  					$date = (clone $start)->modify("+".($k + $i * 7)." days");
			  					$eventsForDay = $events[$date->format('Y-m-d')] ?? [];
			  					$isToday = date('Y-m-d') === $date->format('Y-m-d');
			  					?>
			  				<td class="<?= $month->withinMonth($date)? '':'calendar__othermonth'; ?> <?= $isToday? 'today':''; ?>">

			  					<?php if ($i === 0): ?> 
			  						<div class="calendar__weekday"><?= $day; ?></div>
			  					<?php endif; ?>

			  					<a class="calendar__day" href="deconnexion_form1_3_2.php?date=<?= $date->format('Y-m-d'); ?>"><?= $date->format('d'); ?></a>

			  					<?php foreach ($eventsForDay as $event): ?>
			  						<div class="calendar__event">
			  							<?= (new DateTime($event['Date_debut']))->format('H:i'); ?> - <a href="deconnexion_form1_3_1.php?Id_evenement=<?= $event['Id_evenement']; ?>"><?= htmlentities($event['Titre']); ?></a>
			  						</div>
			  					<?php endforeach; ?>

			  				</td>
			  				<?php endforeach; ?>
			  			</tr>
			  		<?php endfor; ?>
			  	</table>
			  	<!-- <a href="deconnexion_form1_3_2.php" class="calendar__button">+</a> -->
			  	</div>

			  </div>

			</body>
			<?php
	}

	function deconnexion_form1_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			if ($_REQUEST['Id_planning']??'') {
				$_SESSION['Id_planning'] = $_REQUEST['Id_planning']; 
			}
			?>

			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1_2.css?v=<?php echo time(); ?>">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						       
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			  <div class="form">


					<h3><p>Définir un planning</p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_2.php">

							<input hidden="" type="number" name="Matricule_personnel" value="<?= $_SESSION['Matricule_personnel']; ?>">
							<input hidden="" type="number" name="Id_planning" value="<?= isset($_REQUEST['Id_planning'])?$_REQUEST['Id_planning']:'';?>">

							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTitre">Titre</label>
									        </div>

									        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîï-ðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomTitre" name="titre" placeholder="Titre de la tâche" required="" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['titre'])&&$_REQUEST['titre']!='')?$_REQUEST['titre']:'';?>">
									        <?php if (!isset($_REQUEST['titre1'])): ?>
									        	<span>au moin trois (3) lettres ou chiffre!</span>
									       	<?php endif ?>

									       	<?php if (isset($_REQUEST['titre1'])): ?>
									        	<p><?= $_REQUEST['titre1']; ?></P>
									       	<?php endif ?>
									        
									    </div>
									    
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateDebut">Démarrage</label>
									        </div>

									        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateDebut" name="Date_debut" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['Date_debut'])&&$_REQUEST['Date_debut']!='')?$_REQUEST['Date_debut']:date('Y-m-d');?>">

									        <?php if (!isset($_REQUEST['Date_debut1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['Date_debut1'])): ?>
									        	<p><?= $_REQUEST['Date_debut1']; ?></P>
									       	<?php endif ?>


									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateFin">Fin</label>
									        </div>

									       	<input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateFin" name="Date_fin" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['Date_fin'])&&$_REQUEST['Date_fin']!='')?$_REQUEST['Date_fin']:date('Y-m-d');?>">

									       	<?php if (!isset($_REQUEST['Date_fin1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['Date_fin1'])): ?>
									        	<p><?= $_REQUEST['Date_fin1']; ?></P>
									       	<?php endif ?>
									        

								     	</div>
							   		</div>	


							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemarrage"></label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="first" id="validationCustomDemarrage" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['first'])&&$_REQUEST['first']!='')?$_REQUEST['first']:'08:00';?>" >
									        <?php if (!isset($_REQUEST['first1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['first1'])): ?>
									        	<p><?= $_REQUEST['first1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFin"></label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="last" id="validationCustomFin" aria-describedby="inputGroupPrepend" value="<?=(isset($_REQUEST['last'])&&$_REQUEST['last']!='')?$_REQUEST['last']:'20:00';?>" >
									        <?php if (!isset($_REQUEST['last1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['last1'])): ?>
									        	<p><?= $_REQUEST['last1']; ?></P>
									       	<?php endif ?>
									        

								     	</div>
							   		</div>	

							   		<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <label class="input-group-text" id="inputGroupPrepend" for="validationCustomTache">Tâche</label>
									        

									        <textarea class="form-control"  maxlength="250" name="tache" id="validationCustomTache" placeholder="Tâche" aria-describedby="inputGroupPrepend"  style="resize: none; height: 80px;" required=""><?=(isset($_REQUEST['tache'])&&$_REQUEST['tache']!='')?$_REQUEST['tache']:'';?></textarea>
									        <?php if (!isset($_REQUEST['tache1'])): ?>
									        	<span>Renseignez une tâche!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['tache1'])): ?>
									        	<p><?= $_REQUEST['tache1']; ?></P>
									       	<?php endif ?>

									    </div>
							   		</div>	

							</div>

							</div>

							

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
		 					
								    		<input type="submit" class="bouton" name="envoi" value="Enregistrer le planning">

									    </div>

							   		</div>	

							</div>
					</form>

					<form action="rechercher.php" method="REQUEST" class="form_r4_2">			      	

		        		        <div>
			     			     
				     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
				     			    <input type="submit" name="valider_planning" value="envoyer" id="validationCustomBtn">

			                    </div>

			       	</form>




			       		<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
						$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

				

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_planning'])) {
										
							$recherche = htmlspecialchars($_REQUEST['valider_planning']);
							

							$req = 'SELECT * FROM planning WHERE Titre LIKE  "%'.$recherche.'%" OR Tache LIKE  "%'.$recherche.'%" OR Date_debut LIKE  "%'.$recherche.'%" OR Date_fin LIKE  "%'.$recherche.'%" ORDER BY Date_debut ASC';
						

							$result = mysqli_query($conn, $req);
							?>

								<table class="table">
								<tr>
									<th class="th">-|| Titre ||-</th>
									<th class="th">-|| Tâche ||-</th>
									<th class="th">-|| Date de debut ||-</th>
									<th class="th">-|| Date de fin ||-</th>
									<th class="th">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{?>
								<tr>
									<td class="td"><?=$row['Titre'];?></td>
									<td class="td"><?=$row['Tache'];?></td>
									<td class="td"><?=$row['Date_debut'];?></td>
									<td class="td"><?=$row['Date_fin'];?></td>
									<td class="td">
										<input type="button" class="bouton1_1" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_form1_2_modifier.php?Id_planning=<?=$row['Id_planning'];?>&Matricule_personnel=<?=$row['Matricule_personnel'];?>&titre=<?=$row['Titre'];?>&tache=<?=$row['Tache'];?>&Date_debut=<?=$row['Date_debut'];?>&Date_fin=<?=$row['Date_fin'];?>';">
										<input type="button" class="bouton1_1" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_form1_2_supprimer.php?Id_planning=<?=$row['Id_planning'];?>&Matricule_personnel=<?=$row['Matricule_personnel'];?>;?>';">
									</td>
								</tr>
								
								<?php
							}


						} else {
							
							$req = "SELECT * FROM planning ORDER BY Date_debut ASC";
							$result = mysqli_query($conn, $req);
							?>

								<table class="table">
								<tr>
									<th class="th">-|| Titre ||-</th>
									<th class="th">-|| Tâche ||-</th>
									<th class="th">-|| Date de debut ||-</th>
									<th class="th">-|| Date de fin ||-</th>
									<th class="th">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{?>
								<tr>
									<td class="td"><?=$row['Titre'];?></td>
									<td class="td"><?=$row['Tache'];?></td>
									<td class="td"><?=$row['Date_debut'];?></td>
									<td class="td"><?=$row['Date_fin'];?></td>
									<td class="td">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_form1_2_modifier.php?Id_planning=<?=$row['Id_planning'];?>&Matricule_personnel=<?=$row['Matricule_personnel'];?>&titre=<?=$row['Titre'];?>&tache=<?=$row['Tache'];?>&Date_debut=<?=$row['Date_debut'];?>&Date_fin=<?=$row['Date_fin'];?>';">
										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_form1_2_supprimer.php?Id_planning=<?=$row['Id_planning'];?>&Matricule_personnel=<?=$row['Matricule_personnel'];?>;?>';">
									</td>
								</tr>
								
								<?php
							}
						}




						mysqli_close($conn);

					?>
							</table>

						 	

						
				</div>	

			</body>
			<?php
	}

	function deconnexion_form1_2_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_2_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php" target="zone1"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="deconnexion_form1_2_1_1.php" target="zone1"><button class="solo">Modifier mon compte</button></a></li>
						        <li class="menu-item"><a href="deconnexion_form1_2_1_2.php" target="zone1"><button class="solo">Supprimer mon compte</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion.php" target="zone1"><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
						        
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_form1_2_1_1() {

			if (session_status() === PHP_SESSION_NONE) {
			    session_start();
			}
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			if (isset($_REQUEST['LN'])) {
				$_SESSION['Login'] = $_REQUEST['LN'];
				
			}
			if (isset($_REQUEST['MN'])) {
				$_SESSION['Mot_de_passe'] = $_REQUEST['MN'];
				
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_2_1_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_2_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>


			  <div class="form">

					<h3><p>Changez vos coordonnées</p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_2_1_1.php">

<!-- ggg -->
							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomLogin">Login</label>
									        </div>
									        
									 
									        <input type="text" pattern="[A-Za-z0-9'àáâãäåèéêëìíîï-ðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomLogin" name="Login" required="" aria-describedby="inputGroupPrepend" placeholder="Login" value="<?=$_REQUEST['Login']??$_SESSION['Login'];?>">
									        <?php if (!isset($_REQUEST['Login1'])): ?>
									        	<span>* : Renseignez un login!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['Login1'])): ?>
									        	<p><?= $_REQUEST['Login1']?></P>
									       	<?php endif ?>


									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomMatricule">Matricule</label>
									        </div>
									 
									        <input type="text" disabled="" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Matricule_personnel'];?>">

								     	</div>
							   		</div>	
							   		

							   		<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPassword">Mot de passe</label>
									        </div>
									 
									        <input type="password" maxlength="50"  pattern=".{4,50}" class="form-control" id="validationCustomPassword" name="Mot_de_passe" required="" aria-describedby="inputGroupPrepend" placeholder="Nouveau mot de passe" value="<?= isset($_REQUEST['Mot_de_passe'])?$_REQUEST['Mot_de_passe']:'';?>">
									        <?php if (!isset($_REQUEST['password'])): ?>
									        	<span>? : Facultatif!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['password'])): ?>
									        	<p><?= $_REQUEST['password']?></P>
									       	<?php endif ?>

									    </div>
									    
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPassword1">Mot de passe</label>
									        </div>
									 
									        <input type="password" maxlength="50"  pattern=".{4,50}" class="form-control" id="validationCustomPassword1" name="Mot_de_passe1" required="" aria-describedby="inputGroupPrepend" placeholder="Mot de passe à nouveau" value="<?= isset($_REQUEST['Mot_de_passe1'])?$_REQUEST['Mot_de_passe1']:'';?>">
									        <?php if (!isset($_REQUEST['password1'])): ?>
									        	<span>? : Facultatif!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['password1'])): ?>
									        	<p><?= $_REQUEST['password1'];?></P>
									       	<?php endif ?>

									    </div>
									    
							   		</div>	
							</div>

							

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <input type="submit" class="bouton" name="envoi" value="Changer de coordonnée">

									    </div>
							   		</div>	

							</div>

						</form>
				</div>	

			</body>
			<?php
	}

	function deconnexion_form1_2_1_2() {

			if (session_status() === PHP_SESSION_NONE) {
			    session_start();
			}
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_2_1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" >

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_2_1.php" target="zone1"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
					
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
						       
						        
						        
					      </ul>
				    </nav>
			  </header>

			  <div class="form">

				<h3><p>Supprimer le compte</p></h3>

				<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_2_1_2.php">

<!-- ggg -->
						<div class="row">

						
								<div class="col-md-4 mb-3 block1">
						 
							    	<div class="input-group">

								    	<div class="input-group-prepend">
								         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomLogin">Login</label>
								        </div>
								        
								 	   <input type="text" hidden="" class="form-control" id="validationCustomLogin" name="Login" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Login'];?>">
								        <input type="text" disabled="" class="form-control" id="validationCustomLogin" name="Login" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Login'];?>">
								    


								    </div>
								    <div class="input-group input-group-left">
								        <div class="input-group-prepend">
								         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomMatricule">Matricule</label>
								        </div>
								 
								 		<input type="text" hidden="" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Matricule_personnel'];?>">
								        <input type="text" disabled="" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Matricule_personnel'];?>">

							     	</div>
						   		</div>	
						   	
						</div>



						

						<div class="row">
						
								<div class="col-md-4 mb-3 block1">
						 
							    	<div class="input-group input-groupD">
							   
								        <input type="submit" class="bouton" name="envoi" value="Supprimer le compte">

								    </div>
						   		</div>	

						</div>

					</form>
			</div>

			</body>
			<?php
	}

	function deconnexion_form1_3() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			require('Month.php');
	  		require('Events.php');
	  		$events = new Events();
	  	 	$month = new Month($_GET['month'] ?? null, $_GET['year'] ?? null); 

	  	 	$start = $month->getStartingDay();
	  	 	$start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');

	  	 	$weeks = $month->getWeeks();
	  	 	$end = (clone $start)->modify('+'.(6 + 7 * ($weeks - 1)).' days');
	  	 	$events = $events->getEventsBetweenByDay($start, $end);
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_3.css?v=<?php echo time(); ?>">
			<body>
				
				<header>

				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						     
						       
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>

			  </header>

			  <div class="corps">

			  	<div class="calendar">
			 	
			 	<h3>Mon calendrier</h3>

			  	<!--$month->getWeeks() : Affiche le nombre de semaine-->

			  	<div class="d-flex flex-row align-items-center justify-content-between mx-sm-3">

			  		<h4><?= $month->toString(); ?></h4>

			  		<a href="deconnexion_form1_3_2.php" class="calendar__button">+</a>

			  		<div>
			  			<a style="background-color: #787d34; border: 3px solid azure; border-radius: 20px;" href="deconnexion_form1_3.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class="btn btn-dark">&lt;&lt;</a>
			  			<a style="background-color: #787d34; border: 3px solid azure; border-radius: 20px;" href="deconnexion_form1_3.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-dark">&gt;&gt;</a>
			  		</div>
			  	</div>

			  	<table class="calendar__table calendar__table--<?= $weeks; ?>weeks">
			  		<?php for ($i = 0; $i < $weeks; $i++): ?>
			  			<tr>

			  				<?php foreach($month->days as $k => $day): 
			  					$date = (clone $start)->modify("+".($k + $i * 7)." days");
			  					$eventsForDay = $events[$date->format('Y-m-d')] ?? [];
			  					$isToday = date('Y-m-d') === $date->format('Y-m-d');
			  					?>
			  				<td class="<?= $month->withinMonth($date)? '':'calendar__othermonth'; ?> <?= $isToday? 'today':''; ?>">

			  					<?php if ($i === 0): ?> 
			  						<div class="calendar__weekday"><?= $day; ?></div>
			  					<?php endif; ?>

			  					<a class="calendar__day" href="deconnexion_form1_3_2.php?date=<?= $date->format('Y-m-d'); ?>"><?= $date->format('d'); ?></a>

			  					<?php foreach ($eventsForDay as $event): ?>
			  						<div class="calendar__event">
			  							<?= (new DateTime($event['Date_debut']))->format('H:i'); ?> - <a href="deconnexion_form1_3_1.php?Id_evenement=<?= $event['Id_evenement']; ?>"><?= htmlentities($event['Titre']); ?></a>
			  						</div>
			  					<?php endforeach; ?>

			  				</td>
			  				<?php endforeach; ?>
			  			</tr>
			  		<?php endfor; ?>
			  	</table>
			  	<!-- <a href="deconnexion_form1_3_2.php" class="calendar__button">+</a> -->
			  	</div>

			  </div>

			</body>
			<?php
	}

	function deconnexion_form1_3_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			require('Events.php');
			$events = new Events();
			$event = $events->find($_GET['Id_evenement']);
			// echo htmlentities($event['Id_evenement']);
			// echo "<pre>";
			// print_r(var_dump($event));
			// echo "</pre>";
			?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_3_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_3.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						      	
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			  <div class="form">

					<h3><p>Editer l'événement : <?= htmlentities($event['Titre']); ?></p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_3_1.php">

							<input hidden="" type="number" name="Id_evenement" value="<?= htmlentities($event['Id_evenement']); ?>">
							<input hidden="" type="number" name="Matricule_personnel" value="<?= $_SESSION['Matricule_personnel']; ?>">

							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTitre">Titre</label>
									        </div>
									        <!--  "#^[A-Za-z'àáâãäåçèéêëìíîïðòóôõöùúûüýÿ -]+$#" -->
									        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomTitre" name="titre" placeholder="Titre de l'événement" required="" aria-describedby="inputGroupPrepend"  value="<?= htmlentities($event['Titre']); ?>">

									        <?php if (!isset($_REQUEST['titre1'])): ?>
									        	<span>au moin trois (3) lettres ou chiffres!</span>
									       	<?php endif ?>

									       	<?php if (isset($_REQUEST['titre1'])): ?>
									        	<p><?= $_REQUEST['titre1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDate">Date</label>
									        </div>

									        <input type="date" maxlength="50" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" required="" class="form-control" id="validationCustomDate" name="date" aria-describedby="inputGroupPrepend"  value="<?= (new DateTime($event['Date_debut']))->format('Y-m-d'); ?>">
									        <?php if (!isset($_REQUEST['date1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['date1'])): ?>
									        	<p><?= $_REQUEST['date1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemarrage">Démarrage</label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="first" id="validationCustomDemarrage" aria-describedby="inputGroupPrepend"  value="<?= (new DateTime($event['Date_debut']))->format('H:i'); ?>" >
									        <?php if (!isset($_REQUEST['first1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['first1'])): ?>
									        	<p><?= $_REQUEST['first1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFin">Fin</label>
									        </div>

									        <input type="time" maxlength="50" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="last" id="validationCustomFin" aria-describedby="inputGroupPrepend" value="<?= (new DateTime($event['Date_fin']))->format('H:i'); ?>" >
									        <?php if (!isset($_REQUEST['last1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['last1'])): ?>
									        	<p><?= $_REQUEST['last1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <label for="validationCustomDescription" class="input-group-text" id="inputGroupPrepend">Description</label>
									        

									        <textarea class="form-control"  maxlength="250" name="description" id="validationCustomDescription" placeholder="Description" aria-describedby="inputGroupPrepend"  style="resize: none; height: 100px;" required=""><?= htmlentities($event['Description']); ?></textarea>
									        <?php if (!isset($_REQUEST['description1'])): ?>
									        	<span>Renseignez une description!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['description1'])): ?>
									        	<p><?= $_REQUEST['description1']; ?></P>
									       	<?php endif ?>

									    </div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <input type="submit" class="bouton" name="envoi" value="Modifier l'événement">
						 					<input type="submit" class="bouton" name="envoi2" value="Supprimer l'événement">

									    </div>
							   		</div>	

							</div>

						</form>
				</div>	

			</body>
			<?php
	}

	function deconnexion_form1_3_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}

			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_3_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_3.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						      
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

				<div class="form">

					<h3><p>Ajouter un événement</p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_3_2.php">

							<input hidden="" type="number" name="Matricule_personnel" value="<?= $_SESSION['Matricule_personnel']; ?>">

							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTitre">Titre</label>
									        </div>

									        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomTitre" name="titre" placeholder="Titre de l'événement" required="" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['titre'])&&$_REQUEST['titre']!='')?$_REQUEST['titre']:'';?>">
									        <?php if (!isset($_REQUEST['titre1'])): ?>
									        	<span>au moin trois (3) lettres ou chiffres!</span>
									       	<?php endif ?>

									       	<?php if (isset($_REQUEST['titre1'])): ?>
									        	<p><?= $_REQUEST['titre1']; ?></P>
									       	<?php endif ?>
									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDate">Date</label>
									        </div>

									        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDate" name="date" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['date'])&&$_REQUEST['date']!='')?$_REQUEST['date']:date('Y-m-d');?>">
									        <?php if (!isset($_REQUEST['date1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['date1'])): ?>
									        	<p><?= $_REQUEST['date1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemarrage">Démarrage</label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="first" id="validationCustomDemarrage" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['first'])&&$_REQUEST['first']!='')?$_REQUEST['first']:'08:00';?>" >
									        <?php if (!isset($_REQUEST['first1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['first1'])): ?>
									        	<p><?= $_REQUEST['first1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFin">Fin</label>
									        </div>

									        <input type="time" maxlength="50" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="last" id="validationCustomFin" aria-describedby="inputGroupPrepend" value="<?=(isset($_REQUEST['last'])&&$_REQUEST['last']!='')?$_REQUEST['last']:'20:00';?>" >
									        <?php if (!isset($_REQUEST['last1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['last1'])): ?>
									        	<p><?= $_REQUEST['last1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <label for="validationCustomDescription" class="input-group-text" id="inputGroupPrepend">Description</label>
									        

									        <textarea  class="form-control"  maxlength="250" name="description" id="validationCustomDescription" placeholder="Description" aria-describedby="inputGroupPrepend"  style="resize: none; height: 100px;" required=""><?=(isset($_REQUEST['description'])&&$_REQUEST['description']!='')?$_REQUEST['description']:'';?></textarea>
									        <?php if (!isset($_REQUEST['description1'])): ?>
									        	<span>Renseignez une description!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['description1'])): ?>
									        	<p><?= $_REQUEST['description1']; ?></P>
									       	<?php endif ?>

									    </div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
		 					
								    		<input type="submit" class="bouton" name="envoi" value="Enregistrer">

									    </div>
							   		</div>	

							</div>

						 	

						</form>
				</div>	

				<!-- <script>
					// Example starter JavaScript for disabling form submissions if there are invalid fields
					(function() {
					  'use strict';
					  window.addEventListener('load', function() {
					    // Fetch all the forms we want to apply custom Bootstrap validation styles to
					    var forms = document.getElementsByClassName('needs-validation');
					    // Loop over them and prevent submission
					    var validation = Array.prototype.filter.call(forms, function(form) {
					      form.addEventListener('submit', function(event) {
					        if (form.checkValidity() === false) {
					          event.preventDefault();
					          event.stopPropagation();
					        }
					        form.classList.add('was-validated');
					      }, false);
					    });
					  }, false);
					})();
				</script> -->
						
	
			  	

			</body>
			<?php
	}

	function deconnexion_form1_4() {

			session_start();
			$Matricule_personnel = $_SESSION['Matricule_personnel'];
			// echo "___________________________________________________________________________________".$Matricule_personnel;
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1_4.css?v=<?php echo time(); ?>">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" >

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						    
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>


			 <div class="form_5">

					<br>

						<form action="rechercher.php" method="REQUEST" class="form_r3">			      	
							<div>
								<input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
								<input type="submit" name="valider_stage1" value="envoyer" id="validationCustomBtn">
							</div>
				       	 </form>
				
			
					<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

						$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

						
						$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Matricule_personnel = ?');		
						$recupPersonnel->execute(array($Matricule_personnel));

						$Id_personnel = $recupPersonnel->fetch()['Id_personnel']??-1;
				

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_stage1'])) {
										
							$recherche = htmlspecialchars($_REQUEST['valider_stage1']);
							$recherche1 = -1;
							$recherche2 = -1;

							

							$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Nom_demandeur = ?');		
							$recupDemande->execute(array($recherche));

							if ($recupDemande->rowCount() > 0) {

								$recherche1 = $recupDemande->fetch()['Id_demande'];

							}

							$recupDemande1 = $bdd->prepare('SELECT * FROM demande WHERE Prenom_demandeur = ?');		
							$recupDemande1->execute(array($recherche));

							if ($recupDemande1->rowCount() > 0) {

								$recherche1 = $recupDemande1->fetch()['Id_demande'];

							}

							$recupDemande2 = $bdd->prepare('SELECT * FROM demande WHERE Domaine = ?');		
							$recupDemande2->execute(array($recherche));

							if ($recupDemande2->rowCount() > 0) {
								$recherche1 = $recupDemande2->fetch()['Id_demande'];
							}

							$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Nom = ?');		
							$recupPersonnel->execute(array($recherche));

							if ($recupPersonnel->rowCount() > 0) {
								$recherche2 = $recupPersonnel->fetch()['Id_personnel'];
							}

							$recupPersonnel1 = $bdd->prepare('SELECT * FROM personnel WHERE Prenom = ?');		
							$recupPersonnel1->execute(array($recherche));

							if ($recupPersonnel1->rowCount() > 0) {
								$recherche2 = $recupPersonnel1->fetch()['Id_personnel'];
							}

					

							$req = 'SELECT * FROM stage WHERE Id_personnel = '.$Id_personnel.' AND (Id_demande LIKE  "%'.$recherche1.'%" OR Id_personnel LIKE  "%'.$recherche2.'%" OR Nom_stage LIKE  "%'.$recherche.'%" OR Niveau_stage LIKE  "%'.$recherche.'%" OR Sujet_stage LIKE  "%'.$recherche.'%")  ORDER BY Nom_stage ASC';
						

							$result = mysqli_query($conn, $req);
							?>

								<table class="table5">
								<tr>
									<th class="th5">-|| Stage ||-</th>
									<th class="th5">-|| Sujet ||-</th>
									<th class="th5">-|| Stagiaire ||-</th>
									<th class="th5">-|| Début ||-</th>
									<th class="th5">-|| Convention ||-</th>
									<th class="th5">-|| Profil ||-</th>
									<th class="th5">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
								}

								$Demandeur = $Prenom_demandeur." ".$Nom_demandeur;
								$Id_stage = $row['Id_stage'];
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];
								$Stage = $row['Nom_stage'];
								$Sujet = $row['Sujet_stage'];
								$Date_debut = $row['Date_debut'];
								$Date_fin = $row['Date_fin'];
								$Rapport = $row['Rapport'];
								$selectNote = $row['Note'];
								$Appreciations = $row['Appreciations'];
								$Observation = $row['Observation'];
								$Travail = $row['Travail'];
								$Evaluation = $row['Evaluation'];
								$Sociabilité = $row['Sociabilité'];
								$selectSatisfait = $row['Satisfait'];
								$selectFormation = $row['Jugement_formation'];

								?>
								<tr>

									<td class="td5"><?=$row['Nom_stage'];?></td>
									<td class="td5"><?=$row['Sujet_stage'];?></td>
									<td class="td5"><?=$Prenom_demandeur." ".$Nom_demandeur;?></td>
									<td class="td5"><?=$row['Date_debut'];?></td>
									<td class="td5">
										<?php
											if ($row['Convention'] == '') {
												
											} else { ?>
												<input type="button" class="bouton2" name="envoi" value="Télécharger" onclick="window.location.href='download.php?file=<?php echo $row['Convention'];?>';"> 
												<?php
											}?>
									</td>
									<td class="td5"><?=$row['Niveau_stage']."<br>".$Domaine;?></td>
									<td class="td5">

										<input type="button" class="bouton2" name="envoi" value="Clôturer" onclick="window.location.href='deconnexion_form1_4_modifier.php?Demandeur=<?=$Demandeur;?>&Id_stage=<?=$Id_stage;?>&Id_demande=<?=$Id_demande;?>&Id_personnel=<?=$Id_personnel;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&selectNote=<?=$selectNote;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>';">

									</td>
								</tr>
								
								<?php
							}


						} else {
							
							$req = "SELECT * FROM stage WHERE Id_personnel = $Id_personnel ORDER BY Nom_stage ASC";
							$result = mysqli_query($conn, $req);
							?>

								<table class="table5">
								<tr>
									<th class="th5">-|| Stage ||-</th>
									<th class="th5">-|| Sujet ||-</th>
									<th class="th5">-|| Stagiaire ||-</th>
									<th class="th5">-|| Début ||-</th>
									<th class="th5">-|| Convention ||-</th>
									<th class="th5">-|| Profil ||-</th>
									<th class="th5">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
								
								}

								$Demandeur = $Prenom_demandeur." ".$Nom_demandeur;
								$Id_stage = $row['Id_stage'];
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];
								$Stage = $row['Nom_stage'];
								$Sujet = $row['Sujet_stage'];
								$Date_debut = $row['Date_debut'];
								$Date_fin = $row['Date_fin'];
								$Rapport = $row['Rapport'];
								$selectNote = $row['Note'];
								$Appreciations = $row['Appreciations'];
								$Observation = $row['Observation'];
								$Travail = $row['Travail'];
								$Evaluation = $row['Evaluation'];
								$Sociabilité = $row['Sociabilité'];
								$selectSatisfait = $row['Satisfait'];
								$selectFormation = $row['Jugement_formation'];

								?>
								<tr>

									<td class="td5"><?=$row['Nom_stage'];?></td>
									<td class="td5"><?=$row['Sujet_stage'];?></td>
									<td class="td5"><?=$Prenom_demandeur." ".$Nom_demandeur;?></td>
									<td class="td5"><?=$row['Date_debut'];?></td>
									<td class="td5">
										<?php
											if ($row['Convention'] == '') {
												
											} else { ?>
												<input type="button" class="bouton2" name="envoi" value="Télécharger" onclick="window.location.href='download.php?file=<?php echo $row['Convention'];?>';"> 
												<?php
											}?>
									</td>
									<td class="td5"><?=$row['Niveau_stage']."<br>".$Domaine;?></td>
									<td class="td5">



										<input type="button" class="bouton2" name="envoi" value="Clôturer" onclick="window.location.href='deconnexion_form1_4_modifier.php?Demandeur=<?=$Demandeur;?>&Id_stage=<?=$Id_stage;?>&Id_demande=<?=$Id_demande;?>&Id_personnel=<?=$Id_personnel;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&selectNote=<?=$selectNote;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>';">


									</td>
								</tr>
								
								<?php
							}
						}




						mysqli_close($conn);

					?>
							</table>

				

			</div>	
			</body>
		
					<?php 


	}

	function deconnexion_form1_4_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}

			// if(isset($_SESSION['Id_utilisateur'])) {
			// 	$Id_utilisateur = $_SESSION['Id_utilisateur'];
			// 	// echo "________________________________________________________________________ $Id_utilisateur";
			// }
			?>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1_4.css?v=<?php echo time(); ?>">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_4.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						    
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>


			<div class="form_4_1">

					<br>

						<form enctype="multipart/form-data" class="needs-validation" novalidate method="POST" action="select.php">

							<input type="number" hidden="" name="Id_stage" value="<?=isset($_REQUEST['Id_stage'])?$_REQUEST['Id_stage']:'';?>">
							<input type="number" hidden="" name="Id_personnel" value="<?=isset($_REQUEST['Id_personnel'])?$_REQUEST['Id_personnel']:'';?>">
							<input type="number" hidden="" name="Id_demande" value="<?=isset($_REQUEST['Id_demande'])?$_REQUEST['Id_demande']:'';?>">
							<input type="number" hidden="" name="Id_utilisateur" value="<?= isset($_SESSION['Id_utilisateur'])?$_SESSION['Id_utilisateur']:'';?>">
							
							
							<input type="text" maxlength="50" hidden=""  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomDemandeur"  name="Demandeur" value="<?=$_REQUEST['Demandeur']??'';?>" required="" aria-describedby="inputGroupPrepend">
	

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupE">							        

										       	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemandeur">Demandeur</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomDemandeur" disabled="" name="Demandeur" value="<?=$_REQUEST['Demandeur']??'';?>" required="" aria-describedby="inputGroupPrepend">

										        

										</div>

								</div>

								<br><br><br>

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        

										       	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="Stage" placeholder="Nom du stage" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Stage'])?$_REQUEST['Stage']:'';?>">

										        <?php if (!isset($_REQUEST['Stage1'])): ?>
										        	<span>Saisissez le stage!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Stage1'])): ?>
										        	<p><?= $_REQUEST['Stage1']; ?></P>
										       	<?php endif ?>

										    </div>
								

										    <div class="input-group input-group-left">
										    	
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPrenom">Sujet</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomPrenom" name="Sujet" placeholder="Sujet du stage" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Sujet'])?$_REQUEST['Sujet']:'';?>">

										        <?php if (!isset($_REQUEST['Sujet1'])): ?>
										        	<span>Saisissez le sujet!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Sujet1'])): ?>
										        	<p><?= $_REQUEST['Sujet1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	



								</div>


								<div class="row">
									
											<div class="col-md-4 mb-3 block1">
									 
										    	<div class="input-group input-group">
										   
											       	<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemarrage">Démarrage</label>
											        </div>

											        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDemarrage" name="Date_debut" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['Date_debut'])&&$_REQUEST['Date_debut']!='')?$_REQUEST['Date_debut']:date('Y-m-d');?>">

											        <?php if (!isset($_REQUEST['Date_debut1'])): ?>
											        	<span>Renseigneez une date!</span>
											       	<?php endif ?>


											        <?php if (isset($_REQUEST['Date_debut1'])): ?>
											        	<p><?= $_REQUEST['Date_debut1']; ?></P>
											       	<?php endif ?>

											    </div>
									

											    <div class="input-group input-group-left">
											    	
											    	<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFin">Fin</label>
											        </div>

											       	<input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomFin" name="Date_fin" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['Date_fin'])&&$_REQUEST['Date_fin']!='')?$_REQUEST['Date_fin']:date('Y-m-d');?>">

											       	<?php if (!isset($_REQUEST['Date_fin1'])): ?>
											        	<span>Renseigneez une date!</span>
											       	<?php endif ?>


											        <?php if (isset($_REQUEST['Date_fin1'])): ?>
											        	<p><?= $_REQUEST['Date_fin1']; ?></P>
											       	<?php endif ?>

											    </div>  
									   		</div>	



									</div>

								

							   		<br><br><br>

									<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 

										    <div class="input-group input-groupE">

										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomConvention">Convention</label>
										        </div>
										       
										        <input type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" class="form-control" id="validationCustomConvention" name="Convention"aria-describedby="inputGroupPrepend">		       

										    </div>  

								   		</div>	

									</div>

									<br><br><br>

									<div class="row">
							
											<div class="col-md-4 mb-3 block1">
									 
										    	<div class="input-group input-groupD">
										   
											        <label for="validationCustomRapport" class="input-group-text" id="inputGroupPrepend">Rapport</label>						

											        <textarea class="form-control"  maxlength="500" name="Rapport" id="validationCustomRapport" placeholder="Rapport" aria-describedby="inputGroupPrepend"  style="resize: none; height: 70px;" required=""><?=isset($_REQUEST['Rapport'])?$_REQUEST['Rapport']:'';?></textarea>
											        <?php if (!isset($_REQUEST['Rapport1'])): ?>
											        	<span>Renseignez le rapport!</span>
											       	<?php endif ?>

											        <?php if (isset($_REQUEST['Rapport1'])): ?>
											        	<p><?= $_REQUEST['Rapport1']; ?></P>
											       	<?php endif ?>

											    </div>
									   		</div>	

									</div>

									<br><br><br><br>

									<div class="row">
								   
								        <div class="col-md-4 mb-3 block2">
						 
									    	<div class="input-group input-groupD">
									   
										        <label for="validationCustomAppreciation" class="input-group-text" id="inputGroupPrepend">Appréciations</label>
										        

										        <textarea class="form-control"  maxlength="500" name="Appreciations" id="validationCustomAppreciation" placeholder="Appreciations" aria-describedby="inputGroupPrepend"  style="resize: none; height: 70px;" required=""><?=isset($_REQUEST['Appreciations'])?$_REQUEST['Appreciations']:'';?></textarea>
										        <?php if (!isset($_REQUEST['Appreciation1'])): ?>
										        	<span>Renseignez une appréciation!</span>
										       	<?php endif ?>

										        <?php if (isset($_REQUEST['Appreciation1'])): ?>
										        	<p><?= $_REQUEST['Appreciation1']; ?></P>
										       	<?php endif ?>

										    </div>
								   		</div>	

								    </div>

								    <br><br><br><br>

								    <div class="row">
								   
								        <div class="col-md-4 mb-3 block1">
						 
									    	<div class="input-group input-groupD">
									   
										        <label for="validationCustomObservation" class="input-group-text" id="inputGroupPrepend">Observation</label>
										        

										        <textarea class="form-control"  maxlength="500" name="Observation" id="validationCustomObservation" placeholder="Observation" aria-describedby="inputGroupPrepend"  style="resize: none; height: 70px;" required=""><?=isset($_REQUEST['Observation'])?$_REQUEST['Observation']:'';?></textarea>
										        <?php if (!isset($_REQUEST['Observation1'])): ?>
										        	<span>Renseignez une observation!</span>
										       	<?php endif ?>

										        <?php if (isset($_REQUEST['Observation1'])): ?>
										        	<p><?= $_REQUEST['Observation1']; ?></P>
										       	<?php endif ?>

										    </div>
								   		</div>	

								    </div>

								    <br><br><br><br>

								    <div class="row">
								   
								        <div class="col-md-4 mb-3 block1">
						 
									    	<div class="input-group input-groupD">
									   
										        <label for="validationCustomTravail" class="input-group-text" id="inputGroupPrepend">Travail</label>
										        

										        <textarea class="form-control"  maxlength="500" name="Travail" id="validationCustomTravail" placeholder="Travail : ('analyse', 'conception', 'realisation', 'maintenance')" aria-describedby="inputGroupPrepend"  style="resize: none; height: 70px;" required=""><?=isset($_REQUEST['Travail'])?$_REQUEST['Travail']:'';?></textarea>
										        <?php if (!isset($_REQUEST['Travail1'])): ?>
										        	<span>Renseignez le travail effectué!</span>
										       	<?php endif ?>

										        <?php if (isset($_REQUEST['Travail1'])): ?>
										        	<p><?= $_REQUEST['Travail1']; ?></P>
										       	<?php endif ?>

										    </div>
								   		</div>	

								    </div>

								    <br><br><br><br>

								    <div class="row">
								   
								        <div class="col-md-4 mb-3 block1">
						 
									    	<div class="input-group input-groupD">
									   
										        <label for="validationCustomEvaluation" class="input-group-text" id="inputGroupPrepend">Evaluation</label>
										        

										        <textarea class="form-control"  maxlength="500" name="Evaluation" id="validationCustomEvaluation" placeholder="Evaluation : ('connaissances théoriques de l'étudiant', 'capacités pratiques de l'étudiant',  'aptitudes  l'organisation', 'connaissance des problème de l'entreprise', 'spécialisation')" aria-describedby="inputGroupPrepend"  style="resize: none; height: 70px;" required=""><?=isset($_REQUEST['Evaluation'])?$_REQUEST['Evaluation']:'';?></textarea>
										        <?php if (!isset($_REQUEST['Evaluation1'])): ?>
										        	<span>Renseignez une évaluation!</span>
										       	<?php endif ?>

										        <?php if (isset($_REQUEST['Evaluation1'])): ?>
										        	<p><?= $_REQUEST['Evaluation1']; ?></P>
										       	<?php endif ?>

										    </div>
								   		</div>	

								    </div>

								    <br><br><br><br>

								     <div class="row">
								   
								        <div class="col-md-4 mb-3 block1">
						 
									    	<div class="input-group input-groupD">
									   
										        <label for="validationCustomSociabilité" class="input-group-text" id="inputGroupPrepend">Sociabilité</label>
										        

										        <textarea class="form-control"  maxlength="500" name="Sociabilité" id="validationCustomSociabilité" placeholder="Sociabilité : ('Relation avec les autres membres du personnel', 'intégration au milieu du travail', 'dynamisme et autonomie')" aria-describedby="inputGroupPrepend"  style="resize: none; height: 70px;" required=""><?=isset($_REQUEST['Sociabilité'])?$_REQUEST['Sociabilité']:'';?></textarea>
										        <?php if (!isset($_REQUEST['Sociabilité1'])): ?>
										        	<span>Renseignez la sociabilité!</span>
										       	<?php endif ?>

										        <?php if (isset($_REQUEST['Sociabilité1'])): ?>
										        	<p><?= $_REQUEST['Sociabilité1']; ?></P>
										       	<?php endif ?>

										    </div>
								   		</div>	

								    </div>

								    <br><br><br><br>

									<div class="row">

									
											<div class="col-md-4 mb-3 block2">
									 
										    	<div class="input-group">

										    		<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDecision">Satisfait</label>
											        </div>

											   
		
											    	<div class="selection">
										    			<select class="selection1" name="selectSatisfait">

										    				<option value="Oui"<?='Oui' == ($_REQUEST['selectSatisfait']??'') ? ' selected="selected"' : '';?>>Oui</option>
										    				<option value="Non"<?='Non' == ($_REQUEST['selectSatisfait']??'') ? ' selected="selected"' : '';?>>Non</option>
										    														    				

										    			</select>
										    		</div>

											    	

											    </div>
						
										    

									   		</div>	

									</div>

									<div class="row">

									
											<div class="col-md-4 mb-3 block2">
									 
										    	<div class="input-group">

										    		<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDecision">Formation</label>
											        </div>

											
		
											    	<div class="selection">
										    			<select class="selection1" name="selectFormation">

										    				<option value="conforme à nos besoins"<?='conforme à nos besoins' == ($_REQUEST['selectFormation']??'') ? ' selected="selected"' : '';?>>Conforme à nos besoins</option>

										    				<option value="trop théorique"<?='trop théorique' == ($_REQUEST['selectFormation']??'') ? ' selected="selected"' : '';?>>Trop théorique</option>

										    				<option value="trop pratique"<?='trop pratique' == ($_REQUEST['selectFormation']??'') ? ' selected="selected"' : '';?>>Trop pratique</option>

										    				<option value="trop spécialisée"<?='trop spécialisée' == ($_REQUEST['selectFormation']??'') ? ' selected="selected"' : '';?>>Trop spécialisée</option>

										    				<option value="trop générale"<?='trop générale' == ($_REQUEST['selectFormation']??'') ? ' selected="selected"' : '';?>>Trop générale</option>

										    				<option value="obsolète"<?='obsolète' == ($_REQUEST['selectFormation']??'') ? ' selected="selected"' : '';?>>Obsolète</option>

										    				<option value="trop avancée"<?='trop avancée' == ($_REQUEST['selectFormation']??'') ? ' selected="selected"' : '';?>>Trop avancée</option>
										    				

										    			</select>
										    		</div>

											    	

											    </div>
						
										    

									   		</div>	

									</div>

									<div class="row">

									
											<div class="col-md-4 mb-3 block2">
									 
										    	<div class="input-group">

										    		<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDecision">Note</label>
											        </div>

											   
		
											    	<div class="selection">
										    			<select class="selection1" name="selectNote">

										    				<option value="0"<?='0' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>0/20</option>

										    				<option value="1"<?='1' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>1/20</option>

										    				<option value="2"<?='2' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>2/20</option>

										    				<option value="3"<?='3' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>3/20</option>

										    				<option value="4"<?='4' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>4/20</option>

										    				<option value="5"<?='5' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>5/20</option>

										    				<option value="6"<?='6' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>6/20</option>

										    				<option value="7"<?='7' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>7/20</option>

										    				<option value="8"<?='8' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>8/20</option>

										    				<option value="9"<?='9' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>9/20</option>

										    				<option value="10"<?='10' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>10/20</option>

										    				<option value="11"<?='11' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>11/20</option>

										    				<option value="12"<?='12' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>12/20</option>

										    				<option value="13"<?='13' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>13/20</option>

										    				<option value="14"<?='14' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>14/20</option>

										    				<option value="15"<?='15' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>15/20</option>

										    				<option value="16"<?='16' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>16/20</option>

										    				<option value="17"<?='17' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>17/20</option>

										    				<option value="18"<?='18' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>18/20</option>

										    				<option value="19"<?='19' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>19/20</option>

										    				<option value="20"<?='20' == ($_REQUEST['selectNote']??'') ? ' selected="selected"' : '';?>>20/20</option>
										    				

										    			</select>
																	    	

											    </div>										    

									   		</div>	

									</div>

									


								



								
								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi_stage1" value="Clôturer">
							 					
										    </div>
								  		</div>	

								</div>

							</form>


							
<!-- ici la -->

							<form action="rechercher.php" method="REQUEST" class="form_r4_1">			      	

				        		        <div>
					     			     
						     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
						     			    <input type="submit" name="valider_stage1_1" value="envoyer" id="validationCustomBtn">

					                    </div>

					       	</form>
				
	

							
								
				

					<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

						$Matricule_personnel = $_SESSION['Matricule_personnel'];

						$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
						$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Matricule_personnel = ?');		
						$recupPersonnel->execute(array($Matricule_personnel));
						$Id_personnel = $recupPersonnel->fetch()['Id_personnel'];

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_stage1_1'])) {
										
							$recherche = htmlspecialchars($_REQUEST['valider_stage1_1']);
							$recherche1 = -1;
							$recherche2 = -1;
				


							$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Nom_demandeur = ?');		
							$recupDemande->execute(array($recherche));

							if ($recupDemande->rowCount() > 0) {

								$recherche1 = $recupDemande->fetch()['Id_demande'];

							}

							$recupDemande1 = $bdd->prepare('SELECT * FROM demande WHERE Prenom_demandeur = ?');		
							$recupDemande1->execute(array($recherche));

							if ($recupDemande1->rowCount() > 0) {

								$recherche1 = $recupDemande1->fetch()['Id_demande'];

							}

							$recupDemande2 = $bdd->prepare('SELECT * FROM demande WHERE Domaine = ?');		
							$recupDemande2->execute(array($recherche));

							if ($recupDemande2->rowCount() > 0) {

								$recherche1 = $recupDemande2->fetch()['Id_demande'];

							}

							$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Nom = ?');		
							$recupPersonnel->execute(array($recherche));

							if ($recupPersonnel->rowCount() > 0) {

								$recherche2 = $recupPersonnel->fetch()['Id_personnel'];

							}

							$recupPersonnel1 = $bdd->prepare('SELECT * FROM personnel WHERE Prenom = ?');		
							$recupPersonnel1->execute(array($recherche));

							if ($recupPersonnel1->rowCount() > 0) {

								$recherche2 = $recupPersonnel1->fetch()['Id_personnel'];

							}

					

							$req = 'SELECT * FROM stage WHERE Id_personnel = '.$Id_personnel.' AND (Id_demande LIKE  "%'.$recherche1.'%" OR Id_personnel LIKE  "%'.$recherche2.'%" OR Nom_stage LIKE  "%'.$recherche.'%" OR Niveau_stage LIKE  "%'.$recherche.'%" OR Sujet_stage LIKE  "%'.$recherche.'%")  ORDER BY Nom_stage ASC';
						

							$result = mysqli_query($conn, $req);
							?>

								<table class="table5">
								<tr>
									<th class="th5">-|| Stage ||-</th>
									<th class="th5">-|| Sujet ||-</th>
									<th class="th5">-|| Stagiaire ||-</th>
									<th class="th5">-|| Début ||-</th>
									<th class="th5">-|| Durée ||-</th>
									<th class="th5">-|| Convention ||-</th>
									<th class="th5">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
									
								}

								$Demandeur = $Prenom_demandeur." ".$Nom_demandeur;
								$Id_stage = $row['Id_stage'];
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];
								$Stage = $row['Nom_stage'];
								$Sujet = $row['Sujet_stage'];
								$Date_debut = $row['Date_debut'];
								$Date_fin = $row['Date_fin'];
								$Rapport = $row['Rapport'];
								$selectNote = $row['Note'];
								$Appreciations = $row['Appreciations'];
								$Observation = $row['Observation'];
								$Travail = $row['Travail'];
								$Evaluation = $row['Evaluation'];
								$Sociabilité = $row['Sociabilité'];
								$selectSatisfait = $row['Satisfait'];
								$selectFormation = $row['Jugement_formation'];


								?>
								<tr>

									<td class="td5"><?=$row['Nom_stage'];?></td>
									<td class="td5"><?=$row['Sujet_stage'];?></td>
									<td class="td5"><?=$Prenom_personnel." ".$Nom_personnel;?></td>
									<td class="td5"><?=$row['Date_debut'];?></td>
									<td class="td5"><?=$row['Duree'];?></td>
									<td class="td5">
											<?php
											if ($row['Convention'] == '') {
												
											} else { ?>
												<input type="button" class="bouton2" name="envoi" value="Télécharger" onclick="window.location.href='download.php?file=<?php echo $row['Convention'];?>';"> 
												<?php
											}?>
									<td class="td5">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_form1_4_modifier.php?Demandeur=<?=$Demandeur;?>&Id_stage=<?=$Id_stage;?>&Id_demande=<?=$Id_demande;?>&Id_personnel=<?=$Id_personnel;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&selectNote=<?=$selectNote;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>';">

										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_form1_4_supprimer.php?Demandeur=<?=$Demandeur;?>&Id_stage=<?=$Id_stage;?>&Id_demande=<?=$Id_demande;?>&Id_personnel=<?=$Id_personnel;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&selectNote=<?=$selectNote;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>';">
									

									</td>
								</tr>
								
								<?php
							}


						} else {
							
							$req = "SELECT * FROM stage WHERE Id_personnel = $Id_personnel  ORDER BY Nom_stage ASC";
							$result = mysqli_query($conn, $req);
							?>

								<table class="table5">
								<tr>

									<th class="th5">-|| Stage ||-</th>
									<th class="th5">-|| Sujet ||-</th>
									<th class="th5">-|| Stagiaire ||-</th>
									<th class="th5">-|| Début ||-</th>
									<th class="th5">-|| Durée ||-</th>
									<th class="th5">-|| Convention ||-</th>
									<th class="th5">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
								}

								$Demandeur = $Prenom_demandeur." ".$Nom_demandeur;
								$Id_stage = $row['Id_stage'];
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];
								$Stage = $row['Nom_stage'];
								$Sujet = $row['Sujet_stage'];
								$Date_debut = $row['Date_debut'];
								$Date_fin = $row['Date_fin'];
								$Rapport = $row['Rapport'];
								$selectNote = $row['Note'];
								$Appreciations = $row['Appreciations'];
								$Observation = $row['Observation'];
								$Travail = $row['Travail'];
								$Evaluation = $row['Evaluation'];
								$Sociabilité = $row['Sociabilité'];
								$selectSatisfait = $row['Satisfait'];
								$selectFormation = $row['Jugement_formation'];

								?>
								<tr>

									<td class="td5"><?=$row['Nom_stage'];?></td>
									<td class="td5"><?=$row['Sujet_stage'];?></td>
									<td class="td5"><?=$Prenom_personnel." ".$Nom_personnel;?></td>
									<td class="td5"><?=$row['Date_debut'];?></td>
									<td class="td5"><?=$row['Duree'];?></td>
									<td class="td5"> 
											<?php
											if ($row['Convention'] == '') {
												
											} else { ?>
												<input type="button" class="bouton2" name="envoi" value="Télécharger" onclick="window.location.href='download.php?file=<?php echo $row['Convention'];?>';"> 
												<?php
											}
											?>
										
									</td>
									<td class="td5">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_form1_4_modifier.php?Demandeur=<?=$Demandeur;?>&Id_stage=<?=$Id_stage;?>&Id_demande=<?=$Id_demande;?>&Id_personnel=<?=$Id_personnel;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&selectNote=<?=$selectNote;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>';">

										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_form1_4_supprimer.php?Demandeur=<?=$Demandeur;?>&Id_stage=<?=$Id_stage;?>&Id_demande=<?=$Id_demande;?>&Id_personnel=<?=$Id_personnel;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&selectNote=<?=$selectNote;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>';">

									

									</td>
								</tr>
								
								<?php
							}
						}


						mysqli_close($conn);

					?>
							</table>

				

			</div>	
		</body>
		
					<?php 


	}

	


	function deconnexion_admin_form1() {

		session_start();
		if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
		 	header('Location: connexion_form.php');
		}

		// if(isset($_SESSION['Id_utilisateur'])) {
		// 	$Id_utilisateur = $_SESSION['Id_utilisateur'];
		// 	// echo "________________________________________________________________________ $Id_utilisateur";
		// }



		?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1.css?v=<?php echo time(); ?>">
			<body>
				<iframe src="deconnexion_admin_form1_1.php" id="corps" name="zone1"></iframe>
			</body>
		<?php  
	}


	function deconnexion_admin_form1_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}

			// if(isset($_SESSION['Id_utilisateur'])) {
			// 	$Id_utilisateur = $_SESSION['Id_utilisateur'];
			// 	// echo "________________________________________________________________________ $Id_utilisateur";
			// }
			?>

			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_1.css?v=<?php echo time(); ?>">

			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><h3 id="titre">Tableau de bord</h3></li>
					
						        <li class="menu-item" id="haut"><a href="deconnexion_admin_form1_2.php" target="zone1"><button><img src="image/add.png">&nbsp;&nbsp;&nbsp;&nbsp;Ajouter</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3.php" target="zone1"><button><img src="image/search.png">&nbsp;&nbsp;&nbsp;&nbsp;Consulter</button></a></li>
						      	<li class="menu-item" id="bas"><a href="deconnexion_admin_form1_6.php" target="zone1"><button><img src="image/compte.png">&nbsp;&nbsp;&nbsp;&nbsp;Mon compte</button></a></li>
						        <li class="menu-item"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>


  			<form class="form1">
  				<div class="select">
	  				<select class="select1" name="select" onChange="location = this.options[this.selectedIndex].value;">

	  					<option value="deconnexion_admin_form1_1.php">----Choix----</option>
	  					<!-- <option value="deconnexion_admin_form1_2.php?select=1">Ajouter un personnel</option>
	  					<option value="deconnexion_admin_form1_2.php?select=2">Ajouter un bureau</option>
	  					<option value="deconnexion_admin_form1_2.php?select=3">Ajouter une fonction</option> -->
	  					<option value="deconnexion_admin_form1_2.php?select=4">Enregistrer une demande</option>
	  					<option value="deconnexion_admin_form1_2.php?select=5">Affecter une demande</option>
	  					<option value="deconnexion_admin_form1_2.php?select=51">Modifier ou Supprimer un stagiaire</option>
	  					<option value="deconnexion_admin_form1_2.php?select=6">Ajouter un établissement</option>

	  					<option value="deconnexion_admin_form1_1.php">---------------------------</option>

	  					<!-- <option value="deconnexion_admin_form1_3.php?select=1">Consulter les personnels</option> -->
	  					<!-- <option value="deconnexion_admin_form1_3.php?select=2">Consulter les bureaux</option> -->
	  					<!-- <option value="deconnexion_admin_form1_3.php?select=3">Consulter les fonctions</option> -->
	  					<option value="deconnexion_admin_form1_3.php?select=4">Consulter les demandes</option>
	  					<option value="deconnexion_admin_form1_3.php?select=51">Consulter les stagiaires</option>
	  					<option value="deconnexion_admin_form1_3.php?select=6">Consulter les établissements</option>

	  					<!-- <option value="deconnexion_admin_form1_1.php">---------------------------</option> -->

	  					<!-- <option value="deconnexion_admin_form1_6.php">Changer les coordonnées du compte</option> -->


						
					</select>
				</div>
  			</form>
  

			</body>
			<?php
	}

	function deconnexion_admin_form1_2() {

			
			ini_set('session.cache_limiter','public');
			session_cache_limiter(false);
			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}

			// if(isset($_SESSION['Id_utilisateur'])) {
			// 	$Id_utilisateur = $_SESSION['Id_utilisateur'];
			// 	// echo "________________________________________________________________________ $Id_utilisateur";
			// }
			
			?>

			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" >

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php" target="zone1"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
					
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>	

  			<?php
  				
  			
  				
  				if (isset($_REQUEST['select']) && $_REQUEST['select'] == 1) {
  					$_SESSION['selected1'] = 1;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 2) {
  					$_SESSION['selected1'] = 2;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 3) {
  					$_SESSION['selected1'] = 3;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 4) {
  					$_SESSION['selected1'] = 4;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 5) {
  					$_SESSION['selected1'] = 5;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 51) {
  					$_SESSION['selected1'] = 51;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 6) {
  					$_SESSION['selected1'] = 6;
  				} else {
  					$_SESSION['selected1'] = 1;
  				}
  				
  		

  				// function select($select) {
  				// 	$ajout = array('----Choix d\'ajout----' => 0, 'Ajouter un personnel' => 1, 'Ajouter un bureau' => 2, 'Ajouter une fonction' => 3, 'Enregister une demande' => 4, 'Ajouter un stagiaire' => 5, 'Modifier ou Supprimer un stagiaire' => 51, 'Ajouter un établissement' => 6);
  				// 	$options = '';
  				// 	foreach ($ajout as $a => &$b) {
  				// 		if ($select == $b) {
  				// 			$options .= '<option value="'.$b.'" selected>'.$a.'</option>';
  				// 		} else {
  				// 			$options .= '<option value="'.$b.'" >'.$a.'</option>';
  				// 		}

  				// 	}
  				// 	return $options;
  				// }

				function select($select) {
					$ajout = array('Enregister une demande' => 4, 'Affecter une demande' => 5, 'Modifier ou Supprimer un stagiaire' => 51, 'Ajouter un établissement' => 6);
					$options = '';
					foreach ($ajout as $a => &$b) {
						if ($select == $b) {
							$options .= '<option value="'.$b.'" selected>'.$a.'</option>';
						} else {
							$options .= '<option value="'.$b.'" >'.$a.'</option>';
						}

					}
					return $options;
				}

  			

  			?>

				
  			<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" class="form1">
  				<div class="select">
	  				<select class="select1" name="select" onchange="this.form.submit();">
						<?= select($_SESSION['selected1']); ?>
					</select>
				</div>
  			</form>

  			<?=select1($_SESSION['selected1']);?>


			</body>
			<?php
	}

	function select1($s) { 



		if ($s == 1) {

			?>

			<div class="form_1">
					<br>

						<form class="needs-validation" novalidate method="REQUEST" action="select.php">

							<input hidden="" type="number" name="Id_personnel" value="<?= isset($_REQUEST['Id_personnel'])?$_REQUEST['Id_personnel']:'';?>">

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomMatricule">Matricule</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" placeholder="Matricule du personnel" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Matricule_personnel'])?$_REQUEST['Matricule_personnel']:'';?>">

										        <?php if (!isset($_REQUEST['Matricule_personnel1'])): ?>
										        	<span>Saisissez le matricule!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Matricule_personnel1'])): ?>
										        	<p><?= $_REQUEST['Matricule_personnel1']; ?></P>
										       	<?php endif ?>

										    </div>

										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTelephone">Téléphone</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomTelephone" name="Telephone" placeholder="Téléphone du personnel" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Telephone'])?$_REQUEST['Telephone']:'';?>">

										        <?php if (!isset($_REQUEST['Telephone1'])): ?>
										        	<span>Saisissez le téléphone!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Telephone1'])): ?>
										        	<p><?= $_REQUEST['Telephone1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	



								</div>

								<div class="row">

								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group">

										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="Nom" placeholder="Nom du personnel" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Nom'])?$_REQUEST['Nom']:'';?>">

										        <?php if (!isset($_REQUEST['nom1'])): ?>
										        	<span>Saisissez le nom!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['nom1'])): ?>
										        	<p><?= $_REQUEST['nom1']; ?></P>
										       	<?php endif ?>

										    </div>
										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPrenom">Prénom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomPrenom" name="Prenom" placeholder="Prénom du personnel" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Prenom'])?$_REQUEST['Prenom']:'';?>">

										        <?php if (!isset($_REQUEST['prenom1'])): ?>
										        	<span>Saisissez le prenom!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['prenom1'])): ?>
										        	<p><?= $_REQUEST['prenom1']; ?></P>
										       	<?php endif ?>

										    </div>    
								   		</div>	

								   		<div class="col-md-4 mb-3 block2">
								 
									    	<div class="input-group">

										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateDebut">Date Début</label>
										        </div>

										        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateDebut" name="dateD" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['dateD'])&&$_REQUEST['dateD']!='')?$_REQUEST['dateD']:date('Y-m-d');?>">
										        <?php if (!isset($_REQUEST['dateD1'])): ?>
										        	<span>Renseigneez une date!</span>
										       	<?php endif ?>


										        <?php if (isset($_REQUEST['dateD1'])): ?>
										        	<p><?= $_REQUEST['dateD1']; ?></P>
										       	<?php endif ?>

										    </div>
										    <div class="input-group input-group-left">
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateFin">Date Fin</label>
										        </div>

										        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateFin" name="dateF" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['dateF'])&&$_REQUEST['dateF']!='')?$_REQUEST['dateF']:date('Y-m-d');?>">
										        <?php if (!isset($_REQUEST['dateF1'])): ?>
										        	<span>Renseigneez une date!</span>
										       	<?php endif ?>


										        <?php if (isset($_REQUEST['dateF1'])): ?>
										        	<p><?= $_REQUEST['dateF1']; ?></P>
										       	<?php endif ?>

									     	</div>
								   		</div>	

								</div>

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomAdresse">Adresse</label>
										        </div>
										        
										        <input type="text" pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomAdresse" name="Adresse" placeholder="Adresse du personnel" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Adresse'])?$_REQUEST['Adresse']:'';?>">

										        <?php if (!isset($_REQUEST['Adresse1'])): ?>
										        	<span>Saisissez l'adresse!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Adresse1'])): ?>
										        	<p><?= $_REQUEST['Adresse1']; ?></P>
										       	<?php endif ?>

										    </div>

										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomEmail">Email</label>
										        </div>
										        
										        <input type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="validationCustomEmail" name="Email" placeholder="Email du personnel" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Email'])?$_REQUEST['Email']:'';?>">

										        <?php if (!isset($_REQUEST['Email1'])): ?>
										        	<span>Saisissez l'e-mail!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Email1'])): ?>
										        	<p><?= $_REQUEST['Email1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	

								</div>


								<div class="row">

								
										<div class="col-md-4 mb-3 block">
								 
									    	<div class="input-group">
									    		<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomBureau">Bureau</label>
										        </div>

										    	<div class="selection">
										    		<select class="selection1" name="selectBureau">

										    			<?php
															if(isset($_REQUEST['selectBureau'])):
															    echo "<option selected>".$_REQUEST['selectBureau']."</option>";
															    
															else:
															    echo "<option>--Choix Bureau--</option>";
															endif;
														?>

												        
				
											    		<?php

														$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
														if (!$conn) { ?>

															<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
															<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
																<div class="row py-3 justify-content-center">
																	<div class="col-md-7">
																		<div class="alert alert-danger">
																			<h1 class="py-3 text-center">Erreur !</h1>
																			<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php" style="position: relative; left: 35px; color: brown">X</a></h4>
																		</div>
																	</div>
																</div>
															</div>					

															<?php
															exit;
														}

														$req = "SELECT * FROM bureau ORDER BY Id_bureau ASC";
														$result = mysqli_query($conn, $req);
														

														while($row=mysqli_fetch_assoc($result))
														{?>
													
																<option value="<?=$row['Nom'];?>"<?=$row['Nom'] == ($_REQUEST['selectBureau']??'') ? ' selected="selected"' : '';?>><?=$row['Nom'];?></option>

															<?php
														}
														mysqli_close($conn);

													?>
										    		</select>
										    	</div>	

										    </div>


									       	<?php if (isset($_REQUEST['selectBureau1'])): ?>
									        	<p><?= $_REQUEST['selectBureau1']; ?></P>
									       	<?php endif ?>
										   
								   		</div>	

								   		<div class="col-md-4 mb-3 block">
								 
									    	<div class="input-group">
									    		<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFonction">Fonction</label>
										        </div>
	
										    	<div class="selection">
										    		<select class="selection1" name="selectFonction">

											   			<?php
															if(isset($_REQUEST['selectFonction'])):
															    echo "<option selected>".$_REQUEST['selectFonction']."</option>";
															    
															else:
															    echo "<option>--Choix Fonction--</option>";
															endif;
														?>
															   
											    		<?php

														$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
														if (!$conn) { ?>

															<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
															<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
																<div class="row py-3 justify-content-center">
																	<div class="col-md-7">
																		<div class="alert alert-danger">
																			<h1 class="py-3 text-center">Erreur !</h1>
																			<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=1" style="position: relative; left: 35px; color: brown">X</a></h4>
																		</div>
																	</div>
																</div>
															</div>					

															<?php
															exit;
														}

														$req = "SELECT * FROM fonction ORDER BY Id_fonction ASC";
														$result = mysqli_query($conn, $req);
														

														while($row=mysqli_fetch_assoc($result))
														{?>
																<option value="<?=$row['Nom'];?>"<?=$row['Nom'] == ($_REQUEST['selectFonction']??'') ? ' selected="selected"' : '';?>><?=$row['Nom'];?></option>
														<?php
														}
														mysqli_close($conn);

													?>
										    		</select>
										    	</div>	

										    </div>

										    <?php if (isset($_REQUEST['selectFonction1'])): ?>
									        	<p><?= $_REQUEST['selectFonction1']; ?></P>
									       	<?php endif ?>
										   
								   		</div>	

								</div>

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi_personnel" value="Ajouter">
							 					

										    </div>
								   		</div>	

								</div>


						</form>

						<form action="rechercher.php" method="REQUEST" class="form_r1">			      	

		        		        <div>
			     			     	<input type="button" value="Actualiser" onclick="window.location='deconnexion_admin_form1_2.php?select=1';" id="validationCustomBtn2">
				     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
				     			    <input type="submit" name="valider_personnel" value="envoyer" id="validationCustomBtn">

			                    </div>

			      	 	 </form>

								<?php

										$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
										if (!$conn) { ?>

											<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
											<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
												<div class="row py-3 justify-content-center">
													<div class="col-md-7">
														<div class="alert alert-danger">
															<h1 class="py-3 text-center">Erreur!</h1>
															<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=1" style="position: relative; left: 35px; color: brown">X</a></h4>
														</div>
													</div>
												</div>
											</div>					

											<?php
											exit;
										}


										if (isset($_REQUEST['valider_personnel'])) {
										
											$recherche = htmlspecialchars($_REQUEST['valider_personnel']);

											$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

											$recherche1 = -1;
											$recherche2 = -1;

										

											$recupBureau = $bdd->prepare('SELECT * FROM bureau WHERE Nom = ?');		
											$recupBureau->execute(array($recherche));

											if ($recupBureau->rowCount() > 0) {

												$recherche1 = $recupBureau->fetch()['Id_bureau'];

											}

											$recupFonction = $bdd->prepare('SELECT * FROM fonction WHERE Nom = ?');		
											$recupFonction->execute(array($recherche));

											if ($recupFonction->rowCount() > 0) {

												$recherche2 = $recupFonction->fetch()['Id_fonction'];

											}

																	

											$req = 'SELECT * FROM personnel WHERE Matricule_personnel LIKE  "%'.$recherche.'%" OR Date_debut_affectation LIKE  "%'.$recherche.'%" OR Date_fin_affectation LIKE  "%'.$recherche.'%" OR Nom LIKE  "%'.$recherche.'%" OR Prenom LIKE  "%'.$recherche.'%" OR Telephone LIKE  "%'.$recherche.'%" OR Adresse LIKE  "%'.$recherche.'%" OR Email LIKE  "%'.$recherche.'%" OR Id_bureau LIKE  "%'.$recherche1.'%" OR Id_fonction LIKE  "%'.$recherche2.'%"  ORDER BY Nom ASC';
										
										

											$resultPersonnel = mysqli_query($conn, $req);

								
											?>

												<table class="table1">
												<tr>
													<th class="th1">-|| Matricule ||-</th>
													<th class="th1">-|| Nom ||-</th>
													<th class="th1">-|| Prénom ||-</th>
													<th class="th1">-|| Téléphone ||-</th>
													<th class="th1">-|| Adresse ||-</th>
													<th class="th1">-|| Email ||-</th>
													<th class="th1">-|| Bureau ||-</th>
													<th class="th1">-|| Fonction ||-</th>
													<th class="th1">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($resultPersonnel))
											{
												$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

												$Id_bureau = $row['Id_bureau']??'NULL';

												if ($Id_bureau != 'NULL') {
													$recupBureau = $bdd->prepare('SELECT Nom FROM bureau WHERE Id_bureau = ?');
													$recupBureau->execute(array($row['Id_bureau']));
													$Nom_bureau = $recupBureau->fetch()['Nom'];
												} else {
													$Nom_bureau = '';
												}

												$Id_fonction = $row['Id_fonction']??'NULL';

												if ($Id_fonction != 'NULL') {
													$recupFonction = $bdd->prepare('SELECT Nom FROM fonction WHERE Id_fonction = ?');
													$recupFonction->execute(array($row['Id_fonction']));
													$Nom_fonction = $recupFonction->fetch()['Nom'];
												} else {
													$Nom_fonction = '';
												}

												?>

												<tr>
													<td class="td1"><?=$row['Matricule_personnel'];?></td>
													<td class="td1"><?=$row['Nom'];?></td>
													<td class="td1"><?=$row['Prenom'];?></td>
													<td class="td1"><?=$row['Telephone'];?></td>
													<td class="td1"><?=$row['Adresse'];?></td>
													<td class="td1"><?=$row['Email'];?></td>
													<td class="td1"><?=$Nom_bureau;?></td>
													<td class="td1"><?=$Nom_fonction;?></td>

													<td class="td1">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
													</td>
												</tr>
												
												<?php
											}


										} else {
											
											$req = "SELECT * FROM personnel ORDER BY Id_personnel ASC";
											$resultPersonnel = mysqli_query($conn, $req);

								
											?>

												<table class="table1">
												<tr>
													<th class="th1">-|| Matricule ||-</th>
													<th class="th1">-|| Nom ||-</th>
													<th class="th1">-|| Prénom ||-</th>
													<th class="th1">-|| Téléphone ||-</th>
													<th class="th1">-|| Adresse ||-</th>
													<th class="th1">-|| Email ||-</th>
													<th class="th1">-|| Bureau ||-</th>
													<th class="th1">-|| Fonction ||-</th>
													<th class="th1">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($resultPersonnel))
											{
												$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

												$Id_bureau = $row['Id_bureau']??'NULL';

												if ($Id_bureau != 'NULL') {
													$recupBureau = $bdd->prepare('SELECT Nom FROM bureau WHERE Id_bureau = ?');
													$recupBureau->execute(array($row['Id_bureau']));
													$Nom_bureau = $recupBureau->fetch()['Nom'];
												} else {
													$Nom_bureau = '';
												}

												$Id_fonction = $row['Id_fonction']??'NULL';

												if ($Id_fonction != 'NULL') {
													$recupFonction = $bdd->prepare('SELECT Nom FROM fonction WHERE Id_fonction = ?');
													$recupFonction->execute(array($row['Id_fonction']));
													$Nom_fonction = $recupFonction->fetch()['Nom'];
												} else {
													$Nom_fonction = '';
												}

												

												?>

												<tr>
													<td class="td1"><?=$row['Matricule_personnel'];?></td>
													<td class="td1"><?=$row['Nom'];?></td>
													<td class="td1"><?=$row['Prenom'];?></td>
													<td class="td1"><?=$row['Telephone'];?></td>
													<td class="td1"><?=$row['Adresse'];?></td>
													<td class="td1"><?=$row['Email'];?></td>
													<td class="td1"><?=$Nom_bureau;?></td>
													<td class="td1"><?=$Nom_fonction;?></td>

													<td class="td1">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
													</td>
												</tr>
												
												<?php
											}
											
										}


										
										mysqli_close($conn);

									?>
											</table>

							
					</div>
					<?php 

		} else if ($s == 2) {
			
			?>

			<div class="form_">

						<br>
						
						<form class="needs-validation" novalidate method="REQUEST" action="select.php">

							<input hidden="" type="number" name="Id_bureau" value="<?= isset($_REQUEST['Id_bureau'])?$_REQUEST['Id_bureau']:'';?>">

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomCode">Code</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomCode" name="Code" placeholder="Code du bureau" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Code'])?$_REQUEST['Code']:'';?>">

										        <?php if (!isset($_REQUEST['code1'])): ?>
										        	<span>Saisissez le code!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['code1'])): ?>
										        	<p><?= $_REQUEST['code1']; ?></P>
										       	<?php endif ?>

										    </div>

										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîçïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="Nom" placeholder="Nom du bureau" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Nom'])?$_REQUEST['Nom']:'';?>">

										        <?php if (!isset($_REQUEST['nom1'])): ?>
										        	<span>Saisissez le nom!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['nom1'])): ?>
										        	<p><?= $_REQUEST['nom1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	

								</div>

								

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi_bureau" value="Enregistrer">
							 					
										    </div>
								   		</div>	

								</div>

							</form>

							<form action="rechercher.php" method="REQUEST" class="form_r2_1">			      	

			        		        <div>
				     			     	<input type="button" value="Actualiser" onclick="window.location='deconnexion_admin_form1_2.php?select=2';" id="validationCustomBtn2">
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_bureau" value="envoyer" id="validationCustomBtn">

				                    </div>

				      	 	 </form>

								<?php

										$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
										if (!$conn) { ?>

											<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
											<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
												<div class="row py-3 justify-content-center">
													<div class="col-md-7">
														<div class="alert alert-danger">
															<h1 class="py-3 text-center">Erreur !</h1>
															<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=2" style="position: relative; left: 35px; color: brown">X</a></h4>
														</div>
													</div>
												</div>
											</div>					

											<?php
											exit;
										}


										if (isset($_REQUEST['valider_bureau'])) {
										
											$recherche = htmlspecialchars($_REQUEST['valider_bureau']);

											$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

										

									

											$req = 'SELECT * FROM bureau WHERE Code LIKE  "%'.$recherche.'%" OR Nom LIKE  "%'.$recherche.'%"  ORDER BY Nom ASC';
										
										

											$result = mysqli_query($conn, $req);
											?>

												<table class="table3">
												<tr>
													<th class="th3">-|| Code ||</th>
													<th class="th3">-|| Nom ||</th>
													<th class="th3">-|| Opérations ||</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{
												$Nom = $row['Nom'];
												$Nom = str_replace("'","\'",$Nom);
												$Code = $row['Code'];
												$Id_bureau = $row['Id_bureau'];
												?>
												<tr>
													<td class="td2"><?=$row['Code'];?></td>
													<td class="td2"><?=$row['Nom'];?></td>
													<td class="td2">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
													</td>
												</tr>
												
												<?php
											}



										} else {
											
											$req = "SELECT * FROM bureau ORDER BY Id_bureau ASC";
											$result = mysqli_query($conn, $req);

											?>

												<table class="table2">
												<tr>
													<th class="th2">-|| Code ||-</th>
													<th class="th2">-|| Nom ||-</th>
													<th class="th2">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{

												$Nom = $row['Nom'];
												$Nom = str_replace("'","\'",$Nom);
												$Code = $row['Code'];
												$Id_bureau = $row['Id_bureau'];
												?>
												<tr>
													<td class="td2"><?=$row['Code'];?></td>
													<td class="td2"><?=$row['Nom'];?></td>
													<td class="td2">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
													</td>
												</tr>
												
												<?php
											}
											
										}

										
										mysqli_close($conn);

									?>
											</table>

							

					</div>
					<?php 
		} else if ($s == 3) {
			
			?>

			<div class="form_">

						<br>
						
						<form class="needs-validation" novalidate method="REQUEST" action="select.php">

							<input hidden="" type="number" name="Id_fonction" value="<?= isset($_REQUEST['Id_fonction'])?$_REQUEST['Id_fonction']:'';?>">

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomCode">Code</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomCode" name="Code" placeholder="Code de la fonction" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Code'])?$_REQUEST['Code']:'';?>">

										        <?php if (!isset($_REQUEST['code1'])): ?>
										        	<span>Saisissez le code!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['code1'])): ?>
										        	<p><?= $_REQUEST['code1']; ?></P>
										       	<?php endif ?>

										    </div>

										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîçïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="Nom" placeholder="Nom de la fonction" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Nom'])?$_REQUEST['Nom']:'';?>">

										        <?php if (!isset($_REQUEST['nom1'])): ?>
										        	<span>Saisissez le nom!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['nom1'])): ?>
										        	<p><?= $_REQUEST['nom1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	

								</div>

								

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi_fonction" value="Enregistrer">
							 					
										    </div>
								   		</div>	

								</div>

							</form>

							<form action="rechercher.php" method="REQUEST" class="form_r2_1">			      	

			        		        <div>
				     			     	<input type="button" value="Actualiser" onclick="window.location='deconnexion_admin_form1_2.php?select=3';" id="validationCustomBtn2">
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_fonction" value="envoyer" id="validationCustomBtn">

				                    </div>

				      	 	 </form>

								<?php

										$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
										if (!$conn) { ?>

											<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
											<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
												<div class="row py-3 justify-content-center">
													<div class="col-md-7">
														<div class="alert alert-danger">
															<h1 class="py-3 text-center">Erreur !</h1>
															<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
														</div>
													</div>
												</div>
											</div>					

											<?php
											exit;
										}


										if (isset($_REQUEST['valider_fonction'])) {
										
											$recherche = htmlspecialchars($_REQUEST['valider_fonction']);

											$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

										

									

											$req = 'SELECT * FROM fonction WHERE Code LIKE  "%'.$recherche.'%" OR Nom LIKE  "%'.$recherche.'%"  ORDER BY Nom ASC';
										
										

											$result = mysqli_query($conn, $req);
											?>

												<table class="table3">
												<tr>
													<th class="th3">-|| Code ||</th>
													<th class="th3">-|| Nom ||</th>
													<th class="th3">-|| Opérations ||</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{?>
												<tr>
													<td class="td3"><?=$row['Code'];?></td>
													<td class="td3"><?=$row['Nom'];?></td>
													<td class="td3">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
													</td>
												</tr>
												
												<?php
											}



										} else {
											
											$req = "SELECT * FROM fonction ORDER BY Id_fonction ASC";
											$result = mysqli_query($conn, $req);
											?>

												<table class="table3">
												<tr>
													<th class="th3">-|| Code ||</th>
													<th class="th3">-|| Nom ||</th>
													<th class="th3">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{?>
												<tr>
													<td class="td3"><?=$row['Code'];?></td>
													<td class="td3"><?=$row['Nom'];?></td>
													<td class="td3">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
													</td>
												</tr>
												
												<?php
											}
											
										}



										
										mysqli_close($conn);

									?>
											</table>

							

					</div>
					<?php 
		} else if ($s == 4) {
			
			?>

			

				<div class="form_4">

					<br>

							<form class="needs-validation" novalidate method="REQUEST" action="select.php">

							<?php
								// if(isset($_SESSION['Id_utilisateur'])) {
								// 	$Id_utilisateur = $_SESSION['Id_utilisateur'];
								// 	echo "________________________________________________________________________ $Id_utilisateur";
								// }
							?>
								<input type="number" hidden="" name="Id_demande" value="<?= isset($_REQUEST['Id_demande'])?$_REQUEST['Id_demande']:'';?>">
								<input type="number" hidden="" name="Id_etablissement" value="<?= isset($_REQUEST['Id_etablissement'])?$_REQUEST['Id_etablissement']:'';?>">
								<input type="number" hidden="" name="Id_utilisateur" value="<?= isset($_SESSION['Id_utilisateur'])?$_SESSION['Id_utilisateur']:'';?>">
								

									<div class="row">
								
											<div class="col-md-4 mb-3 block1">
									 
										    	<div class="input-group">

											    	<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
											        </div>
											        
											        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="NomD" placeholder="Nom du demandeur" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['NomD'])?$_REQUEST['NomD']:'';?>">

											        <?php if (!isset($_REQUEST['nomD1'])): ?>
											        	<span>Saisissez le nom!</span>
											       	<?php endif ?>

											       	<?php if (isset($_REQUEST['nomD1'])): ?>
											        	<p><?= $_REQUEST['nomD1']; ?></P>
											       	<?php endif ?>

											    </div>
											    <div class="input-group input-group-left">
											    	<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPrenom">Prénom</label>
											        </div>
											        
											        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomPrenom" name="PrenomD" placeholder="Prénom du demandeur" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['PrenomD'])?$_REQUEST['PrenomD']:'';?>">

											        <?php if (!isset($_REQUEST['prenomD1'])): ?>
											        	<span>Saisissez le prénom!</span>
											       	<?php endif ?>

											       	<?php if (isset($_REQUEST['prenomD1'])): ?>
											        	<p><?= $_REQUEST['prenomD1']; ?></P>
											       	<?php endif ?>

											    </div>    
									   		</div>	

									   		<div class="col-md-4 mb-3 block2">
									 
										    	<div class="input-group">

											    	<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateDebut">Date Naissance</label>
											        </div>

											        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateDebut" name="dateN" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['dateN'])&&$_REQUEST['dateN']!='')?$_REQUEST['dateN']:date('Y-m-d');?>">
											        <?php if (!isset($_REQUEST['dateN1'])): ?>
											        	<span>Renseigneez une date!</span>
											       	<?php endif ?>


											        <?php if (isset($_REQUEST['dateN1'])): ?>
											        	<p><?= $_REQUEST['dateN1']; ?></P>
											       	<?php endif ?>

											    </div>
											    <div class="input-group input-group-left">
											        <div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomLieu">Lieu Naissance</label>
											        </div>
											        
											        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomLieu" name="Lieu" placeholder="Lieu de Naissance" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Lieu'])?$_REQUEST['Lieu']:'';?>">

											        <?php if (!isset($_REQUEST['lieu1'])): ?>
											        	<span>Saisissez le lieu de naissance!</span>
											       	<?php endif ?>

											       	<?php if (isset($_REQUEST['lieu1'])): ?>
											        	<p><?= $_REQUEST['lieu1']; ?></P>
											       	<?php endif ?>

										     	</div>
									   		</div>	

									</div>

									<div class="row">
									
											<div class="col-md-4 mb-3 block1">
									 
										    	<div class="input-group">
										   
											        <div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomAdresse">Adresse</label>
											        </div>
											        
											        <input type="text" pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomAdresse" name="AdresseD" placeholder="Adresse du demandeur" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['AdresseD'])?$_REQUEST['AdresseD']:'';?>">

											        <?php if (!isset($_REQUEST['AdresseD1'])): ?>
											        	<span>Saisissez l'adresse!</span>
											       	<?php endif ?>

											       	<?php if (isset($_REQUEST['AdresseD1'])): ?>
											        	<p><?= $_REQUEST['AdresseD1']; ?></P>
											       	<?php endif ?>

											    </div>

											    <div class="input-group input-group-left">
											    	<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTelephone">Téléphone</label>
											        </div>
											        
											        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomTelephone" name="TelephoneD" placeholder="Téléphone du demandeur" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['TelephoneD'])?$_REQUEST['TelephoneD']:'';?>">

											        <?php if (!isset($_REQUEST['TelephoneD1'])): ?>
											        	<span>Saisissez le téléphone!</span>
											       	<?php endif ?>

											       	<?php if (isset($_REQUEST['TelephoneD1'])): ?>
											        	<p><?= $_REQUEST['TelephoneD1']; ?></P>
											       	<?php endif ?>

											    </div>  
									   		</div>	



									</div>


									<div class="row">

									
											<div class="col-md-4 mb-3 block1">
									 
										    	<div class="input-group">

											    	<div class="input-group-prepend">
										         		<label class="input-group-text" id="inputGroupPrepend" for="validationCustomEmail">Email</label>
											        </div>
											        
											        <input type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="validationCustomEmail" name="EmailD" placeholder="Email du demandeur" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['EmailD'])?$_REQUEST['EmailD']:'';?>">

											        <?php if (!isset($_REQUEST['EmailD1'])): ?>
											        	<span>Saisissez l'e-mail!</span>
											       	<?php endif ?>

											       	<?php if (isset($_REQUEST['EmailD1'])): ?>
											        	<p><?= $_REQUEST['EmailD1']; ?></P>
											       	<?php endif ?>

											    </div>
						
										    	<div class="input-group input-group-left">

										    		<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDecision">Décision</label>
											        </div>
		
											    	<div class="selection">
										    			<select class="selection1" name="selectDecision" id="validationCustomDecision">

										    				<option value="Attente"<?='Attente' == ($_REQUEST['selectDecision']??'') ? ' selected="selected"' : '';?>>Attente</option>
										    				<option value="Accepter"<?='Accepter' == ($_REQUEST['selectDecision']??'') ? ' selected="selected"' : '';?>>Accepter</option>
										    				<option value="Rejeter"<?='Rejeter' == ($_REQUEST['selectDecision']??'') ? ' selected="selected"' : '';?>>Rejeter</option>
								    	
										    			</select>
										    		</div>

											    </div>

											   <?php if (isset($_REQUEST['selectDecision1'])): ?>
										        	<p><?= $_REQUEST['selectDecision1']; ?></P>
										       	<?php endif ?>

									   		</div>	

									</div>

									<div class="row">
								
										<div class="col-md-4 mb-3 block1">
									 
										    <div class="input-group">

											    	<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNiveau">Niveau</label>
											        </div>
											        
											        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNiveau" name="Niveau" placeholder="Nom du niveau" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Niveau'])?$_REQUEST['Niveau']:'';?>">

											        <?php if (!isset($_REQUEST['Niveau1'])): ?>
											        	<span>Saisissez le niveau!</span>
											       	<?php endif ?>

											       	<?php if (isset($_REQUEST['Niveau1'])): ?>
											        	<p><?= $_REQUEST['Niveau1']; ?></P>
											       	<?php endif ?>

											 </div>

												

										   	<div class="input-group input-group-left">
										    		<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFonction">Etablissement</label>
											        </div>
		
											    	<div class="selection">
											    		<select class="selection1" name="selectEtablissement">

												   			<?php
																if(isset($_REQUEST['selectEtablissement'])):
																    echo "<option selected>".$_REQUEST['selectEtablissement']."</option>";
																    
																else:
																    echo "<option>--Choix Etablissement--</option>";
																endif;
															?>
																   
												    		<?php

															$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
															if (!$conn) { ?>

																<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
																<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
																	<div class="row py-3 justify-content-center">
																		<div class="col-md-7">
																			<div class="alert alert-danger">
																				<h1 class="py-3 text-center">Erreur !</h1>
																				<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=1" style="position: relative; left: 35px; color: brown">X</a></h4>
																			</div>
																		</div>
																	</div>
																</div>					

																<?php
																exit;
															}

															$req = "SELECT * FROM etablissement ORDER BY Nom ASC";
															$result = mysqli_query($conn, $req);
															

															while($row=mysqli_fetch_assoc($result))
															{?>
																	<option value="<?=$row['Nom'];?>"<?=$row['Nom'] == ($_REQUEST['selectEtablissement']??'') ? ' selected="selected"' : '';?>><?=$row['Nom'];?></option>
															<?php
															}
															mysqli_close($conn);

														?>
											    		</select>
											    </div>	

											 </div>

											 
											   
										</div> 	

									</div>

									<div class="row">

										<div class="input-group">
						    	
									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDomaine">Domaine</label>
									        </div>
									        
									        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomDomaine" name="Domaine" placeholder="Nom du domaine" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Domaine'])?$_REQUEST['Domaine']:'';?>">

									        <?php if (!isset($_REQUEST['Domaine1'])): ?>
									        	<span>Saisissez le nom!</span>
									       	<?php endif ?>

									       	<?php if (isset($_REQUEST['Domaine1'])): ?>
									        	<p><?= $_REQUEST['Domaine1']; ?></P>
									       	<?php endif ?>

									    </div>  
										    
									</div>





					

								<div class="row">
				
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi_demande" value="Ajouter">
							 					
										    </div>
								   		</div>	

								</div>	




			
						</form>


						<form action="rechercher.php" method="REQUEST" class="form_r2">			      	

			        		        <div>
				     			     	<input type="button" value="Actualiser" onclick="window.location='deconnexion_admin_form1_2.php?select=4';" id="validationCustomBtn2">
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_demande" value="envoyer" id="validationCustomBtn">

				                    </div>

				       	 </form>
				
			

							
								
				

					<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_demande'])) {
										
							$recherche = htmlspecialchars($_REQUEST['valider_demande']);

							$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

							$recupEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Nom = ?');		
							$recupEtablissement->execute(array($recherche));

							if ($recupEtablissement->rowCount() > 0) {

								$recherche = $recupEtablissement->fetch()['Id_etablissement'];

							}

					

							$req = 'SELECT * FROM demande WHERE Id_etablissement LIKE  "%'.$recherche.'%" OR Niveau LIKE  "%'.$recherche.'%" OR Domaine LIKE  "%'.$recherche.'%" OR Nom_demandeur LIKE  "%'.$recherche.'%" OR Prenom_demandeur LIKE  "%'.$recherche.'%" OR Decision LIKE  "%'.$recherche.'%" ORDER BY Id_demande ASC';
						

							$result = mysqli_query($conn, $req);
							?>

								<table class="table4">
								<tr>
									<th class="th4">-|| Décision ||-</th>
									<th class="th4">-|| Nom ||-</th>
									<th class="th4">-|| Prénom ||-</th>
									<th class="th4">-|| Etablissement ||-</th>
									<th class="th4">-|| Niveau ||-</th>
									<th class="th4">-|| Domaine ||-</th>
									<th class="th4">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_etablissement = $row['Id_etablissement']??'NULL';

								if ($Id_etablissement != 'NULL') {

									$req1 = "SELECT * FROM etablissement WHERE Id_etablissement = $Id_etablissement";
									$result1 = mysqli_query($conn, $req1);
									while($row1=mysqli_fetch_assoc($result1))
									{
										$NomE = $row1['Nom'];
										$selectPays = $row1['Pays'];
									}

								} else {
									$NomE = '';
									$selectPays = '';
								}



								?>
								<tr>

									<td class="td4"><?=$row['Decision'];?></td>
									<td class="td4"><?=$row['Nom_demandeur'];?></td>
									<td class="td4"><?=$row['Prenom_demandeur'];?></td>
									<td class="td4"><?=$NomE;?></td>
									<td class="td4"><?=$row['Niveau'];?></td>
									<td class="td4"><?=$row['Domaine'];?></td>
									<td class="td4">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">


										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">
									</td>
								</tr>
								
								<?php
							}



						} else {
							
							$req = "SELECT * FROM demande ORDER BY Id_demande ASC";
							$result = mysqli_query($conn, $req);
							?>

								<table class="table4">
								<tr>
									<th class="th4">-|| Décision ||-</th>
									<th class="th4">-|| Nom ||-</th>
									<th class="th4">-|| Prénom ||-</th>
									<th class="th4">-|| Etablissement ||-</th>
									<th class="th4">-|| Niveau ||-</th>
									<th class="th4">-|| Domaine ||-</th>
									<th class="th4">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_etablissement = $row['Id_etablissement']??'NULL';

								if ($Id_etablissement != 'NULL') {
									$req1 = "SELECT * FROM etablissement WHERE Id_etablissement = $Id_etablissement";
									$result1 = mysqli_query($conn, $req1);
									while($row1=mysqli_fetch_assoc($result1))
									{
										$NomE = $row1['Nom'];
										$selectPays = $row1['Pays'];
									}
								} else {
									$NomE = '';
									$selectPays = '';
								}

								


								?>
								<tr>

									<td class="td4"><?=$row['Decision'];?></td>
									<td class="td4"><?=$row['Nom_demandeur'];?></td>
									<td class="td4"><?=$row['Prenom_demandeur'];?></td>
									<td class="td4"><?=$NomE;?></td>
									<td class="td4"><?=$row['Niveau'];?></td>
									<td class="td4"><?=$row['Domaine'];?></td>
									<td class="td4">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">


										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">
									</td>
								</tr>
								
								<?php
							}
						}




						mysqli_close($conn);

					?>
							</table>

				

			</div>	
		
					<?php 


		} else if ($s == 51) {
			
			?>

			<div class="form_4_5">

					<br>

						<form class="needs-validation" novalidate method="REQUEST" action="select.php">

							<input type="number" hidden="" name="Id_stage" value="<?=isset($_REQUEST['Id_stage'])?$_REQUEST['Id_stage']:'';?>">
							<input type="number" hidden="" name="Id_personnel" value="<?=isset($_REQUEST['Id_personnel'])?$_REQUEST['Id_personnel']:'';?>">
							<input type="number" hidden="" name="Id_demande" value="<?=isset($_REQUEST['Id_demande'])?$_REQUEST['Id_demande']:'';?>">
							<input type="number" hidden="" name="Id_utilisateur" value="<?= isset($_SESSION['Id_utilisateur'])?$_SESSION['Id_utilisateur']:'';?>">

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        

										       	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="Stage" placeholder="Nom du stage" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Stage'])?$_REQUEST['Stage']:'';?>">

										        <?php if (!isset($_REQUEST['Stage1'])): ?>
										        	<span>Saisissez le stage!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Stage1'])): ?>
										        	<p><?= $_REQUEST['Stage1']; ?></P>
										       	<?php endif ?>

										    </div>
								

										    <div class="input-group input-group-left">
										    	
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPrenom">Sujet</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomPrenom" name="Sujet" placeholder="Sujet du stage" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['Sujet'])?$_REQUEST['Sujet']:'';?>">

										        <?php if (!isset($_REQUEST['Sujet1'])): ?>
										        	<span>Saisissez le sujet!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Sujet1'])): ?>
										        	<p><?= $_REQUEST['Sujet1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	

								   	

								</div>

								<div class="row">

									
											<div class="col-md-4 mb-3 block2">
									 
										    	<div class="input-group">

										    		<div class="input-group-prepend">
											         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDecision">Niveau</label>
											        </div>

											   
		
											    	<div class="selection">
										    			<select class="selection1" name="selectNiveau">

										    				<?php
										    					if (isset($_REQUEST['selectNiveau'])) {
										    						?>
										    						<option value="<?=$_REQUEST['selectNiveau'];?>"><?=$_REQUEST['selectNiveau'];?></option>
										    						<?php
										    					} else if (isset($_REQUEST['selectNiveau1'])) {
										    						?>
										    						<option value="<?=$_REQUEST['selectNiveau1'];?>"><?=$_REQUEST['selectNiveau1'];?></option>
										    						<?php
										    					} else {
										    						?>
										    						<option value=""></option>
										    						<?php
										    					}

										    				?>
										    								

										    			</select>
										    		</div>

											    	

											    </div>
						
										    

									   		</div>	

									</div>

								<div class="row">

								
										<div class="col-md-4 mb-3 block">
								 
									    	<div class="input-group1">
									    		

										    	<div class="selection_1">
										    		<select class="selection1_1" name="selectEncadrant">

												
													<?php
													if(isset($_REQUEST['selectEncadrant']) && $_REQUEST['selectEncadrant'] !== null && $_REQUEST['selectEncadrant'] !== "null" && $_REQUEST['selectEncadrant'] !== "") {
														echo "<option selected>".$_REQUEST['selectEncadrant'] === null?'':''."</option>";
													} else {
														echo "<option value='------------Choix Encadrant------------'>------------Choix Encadrant------------</option>";
													}
													?>





												        
				
											    		<?php

														$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
														if (!$conn) { ?>

															<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
															<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
																<div class="row py-3 justify-content-center">
																	<div class="col-md-7">
																		<div class="alert alert-danger">
																			<h1 class="py-3 text-center">Erreur !</h1>
																			<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php" style="position: relative; left: 35px; color: brown">X</a></h4>
																		</div>
																	</div>
																</div>
															</div>					

															<?php
															exit;
														}

														if (isset($updateStage)) {

															$req = "SELECT * FROM personnel WHERE Id_personnel = $updateStage";
															$result = mysqli_query($conn, $req);
															

															while($row=mysqli_fetch_assoc($result))
															{

												                $Id_bureau=$row['Id_bureau'];
												                $Id_fonction=$row['Id_fonction'];
												                $Id_personnel=$row['Id_personnel'];

												                $req1 = "SELECT Nom FROM fonction WHERE Id_fonction = $Id_fonction";
																$result1 = mysqli_query($conn, $req1);
																while($row1=mysqli_fetch_assoc($result1))
																{
																	 $Nom_fonction=$row1['Nom'];
																}

																$req2 = "SELECT Nom FROM bureau WHERE Id_bureau = $Id_bureau";
																$result2 = mysqli_query($conn, $req2);
																while($row2=mysqli_fetch_assoc($result2))
																{
																	 $Nom_bureau=$row2['Nom'];
																}
												              
																?>

																	<option value="<?=$Id_personnel;?>" <?=$Id_personnel == ($_REQUEST['selectEncadrant']??'') ? ' selected="selected"' : '';?>>
																		<?="ENCADRANT : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Nom']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$row['Prenom']."&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;FONCTION : &nbsp;&nbsp;&nbsp;".$Nom_fonction."&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;BUREAU : &nbsp;&nbsp;&nbsp;".$Nom_bureau;?>
																			
																		</option>

															
																<?php
															}

														} else {

															$req = "SELECT * FROM personnel ORDER BY Nom ASC";
															$result = mysqli_query($conn, $req);
															

															while($row=mysqli_fetch_assoc($result))
															{

												                $Id_bureau=$row['Id_bureau']??'NULL';
												                $Id_fonction=$row['Id_fonction']??'NULL';
												                $Id_personnel=$row['Id_personnel'];

												                if ($Id_fonction != 'NULL') {
												                	$req1 = "SELECT Nom FROM fonction WHERE Id_fonction = $Id_fonction";
																	$result1 = mysqli_query($conn, $req1);
																	while($row1=mysqli_fetch_assoc($result1))
																	{
																		 $Nom_fonction=$row1['Nom'];
																	}
												                } else {
												                	$Nom_fonction='';
												                }

												                if ($Id_bureau != 'NULL') {
												                	$req2 = "SELECT Nom FROM bureau WHERE Id_bureau = $Id_bureau";
																	$result2 = mysqli_query($conn, $req2);
																	while($row2=mysqli_fetch_assoc($result2))
																	{
																		 $Nom_bureau=$row2['Nom'];
																	}
												                } else {
												                	$Nom_bureau='';
												                }
												           
												                

																
												              
																?>

																	<option value="<?=$Id_personnel;?>" <?=$Id_personnel == ($_REQUEST['selectEncadrant']??'') ? ' selected="selected"' : '';?>>
																		<?="ENCADRANT : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Nom']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$row['Prenom']."&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;FONCTION : &nbsp;&nbsp;&nbsp;".$Nom_fonction."&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;BUREAU : &nbsp;&nbsp;&nbsp;".$Nom_bureau;?>
																			
																	</option>

															
																<?php
															}
														}
														

														
														mysqli_close($conn);

													?>
										    		</select>
										    	</div>	

										    </div>
										   
								   		</div>	

								   		<div class="col-md-4 mb-3 block">
								 
									    	<div class="input-group1">
									    		
	
										    	<div class="selection_1">
										    		<select class="selection1_1" name="selectStagiaire">

											   			<?php
															if(isset($_REQUEST['selectStagiaire'])):
															
																echo "<option value=".$_REQUEST['selectStagiaire']." selected>".$_REQUEST['selectStagiaire']."</option>";

															endif;
														?>
															   
											    		<?php

														$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
														if (!$conn) { ?>

															<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
															<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
																<div class="row py-3 justify-content-center">
																	<div class="col-md-7">
																		<div class="alert alert-danger">
																			<h1 class="py-3 text-center">Erreur !</h1>
																			<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=1" style="position: relative; left: 35px; color: brown">X</a></h4>
																		</div>
																	</div>
																</div>
															</div>					

															<?php
															exit;
														}

														if (isset($_REQUEST['Id_demande'])) {
															
															$Id_demande = $_REQUEST['Id_demande'];

															$req = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
															$result = mysqli_query($conn, $req);
															

															while($row=mysqli_fetch_assoc($result))
															{	
																$Id_etablissement = $row['Id_etablissement'];
																$req1 = "SELECT * FROM etablissement WHERE Id_etablissement = $Id_etablissement";
																$result1 = mysqli_query($conn, $req1);
																while($row1=mysqli_fetch_assoc($result1))
																{
																	$Etablissement = $row1['Nom'];
																}	

																?>

																	<option value="<?=$row['Id_demande'];?>"<?=$row['Id_demande'] == ($_REQUEST['selectStagiaire']??'') ? ' selected="selected"' : '';?>><?="STAGIAIRE : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Nom_demandeur']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$row['Prenom_demandeur']."&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;ETABLISSEMENT : &nbsp;&nbsp;&nbsp;".$Etablissement."&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;NIVEAU : &nbsp;&nbsp;&nbsp;".$row['Niveau']."&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;DOMAINE : &nbsp;&nbsp;&nbsp;".$row['Domaine'];?></option>
															<?php
															}
														}

														
														mysqli_close($conn);

													?>
										    		</select>
										    	</div>	

										    </div>
										   
								   		</div>	

								</div>



								
								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi_stage" value="Affeccter">
							 					
										    </div>
								  		</div>	

								</div>

							</form>


							<form action="rechercher.php" method="REQUEST" class="form_r4">			      	

			        		        <div>
				     			     	<input type="button" value="Actualiser" onclick="window.location='deconnexion_admin_form1_2.php?select=51';" id="validationCustomBtn2">
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_stage" value="envoyer" id="validationCustomBtn">

				                    </div>

				       	 </form>
				
	

							
								
				

					<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_stage'])) {

							// $Prenom_demandeur = "";
							// $Nom_demandeur = "";
							// $Domaine = "";

										
							$recherche = htmlspecialchars($_REQUEST['valider_stage']);
							$recherche1 = -1;
							$recherche2 = -1;

							$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

							$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Nom_demandeur = ?');		
							$recupDemande->execute(array($recherche));

							if ($recupDemande->rowCount() > 0) {

								$recherche1 = $recupDemande->fetch()['Id_demande'];

							}

							$recupDemande1 = $bdd->prepare('SELECT * FROM demande WHERE Prenom_demandeur = ?');		
							$recupDemande1->execute(array($recherche));

							if ($recupDemande1->rowCount() > 0) {

								$recherche1 = $recupDemande1->fetch()['Id_demande'];

							}

							$recupDemande2 = $bdd->prepare('SELECT * FROM demande WHERE Domaine = ?');		
							$recupDemande2->execute(array($recherche));

							if ($recupDemande2->rowCount() > 0) {

								$recherche1 = $recupDemande2->fetch()['Id_demande'];

							}

							$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Nom = ?');		
							$recupPersonnel->execute(array($recherche));

							if ($recupPersonnel->rowCount() > 0) {

								$recherche2 = $recupPersonnel->fetch()['Id_personnel'];

							}

							$recupPersonnel1 = $bdd->prepare('SELECT * FROM personnel WHERE Prenom = ?');		
							$recupPersonnel1->execute(array($recherche));

							if ($recupPersonnel1->rowCount() > 0) {

								$recherche2 = $recupPersonnel1->fetch()['Id_personnel'];

							}

					

							$req = 'SELECT * FROM stage WHERE Id_demande LIKE  "%'.$recherche1.'%" OR Id_personnel LIKE  "%'.$recherche2.'%" OR Nom_stage LIKE  "%'.$recherche.'%" OR Niveau_stage LIKE  "%'.$recherche.'%" OR Sujet_stage LIKE  "%'.$recherche.'%"  ORDER BY Id_stage ASC';
						

							$result = mysqli_query($conn, $req);
							?>

								<table class="table51">
								<tr>
									<th class="th51">-|| Stage ||-</th>
									<th class="th51">-|| Sujet ||-</th>
									<th class="th51">-|| Encadrant ||-</th>
									<th class="th51">-|| Stagiaire ||-</th>
									<th class="th51">-|| Niveau ||-</th>
									<th class="th51">-|| Domaine ||-</th>
									<th class="th51">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
								}


								?>
								<tr>

									<td class="td51"><?=$row['Nom_stage'];?></td>
									<td class="td51"><?=$row['Sujet_stage'];?></td>
									<td class="td51"><?= isset($Prenom_personnel) ? $Prenom_personnel : ''; ?> <?= isset($Nom_personnel) ? $Nom_personnel : ''; ?></td>									<td class="td51"><?=$row['Niveau_stage'];?></td>
									<td class="td51"><?= isset($Prenom_demandeur) ? $Prenom_demandeur : ''; ?> <?= isset($Nom_demandeur) ? $Nom_demandeur : ''; ?></td>									<td class="td51"><?=$row['Niveau_stage'];?></td>
									<td class="td51"><?=$row['Niveau_stage'];?></td>
									<td class="td51"><?=$Domaine;?></td>
									<td class="td51"><?= isset($Domaine) ? $Domaine : ''; ?></td>									
									<td class="td51"><?=$row['Niveau_stage'];?></td>

									<td class="td51">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">

										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">
									

									</td>
								</tr>
								
								<?php
							}


						} else {
							
							$req = "SELECT * FROM stage  ORDER BY Id_stage ASC";
							$result = mysqli_query($conn, $req);
							?>

								<table class="table51">
								<tr>
									<th class="th51">-|| Stage ||-</th>
									<th class="th51">-|| Sujet ||-</th>
									<th class="th51">-|| Encadrant ||-</th>
									<th class="th51">-|| Stagiaire ||-</th>
									<th class="th51">-|| Niveau ||-</th>
									<th class="th51">-|| Domaine ||-</th>
									<th class="th51">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande']??'NULL';
								$Id_personnel = $row['Id_personnel']??'NULL';

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
								}


								?>
								<tr>

									<td class="td51"><?=$row['Nom_stage'];?></td>
									<td class="td51"><?=$row['Sujet_stage'];?></td>
									<td class="td51"><?=($Prenom_personnel??'')." ".($Nom_personnel??'');?></td>
									<td class="td51"><?= isset($Prenom_demandeur) ? $Prenom_demandeur : ''; ?> <?= isset($Nom_demandeur) ? $Nom_demandeur : ''; ?></td>									
									<td class="td51"><?=$row['Niveau_stage'];?></td>
									<td class="td51"><?=($Domaine??'');?></td>
									<td class="td51">

									<?php
										if(isset($row['Id_stage']) && isset($row['Nom_stage']) && isset($row['Sujet_stage']) && isset($row['Niveau_stage'])) {
											?>
											<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">
											<?php
										} else {	
											?>
											<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_stage=<?= isset($row['Id_stage']) ? str_replace("'", "\'", $row['Id_stage']) : ''; ?>&Nom_stage=<?= isset($row['Nom_stage']) ? str_replace("'", "\'", $row['Nom_stage']) : ''; ?>&Sujet_stage=<?= isset($row['Sujet_stage']) ? str_replace("'", "\'", $row['Sujet_stage']) : ''; ?>&Niveau_stage=<?= isset($row['Niveau_stage']) ? str_replace("'", "\'", $row['Niveau_stage']) : ''; ?>&Id_personnel=<?= isset($Id_personnel) ? $Id_personnel : ''; ?>&Id_demande=<?= isset($Id_demande) ? $Id_demande : ''; ?>';">
											<?php
										}
										
									?>


									<?php
										if(isset($row['Id_stage']) && isset($row['Nom_stage']) && isset($row['Sujet_stage']) && isset($row['Niveau_stage'])) {
											?>
												<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">
											<?php
										} else {	
											?>
												<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_stage=<?= isset($row['Id_stage']) ? str_replace("'", "\'", $row['Id_stage']) : ''; ?>&Nom_stage=<?= isset($row['Nom_stage']) ? str_replace("'", "\'", $row['Nom_stage']) : ''; ?>&Sujet_stage=<?= isset($row['Sujet_stage']) ? str_replace("'", "\'", $row['Sujet_stage']) : ''; ?>&Niveau_stage=<?= isset($row['Niveau_stage']) ? str_replace("'", "\'", $row['Niveau_stage']) : ''; ?>&Id_personnel=<?= isset($Id_personnel) ? $Id_personnel : ''; ?>&Id_demande=<?= isset($Id_demande) ? $Id_demande : ''; ?>';">
											<?php
										}
									?>



									

									</td>
								</tr>
								
								<?php
							}
						}




						mysqli_close($conn);

					?>
							</table>

				

			</div>	
		
					<?php 
			
		} else if ($s == 5) {
			
			?>

				<div class="form_5">

					<br>

						<form action="rechercher.php" method="REQUEST" class="form_r3">			      	

			        		        <div>
				     			     	<input type="button" value="Actualiser" onclick="window.location='deconnexion_admin_form1_2.php?select=5';" id="validationCustomBtn2">
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_demande1" value="envoyer" id="validationCustomBtn">

				                    </div>

				       	 </form>

					<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_demande1'])) {
										
							$recherche = htmlspecialchars($_REQUEST['valider_demande1']);
							$attente = 'Attente';

							$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

							$recupEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Nom = ?');		
							$recupEtablissement->execute(array($recherche));

							if ($recupEtablissement->rowCount() > 0) {
								$recherche = $recupEtablissement->fetch()['Id_etablissement'];
							}

							$req = 'SELECT * FROM demande WHERE Id_etablissement LIKE  "%'.$recherche.'%" OR Niveau LIKE  "%'.$recherche.'%" OR Domaine LIKE  "%'.$recherche.'%" OR Nom_demandeur LIKE  "%'.$recherche.'%" OR Prenom_demandeur LIKE  "%'.$recherche.'%" Or Decision LIKE  "%'.$recherche.'%"   ORDER BY Nom_demandeur ASC';
						
							$result = mysqli_query($conn, $req);
							?>
								<table class="table4">
								<tr>
									<th class="th4">-|| Décision ||-</th>
									<th class="th4">-|| Nom ||-</th>
									<th class="th4">-|| Prénom ||-</th>
									<th class="th4">-|| Etablissement ||-</th>
									<th class="th4">-|| Niveau ||-</th>
									<th class="th4">-|| Domaine ||-</th>
									<th class="th4">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_etablissement = $row['Id_etablissement']??'NULL';

								if ($Id_etablissement != 'NULL') {
									$req1 = "SELECT * FROM etablissement WHERE Id_etablissement = $Id_etablissement";
									$result1 = mysqli_query($conn, $req1);
									while($row1=mysqli_fetch_assoc($result1))
									{
										$NomE = $row1['Nom'];
										$selectPays = $row1['Pays'];
									}
								} else {
									$NomE = '';
									$selectPays = '';
								}

								if ($row['Decision'] == 'Attente') {
									?>
										<tr>
											<td class="td4"><?=$row['Decision'];?></td>
											<td class="td4"><?=$row['Nom_demandeur'];?></td>
											<td class="td4"><?=$row['Prenom_demandeur'];?></td>
											<td class="td4"><?=$NomE;?></td>
											<td class="td4"><?=$row['Niveau'];?></td>
											<td class="td4"><?=$row['Domaine'];?></td>
											<td class="td4">
												<input type="button" class="bouton2" name="envoi" value="Ajouter" onclick="window.location.href='deconnexion_admin_form1_2.php?selectNiveau1=<?=str_replace("'", "\'", $row['Niveau']);?>&select=51&Id_demande=<?=$row['Id_demande'];?>&Id_etablissement=<?=$row['Id_etablissement'];?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=str_replace("'", "\'", $row['Decision']);?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">
											</td>
										</tr>
									<?php
								}		
							}


						} else {
							
							$req = "SELECT * FROM demande WHERE Decision = 'Attente' ORDER BY Nom_demandeur ASC";
							$result = mysqli_query($conn, $req);
							?>
								<table class="table4">
								<tr>
									<th class="th4">-|| Décision ||-</th>
									<th class="th4">-|| Nom ||-</th>
									<th class="th4">-|| Prénom ||-</th>
									<th class="th4">-|| Etablissement ||-</th>
									<th class="th4">-|| Niveau ||-</th>
									<th class="th4">-|| Domaine ||-</th>
									<th class="th4">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_etablissement = $row['Id_etablissement']??'NULL';

								if ($Id_etablissement != 'NULL') {
									$req1 = "SELECT * FROM etablissement WHERE Id_etablissement = $Id_etablissement";
									$result1 = mysqli_query($conn, $req1);
									while($row1=mysqli_fetch_assoc($result1))
									{
										$NomE = $row1['Nom'];
										$selectPays = $row1['Pays'];
									}
								} else {
									$NomE = '';
									$selectPays = '';
								}

								?>
									<tr>
										<td class="td4"><?=$row['Decision'];?></td>
										<td class="td4"><?=$row['Nom_demandeur'];?></td>
										<td class="td4"><?=$row['Prenom_demandeur'];?></td>
										<td class="td4"><?=$NomE;?></td>
										<td class="td4"><?=$row['Niveau'];?></td>
										<td class="td4"><?=$row['Domaine'];?></td>
										<td class="td4">
											<input type="button" class="bouton2" name="envoi" value="Ajouter" onclick="window.location.href='deconnexion_admin_form1_2.php?selectNiveau1=<?=str_replace("'", "\'", $row['Niveau']);?>&select=51&Id_demande=<?=$row['Id_demande'];?>&Id_etablissement=<?=$row['Id_etablissement'];?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=str_replace("'", "\'", $row['Decision']);?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">
										</td>
									</tr>
								<?php
							}
						}




						mysqli_close($conn);

					?>
							</table>

				

			</div>	
		
					<?php 

			
		} else if ($s == 6) {
			
			?>

			<div class="form_4_6">

					<br>

						<form class="needs-validation" novalidate method="REQUEST" action="select.php">	

							<input hidden="" type="number" name="Id_etablissement" value="<?= isset($_REQUEST['Id_etablissement'])?$_REQUEST['Id_etablissement']:'';?>">
									
								<div class="row">
									
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group">

										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="NomE" placeholder="Nom du établissement" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['NomE'])?$_REQUEST['NomE']:'';?>">

										        <?php if (!isset($_REQUEST['nomE1'])): ?>
										        	<span>Saisissez le nom!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['nomE1'])): ?>
										        	<p><?= $_REQUEST['nomE1']; ?></P>
										       	<?php endif ?>

										    </div>
										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPrenom">Boîte Postale</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomPrenom" name="BP" placeholder="Boîte postale" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['BP'])?$_REQUEST['BP']:'';?>">

										        <?php if (!isset($_REQUEST['BP1'])): ?>
										        	<span>Saisissez la boîte postale!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['BP1'])): ?>
										        	<p><?= $_REQUEST['BP1']; ?></P>
										       	<?php endif ?>

										    </div>    
								   		</div>	

								   		<div class="col-md-4 mb-3 block2">
								 
									    	<div class="input-group">

										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDecision">Pays</label>
										        </div>

										    	<div class="selection">

									    			<select class="selection1" name="selectPays">

									    					<option value="Senegal"<?='Senegal' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Senegal</option>

									    					<option value="Afghanistan"<?='Afghanistan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Afghanistan</option>
									    					<option value="Afrique_Centrale"<?='Afrique_Centrale' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Afrique_Centrale</option>
									    					<option value="Afrique_Centrale"<?='Afrique_Centrale' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Afrique_Centrale</option>
									    					<option value="Albanie"<?='Albanie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Albanie</option>
									    					<option value="Algerie"<?='Algerie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Algerie</option>
									    					<option value="Allemagne"<?='Allemagne' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Allemagne</option>
									    					<option value="Andorre"<?='Andorre' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Andorre</option>
									    					<option value="Angola"<?='Angola' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Angola</option>
									    					<option value="Anguilla"<?='Anguilla' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Anguilla</option>
									    					<option value="Arabie_Saoudite"<?='Arabie_Saoudite' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Arabie_Saoudite</option>
									    					<option value="Argentine"<?='Argentine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Argentine</option>
									    					<option value="Armenie"<?='Armenie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Armenie</option>
									    					<option value="Australie"<?='Australie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Australie</option>
									    					<option value="Autriche"<?='Autriche' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Autriche</option>
									    					<option value="Azerbaidjan"<?='Azerbaidjan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Azerbaidjan</option>

									    					<option value="Bahamas"<?='Bahamas' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bahamas</option>
									    					<option value="Bangladesh"<?='Bangladesh' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bangladesh</option>
									    					<option value="Barbade"<?='Barbade' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Barbade</option>
									    					<option value="Bahrein"<?='Bahrein' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bahrein</option>
									    					<option value="Belgique"<?='Belgique' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Belgique</option>
									    					<option value="Belize"<?='Belize' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Belize</option>
									    					<option value="Benin"<?='Benin' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Benin</option>
									    					<option value="Bermudes"<?='Bermudes' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bermudes</option>
									    					<option value="Bielorussie"<?='Bielorussie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bielorussie</option>
									    					<option value="Bolivie"<?='Bolivie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bolivie</option>
									    					<option value="Botswana"<?='Botswana' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Botswana</option>
									    					<option value="Bhoutan"<?='Bhoutan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bhoutan</option>
									    					<option value="Boznie_Herzegovine"<?='Boznie_Herzegovine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Boznie_Herzegovine</option>
									    					<option value="Bresil"<?='Bresil' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bresil</option>
									    					<option value="Brunei"<?='Brunei' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Brunei</option>
									    					<option value="Bulgarie"<?='Bulgarie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Bulgarie</option>
									    					<option value="Burkina_Faso"<?='Burkina_Faso' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Burkina_Faso</option>
									    					<option value="Burundi"<?='Burundi' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Burundi</option>

									    					<option value="Caiman"<?='Caiman' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Caiman</option>
									    					<option value="Cambodge"<?='Cambodge' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Cambodge</option>
									    					<option value="Cameroun"<?='Cameroun' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Cameroun</option>
									    					<option value="Canada"<?='Canada' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Canada</option>
									    					<option value="Canaries"<?='Canaries' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Canaries</option>
									    					<option value="Cap_Vert"<?='Cap_Vert' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Cap_Vert</option>
									    					<option value="Chili"<?='Chili' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Chili</option>
									    					<option value="Chine"<?='Chine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Chine</option>
									    					<option value="Chypre"<?='Chypre' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Chypre</option>
									    					<option value="Colombie"<?='Colombie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Colombie</option>
									    					<option value="Congo"<?='Congo' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Congo</option>
									    					<option value="Congo_democratique"<?='Congo_democratique' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Congo_democratique</option>
									    					<option value="Cook"<?='Cook' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Cook</option>
									    					<option value="Coree_du_Nord"<?='Coree_du_Nord' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Coree_du_Nord</option>
									    					<option value="Coree_du_Sud"<?='Coree_du_Sud' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Coree_du_Sud</option>
									    					<option value="Costa_Rica"<?='Costa_Rica' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Costa_Rica</option>
									    					<option value="Côte_d_Ivoire"<?='Côte_d_Ivoire' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Côte_d_Ivoire</option>
									    					<option value="Croatie"<?='Croatie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Croatie</option>
									    					<option value="Cuba"<?='Cuba' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Cuba</option>

									    					<option value="Danemark"<?='Danemark' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Danemark</option>
									    					<option value="Djibouti"<?='Djibouti' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Djibouti</option>
									    					<option value="Dominique"<?='Dominique' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Dominique</option>

									    					<option value="Egypte"<?='Egypte' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Egypte</option>
									    					<option value="Emirats_Arabes_Unis"<?='Emirats_Arabes_Unis' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Emirats_Arabes_Unis</option>
									    					<option value="Equateur"<?='Equateur' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Equateur</option>
									    					<option value="Erythree"<?='Erythree' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Erythree</option>
									    					<option value="Espagne"<?='Espagne' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Espagne</option>
									    					<option value="Estonie"<?='Estonie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Estonie</option>
									    					<option value="Etats_Unis"<?='Etats_Unis' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Etats_Unis</option>
									    					<option value="Ethiopie"<?='Ethiopie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Ethiopie</option>

									    					<option value="Falkland"<?='Falkland' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Falkland</option>
									    					<option value="Feroe"<?='Feroe' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Feroe</option>
									    					<option value="Fidji"<?='Fidji' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Fidji</option>
									    					<option value="Finlande"<?='Finlande' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Finlande</option>
									    					<option value="France"<?='France' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>France</option>

									    					<option value="Gabon"<?='Gabon' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Gabon</option>
									    					<option value="Gambie"<?='Gambie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Gambie</option>
									    					<option value="Georgie"<?='Georgie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Georgie</option>
									    					<option value="Ghana"<?='Ghana' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Ghana</option>
									    					<option value="Gibraltar"<?='Gibraltar' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Gibraltar</option>
									    					<option value="Grece"<?='Grece' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Grece</option>
									    					<option value="Grenade"<?='Grenade' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Grenade</option>
									    					<option value="Groenland"<?='Groenland' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Groenland</option>
									    					<option value="Guadeloupe"<?='Guadeloupe' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guadeloupe</option>
									    					<option value="Guam"<?='Guam' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guam</option>
									    					<option value="Guatemala"<?='Guatemala' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guatemala</option>
									    					<option value="Guernesey"<?='Guernesey' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guernesey</option>
									    					<option value="Guinee"<?='Guinee' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guinee</option>
									    					<option value="Guinee_Bissau"<?='Guinee_Bissau' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guinee_Bissau</option>
									    					<option value="Guinee_Equatoriale"<?='Guinee_Equatoriale' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guinee_Equatoriale</option>
									    					<option value="Guyana"<?='Guyana' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guyana</option>
									    					<option value="Guyane_Francaise"<?='Guyane_Francaise' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Guyane_Francaise</option>

									    					<option value="Haiti"<?='Haiti' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Haiti</option>
									    					<option value="Hawaii"<?='Hawaii' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Hawaii</option>
									    					<option value="Honduras"<?='Honduras' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Honduras</option>
									    					<option value="Hong_Kong"<?='Hong_Kong' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Hong_Kong</option>
									    					<option value="Hongrie"<?='Hongrie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Hongrie</option>

									    					<option value="Inde"<?='Inde' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Inde</option>
									    					<option value="Indonesie"<?='Indonesie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Indonesie</option>
									    					<option value="Iran"<?='Iran' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Iran</option>
									    					<option value="Iraq"<?='Iraq' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Iraq</option>
									    					<option value="Irlande"<?='Irlande' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Irlande</option>
									    					<option value="Islande"<?='Islande' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Islande</option>
									    					<option value="Israel"<?='Israel' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Israel</option>
									    					<option value="Italie"<?='Italie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Italie</option>

									    					<option value="Jamaique"<?='Jamaique' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Jamaique</option>
									    					<option value="Jan Mayen"<?='Jan Mayen' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Jan Mayen</option>
									    					<option value="Japon"<?='Japon' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Japon</option>
									    					<option value="Jersey"<?='Jersey' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Jersey</option>
									    					<option value="Jordanie"<?='Jordanie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Jordanie</option>

									    					<option value="Kazakhstan"<?='Kazakhstan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Kazakhstan</option>
									    					<option value="Kenya"<?='Kenya' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Kenya</option>
									    					<option value="Kirghizistan"<?='Kirghizistan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Kirghizistan</option>
									    					<option value="Kiribati"<?='Kiribati' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Kiribati</option>
									    					<option value="Koweit"<?='Koweit' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Koweit</option>

									    					<option value="Laos"<?='Laos' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Laos</option>
									    					<option value="Lesotho"<?='Lesotho' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Lesotho</option>
									    					<option value="Lettonie"<?='Lettonie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Lettonie</option>
									    					<option value="Liban"<?='Liban' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Liban</option>
									    					<option value="Liberia"<?='Liberia' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Liberia</option>
									    					<option value="Liechtenstein"<?='Liechtenstein' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Liechtenstein</option>
									    					<option value="Lituanie"<?='Lituanie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Lituanie</option>
									    					<option value="Luxembourg"<?='Luxembourg' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Luxembourg</option>
									    					<option value="Lybie"<?='Lybie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Lybie</option>

									    					<option value="Macao"<?='Macao' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Macao</option>
									    					<option value="Macedoine"<?='Macedoine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Macedoine</option>
									    					<option value="Madagascar"<?='Madagascar' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Madagascar</option>
									    					<option value="Madère"<?='Madère' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Madère</option>
									    					<option value="Malaisie"<?='Malaisie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Malaisie</option>
									    					<option value="Malawi"<?='Malawi' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Malawi</option>
									    					<option value="Maldives"<?='Maldives' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Maldives</option>
									    					<option value="Mali"<?='Mali' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mali</option>
									    					<option value="Malte"<?='Malte' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Malte</option>
									    					<option value="Man"<?='Man' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Man</option>
									    					<option value="Mariannes du Nord"<?='Mariannes du Nord' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mariannes du Nord</option>
									    					<option value="Maroc"<?='Maroc' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Maroc</option>
									    					<option value="Mariannes du Nord"<?='Mariannes du Nord' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mariannes du Nord</option>
									    					<option value="Marshall"<?='Marshall' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Marshall</option>
									    					<option value="Martinique"<?='Martinique' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Martinique</option>
									    					<option value="Maurice"<?='Maurice' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Maurice</option>
									    					<option value="Mauritanie"<?='Mauritanie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mauritanie</option>
									    					<option value="Mayotte"<?='Mayotte' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mayotte</option>
									    					<option value="Mexique"<?='Mexique' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mexique</option>
									    					<option value="Micronesie"<?='Micronesie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Micronesie</option>
									    					<option value="Midway"<?='Midway' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Midway</option>
									    					<option value="Moldavie"<?='Moldavie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Moldavie</option>
									    					<option value="Monaco"<?='Monaco' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Monaco</option>
									    					<option value="Mongolie"<?='Mongolie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mongolie</option>
									    					<option value="Montserrat"<?='Montserrat' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Montserrat</option>
									    					<option value="Mozambique"<?='Mozambique' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Mozambique</option>

									    					<option value="Namibie"<?='Namibie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Namibie</option>
									    					<option value="Nauru"<?='Nauru' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Nauru</option>
									    					<option value="Nepal"<?='Nepal' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Nepal</option>
									    					<option value="Nicaragua"<?='Nicaragua' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Nicaragua</option>
									    					<option value="Niger"<?='Niger' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Niger</option>
									    					<option value="Nigeria"<?='Nigeria' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Nigeria</option>
									    					<option value="Niue"<?='Niue' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Niue</option>
									    					<option value="Norfolk"<?='Norfolk' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Norfolk</option>
									    					<option value="Norvege"<?='Norvege' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Norvege</option>
									    					<option value="Nouvelle_Caledonie"<?='Nouvelle_Caledonie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Nouvelle_Caledonie</option>
									    					<option value="Nouvelle_Zelande"<?='Nouvelle_Zelande' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Nouvelle_Zelande</option>

									    					<option value="Oman"<?='Oman' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Oman</option>
									    					<option value="Ouganda"<?='Ouganda' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Ouganda</option>
									    					<option value="Ouzbekistan"<?='Ouzbekistan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Ouzbekistan</option>

									    					<option value="Pakistan"<?='Pakistan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Pakistan</option>
									    					<option value="Palau"<?='Palau' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Palau</option>
									    					<option value="Palestine"<?='Palestine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Palestine</option>
									    					<option value="Panama"<?='Panama' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Panama</option>
									    					<option value="Papouasie_Nouvelle_Guinee"<?='Papouasie_Nouvelle_Guinee' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Papouasie_Nouvelle_Guinee</option>
									    					<option value="Paraguay"<?='Paraguay' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Paraguay</option>
									    					<option value="Pays_Bas"<?='Pays_Bas' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Pays_Bas</option>
									    					<option value="Perou"<?='Perou' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Perou</option>
									    					<option value="Philippines"<?='Philippines' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Philippines</option>
									    					<option value="Pologne"<?='Pologne' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Pologne</option>
									    					<option value="Polynesie"<?='Polynesie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Polynesie</option>
									    					<option value="Porto_Rico"<?='Porto_Rico' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Porto_Rico</option>
									    					<option value="Portugal"<?='Portugal' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Portugal</option>

									    					<option value="Qatar"<?='Qatar' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Qatar</option>

									    					<option value="Republique_Dominicaine"<?='Republique_Dominicaine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Republique_Dominicaine</option>
									    					<option value="Republique_Tcheque"<?='Republique_Tcheque' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Republique_Tcheque</option>
									    					<option value="Reunion"<?='Reunion' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Reunion</option>
									    					<option value="Roumanie"<?='Roumanie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Roumanie</option>
									    					<option value="Royaume_Uni"<?='Royaume_Uni' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Royaume_Uni</option>
									    					<option value="Russie"<?='Russie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Russie</option>
									    					<option value="Rwanda"<?='Rwanda' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Rwanda</option>

									    					<option value="Sahara Occidental"<?='Sahara Occidental' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Sahara Occidental</option>
									    					<option value="Sainte_Lucie"<?='Sainte_Lucie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Sainte_Lucie</option>
									    					<option value="Saint_Marin"<?='Saint_Marin' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Saint_Marin</option>
									    					<option value="Salomon"<?='Salomon' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Salomon</option>
									    					<option value="Salvador"<?='Salvador' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Salvador</option>
									    					<option value="Samoa_Occidentales"<?='Samoa_Occidentales' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Samoa_Occidentales</option>
									    					<option value="Samoa_Americaine"<?='Samoa_Americaine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Samoa_Americaine</option>
									    					<option value="Sao_Tome_et_Principe"<?='Sao_Tome_et_Principe' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Sao_Tome_et_Principe</option>
									    					<option value="Seychelles"<?='Seychelles' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Seychelles</option>
									    					<option value="Sierra Leone"<?='Sierra Leone' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Sierra Leone</option>
									    					<option value="Singapour"<?='Singapour' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Singapour</option>
									    					<option value="Slovaquie"<?='Slovaquie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Slovaquie</option>
									    					<option value="Slovenie"<?='Slovenie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Slovenie</option>
									    					<option value="Somalie"<?='Somalie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Somalie</option>
									    					<option value="Soudan"<?='Soudan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Soudan</option>
									    					<option value="Sri_Lanka"<?='Sri_Lanka' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Sri_Lanka</option>
									    					<option value="Suede"<?='Suede' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Suede</option>
									    					<option value="Suisse"<?='Suisse' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Suisse</option>
									    					<option value="Surinam"<?='Surinam' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Surinam</option>
									    					<option value="Swaziland"<?='Swaziland' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Swaziland</option>
									    					<option value="Syrie"<?='Syrie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Syrie</option>

									    					<option value="Tadjikistan"<?='Tadjikistan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Tadjikistan</option>
									    					<option value="Taiwan"<?='Taiwan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Taiwan</option>
									    					<option value="Tonga"<?='Tonga' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Tonga</option>
									    					<option value="Tanzanie"<?='Tanzanie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Tanzanie</option>
									    					<option value="Tchad"<?='Tchad' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Tchad</option>
									    					<option value="Thailande"<?='Thailande' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Thailande</option>
									    					<option value="Tibet"<?='Tibet' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Tibet</option>
									    					<option value="Timor_Oriental"<?='Timor_Oriental' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Timor_Oriental</option>
									    					<option value="Togo"<?='Togo' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Togo</option>
									    					<option value="Trinite_et_Tobago"<?='Trinite_et_Tobago' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Trinite_et_Tobago</option>
									    					<option value="Tristan de cuncha"<?='Tristan de cuncha' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Tristan de cuncha</option>
									    					<option value="Tunisie"<?='Tunisie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Tunisie</option>
									    					<option value="Turmenistan"<?='Turmenistan' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Turmenistan</option>
									    					<option value="Turquie"<?='Turquie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Turquie</option>

									    					<option value="Ukraine"<?='Ukraine' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Ukraine</option>
									    					<option value="Uruguay"<?='Uruguay' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Uruguay</option>

									    					<option value="Vanuatu"<?='Vanuatu' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Vanuatu</option>
									    					<option value="Vatican"<?='Vatican' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Vatican</option>
									    					<option value="Venezuela"<?='Venezuela' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Venezuela</option>
									    					<option value="Vierges_Americaines"<?='Vierges_Americaines' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Vierges_Americaines</option>
									    					<option value="Vierges_Britanniques"<?='Vierges_Britanniques' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Vierges_Britanniques</option>
									    					<option value="Vietnam"<?='Vietnam' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Vietnam</option>

									    					<option value="Wake"<?='Wake' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Wake</option>
									    					<option value="Wallis et Futuma"<?='Wallis et Futuma' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Wallis et Futuma</option>

									    					<option value="Yemen"<?='Yemen' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Yemen</option>
									    					<option value="Yougoslavie"<?='Yougoslavie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Yougoslavie</option>

									    					<option value="Zambie"<?='Zambie' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Zambie</option>
									    					<option value="Zimbabwe"<?='Zimbabwe' == ($_REQUEST['selectPays']??'') ? ' selected="selected"' : '';?>>Zimbabwe</option>

			
									    			</select>
									    		</div>

										    </div>
										    <div class="input-group input-group-left">
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomVille">Ville</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomVille" name="villeE" placeholder="Ville de l'établissement" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['villeE'])?$_REQUEST['villeE']:'';?>">

										        <?php if (!isset($_REQUEST['villeE1'])): ?>
										        	<span>Saisissez la ville!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['villeE1'])): ?>
										        	<p><?= $_REQUEST['villeE1']; ?></P>
										       	<?php endif ?>

									     	</div>
								   		</div>	

								</div>

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group">
									   
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomAdresse">Adresse</label>
										        </div>
										        
										        <input type="text" pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomAdresse" name="AdresseE" placeholder="Adresse de l'établissement" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['AdresseE'])?$_REQUEST['AdresseE']:'';?>">

										        <?php if (!isset($_REQUEST['AdresseE1'])): ?>
										        	<span>Saisissez l'adresse!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['AdresseE1'])): ?>
										        	<p><?= $_REQUEST['AdresseE1']; ?></P>
										       	<?php endif ?>

										    </div>

										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTelephone">Téléphone</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomTelephone" name="TelephoneE" placeholder="Téléphone de l'établissement" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['TelephoneE'])?$_REQUEST['TelephoneE']:'';?>">

										        <?php if (!isset($_REQUEST['TelephoneE1'])): ?>
										        	<span>Saisissez le téléphone!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['TelephoneE1'])): ?>
										        	<p><?= $_REQUEST['TelephoneE1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	



								</div>


								<div class="row">

								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group">

										    	<div class="input-group-prepend">
									         		<label class="input-group-text" id="inputGroupPrepend" for="validationCustomEmail">Email</label>
										        </div>
										        
										        <input type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="validationCustomEmail" name="EmailE" placeholder="Email de l'établissement" required="" aria-describedby="inputGroupPrepend" value="<?=isset($_REQUEST['EmailE'])?$_REQUEST['EmailE']:'';?>">

										        <?php if (!isset($_REQUEST['EmailE1'])): ?>
										        	<span>Saisissez l'e-mail!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['EmailE1'])): ?>
										        	<p><?= $_REQUEST['EmailE1']; ?></P>
										       	<?php endif ?>

										    </div>  		


								   		</div>	

								</div>


								
								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi_etablissement" value="Enregistrer">
							 					
										    </div>
								   		</div>	

								</div>

						</form>




								<form action="rechercher.php" method="REQUEST" class="form_r1">			      	

					        		        <div>
						     			     	<input type="button" value="Actualiser" onclick="window.location='deconnexion_admin_form1_2.php?select=6';" id="validationCustomBtn2">
							     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
							     			    <input type="submit" name="valider_etablissement" value="envoyer" id="validationCustomBtn">

						                    </div>

						       	 </form>


								

								<?php

									$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

									if (!$conn) { ?>

										<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
										<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
											<div class="row py-3 justify-content-center">
												<div class="col-md-7">
													<div class="alert alert-danger">
														<h1 class="py-3 text-center">Erreur !</h1>
														<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=6" style="position: relative; left: 35px; color: brown">X</a></h4>
													</div>
												</div>
											</div>
										</div>					

										<?php
										exit;
									}

									if (isset($_REQUEST['valider_etablissement'])) {
										
										$recherche = htmlspecialchars($_REQUEST['valider_etablissement']);


										$req = 'SELECT * FROM etablissement WHERE Nom LIKE  "%'.$recherche.'%" OR Telephone LIKE  "%'.$recherche.'%" OR Email LIKE  "%'.$recherche.'%" OR Adresse LIKE  "%'.$recherche.'%" OR BP LIKE  "%'.$recherche.'%" OR Ville LIKE  "%'.$recherche.'%" OR Pays LIKE  "%'.$recherche.'%" ORDER BY Id_etablissement ASC';
									

							

										$result = mysqli_query($conn, $req);

										?>

											<table class="table6">
											<tr>
												<th class="th6">-|| Nom ||-</th>
												<th class="th6">-|| Téléphone ||-</th>
												<th class="th6">-|| Email ||-</th>
												<th class="th6">-|| Adresse ||-</th>
												<th class="th6">-|| BP ||-</th>
												<th class="th6">-|| Ville ||-</th>
												<th class="th6">-|| Pays ||-</th>
												<th class="th6">-|| Opérations ||-</th>
											</tr>
										<?php

										while($row=mysqli_fetch_assoc($result))
										{
											
											?>
											<tr>
												<td class="td6"><?=$row['Nom'];?></td>
												<td class="td6"><?=$row['Telephone'];?></td>
												<td class="td6"><?=$row['Email'];?></td>
												<td class="td6"><?=$row['Adresse'];?></td>
												<td class="td6"><?=$row['BP'];?></td>
												<td class="td6"><?=$row['Ville'];?></td>
												<td class="td6"><?=$row['Pays'];?></td>


							
												<td class="td6">
													<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
													<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
												</td>
											</tr>
											
											<?php
										}



									} else {
										$req = "SELECT * FROM etablissement ORDER BY Id_etablissement ASC";
										$result = mysqli_query($conn, $req);
										?>

											<table class="table6">
											<tr>
												<th class="th6">-|| Nom ||-</th>
												<th class="th6">-|| Téléphone ||-</th>
												<th class="th6">-|| Email ||-</th>
												<th class="th6">-|| Adresse ||-</th>
												<th class="th6">-|| BP ||-</th>
												<th class="th6">-|| Ville ||-</th>
												<th class="th6">-|| Pays ||-</th>
												<th class="th6">-|| Opérations ||-</th>
											</tr>
										<?php

										while($row=mysqli_fetch_assoc($result))
										{
											
											?>
											<tr>
												<td class="td6"><?=$row['Nom'];?></td>
												<td class="td6"><?=$row['Telephone'];?></td>
												<td class="td6"><?=$row['Email'];?></td>
												<td class="td6"><?=$row['Adresse'];?></td>
												<td class="td6"><?=$row['BP'];?></td>
												<td class="td6"><?=$row['Ville'];?></td>
												<td class="td6"><?=$row['Pays'];?></td>
							
												<td class="td6">
													<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
													<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
												</td>
											</tr>
											
											<?php
										}
									}

									
									mysqli_close($conn);

								?>
										</table>

							

				</div>		
					<?php 
		}
	}


	

	function deconnexion_admin_form1_3() {

			ini_set('session.cache_limiter','public');
			session_cache_limiter(false);
			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" >

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php" target="zone1"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
					
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>	

  			<?php
  			

  				
  				if (isset($_REQUEST['select']) && $_REQUEST['select'] == 1) {
  					$_SESSION['selected2'] = 1;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 2) {
  					$_SESSION['selected2'] = 2;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 3) {
  					$_SESSION['selected2'] = 3;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 4) {
  					$_SESSION['selected2'] = 4;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 5) {
  					$_SESSION['selected2'] = 5;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 51) {
  					$_SESSION['selected2'] = 51;
  				} else if (isset($_REQUEST['select']) && $_REQUEST['select'] == 6) {
  					$_SESSION['selected2'] = 6;
  				} else {
  					$_SESSION['selected2'] = 1;
  				}
  				
  			

  				// function select($select) {
  				// 	$ajout = array('----Choix de consultation----' => 0, 'Consulter les personnels' => 1, 'Consulter les bureaux' => 2, 'Consulter les fonctions' => 3, 'Consulter les demandes' => 4, 'Consulter les stagiaires' => 51, 'Consulter les établissements' => 6);
  				// 	$options = '';

  				// 	foreach ($ajout as $a => &$b) {

  				// 		if ($select == $b) {
  				// 			$options .= '<option value="'.$b.'" selected>'.$a.'</option>';
  				// 		} else {
  				// 			$options .= '<option value="'.$b.'" >'.$a.'</option>';
  				// 		}

  				// 	}
  				// 	return $options;
  				// }

				  function select($select) {
					$ajout = array('Consulter les demandes' => 4, 'Consulter les stagiaires' => 51, 'Consulter les établissements' => 6);
					$options = '';

					foreach ($ajout as $a => &$b) {

						if ($select == $b) {
							$options .= '<option value="'.$b.'" selected>'.$a.'</option>';
						} else {
							$options .= '<option value="'.$b.'" >'.$a.'</option>';
						}

					}
					return $options;
				}

  			?>

				
  			<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" class="form1">
  				<div class="select">
	  				<select class="select1" name="select" onchange="this.form.submit();">
						<?= select($_SESSION['selected2']); ?>
					</select>
				</div>
  			</form>

  			<?=select1_1($_SESSION['selected2']);?>


			</body>
			<?php
	}

	function select1_1($s) { 

		if ($s == 1) {
			
			?>

			<div class="form_5">

						<div class="actual">

							<div>
								<input type="button" onclick="window.location='deconnexion_admin_form1_3.php?select=1';" value="Actualiser" id="validationCustomBtn1">
								<input type="button" onclick="window.print();return false;" value="Imprimer" id="validationCustomBtn1">
							</div>
							
						</div>

	
					
						<form action="rechercher.php" method="REQUEST" class="form_r1_1">			      	

		        		        <div>
			     			     
				     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
				     			    <input type="submit" name="valider_personnel1" value="envoyer" id="validationCustomBtn">

			                    </div>

			      	 	 </form>

								<?php

										$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
										if (!$conn) { ?>

											<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
											<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
												<div class="row py-3 justify-content-center">
													<div class="col-md-7">
														<div class="alert alert-danger">
															<h1 class="py-3 text-center">Erreur!</h1>
															<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=1" style="position: relative; left: 35px; color: brown">X</a></h4>
														</div>
													</div>
												</div>
											</div>					

											<?php
											exit;
										}


										if (isset($_REQUEST['valider_personnel1'])) {
										
											$recherche = htmlspecialchars($_REQUEST['valider_personnel1']);

											$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

											$recherche1 = -1;
											$recherche2 = -1;

										

											$recupBureau = $bdd->prepare('SELECT * FROM bureau WHERE Nom = ?');		
											$recupBureau->execute(array($recherche));

											if ($recupBureau->rowCount() > 0) {

												$recherche1 = $recupBureau->fetch()['Id_bureau'];

											}

											$recupFonction = $bdd->prepare('SELECT * FROM fonction WHERE Nom = ?');		
											$recupFonction->execute(array($recherche));

											if ($recupFonction->rowCount() > 0) {

												$recherche2 = $recupFonction->fetch()['Id_fonction'];

											}

																	

											$req = 'SELECT * FROM personnel WHERE Matricule_personnel LIKE  "%'.$recherche.'%" OR Date_debut_affectation LIKE  "%'.$recherche.'%" OR Date_fin_affectation LIKE  "%'.$recherche.'%" OR Nom LIKE  "%'.$recherche.'%" OR Prenom LIKE  "%'.$recherche.'%" OR Telephone LIKE  "%'.$recherche.'%" OR Adresse LIKE  "%'.$recherche.'%" OR Email LIKE  "%'.$recherche.'%" OR Id_bureau LIKE  "%'.$recherche1.'%" OR Id_fonction LIKE  "%'.$recherche2.'%"  ORDER BY Nom ASC';
										
										

											$resultPersonnel = mysqli_query($conn, $req);

								
											?>

												<table class="table1_1">
												<tr>
													<th class="th1">-|| Matricule ||-</th>
													<th class="th1">-|| Nom ||-</th>
													<th class="th1">-|| Prénom ||-</th>
													<th class="th1">-|| Téléphone ||-</th>
													<th class="th1">-|| Adresse ||-</th>
													<th class="th1">-|| Email ||-</th>
													<th class="th1">-|| Bureau ||-</th>
													<th class="th1">-|| Fonction ||-</th>
													<th class="th1">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($resultPersonnel))
											{
												$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

												$Id_bureau = $row['Id_bureau']??'NULL';

												if ($Id_bureau != 'NULL') {
													$recupBureau = $bdd->prepare('SELECT Nom FROM bureau WHERE Id_bureau = ?');
													$recupBureau->execute(array($row['Id_bureau']));
													$Nom_bureau = $recupBureau->fetch()['Nom'];
												} else {
													$Nom_bureau = '';
												}

												$Id_fonction = $row['Id_fonction']??'NULL';

												if ($Id_fonction != 'NULL') {
													$recupFonction = $bdd->prepare('SELECT Nom FROM fonction WHERE Id_fonction = ?');
													$recupFonction->execute(array($row['Id_fonction']));
													$Nom_fonction = $recupFonction->fetch()['Nom'];
												} else {
													$Nom_fonction = '';
												}

												?>

												<tr>
													<td class="td1"><?=$row['Matricule_personnel'];?></td>
													<td class="td1"><?=$row['Nom'];?></td>
													<td class="td1"><?=$row['Prenom'];?></td>
													<td class="td1"><?=$row['Telephone'];?></td>
													<td class="td1"><?=$row['Adresse'];?></td>
													<td class="td1"><?=$row['Email'];?></td>
													<td class="td1"><?=$Nom_bureau;?></td>
													<td class="td1"><?=$Nom_fonction;?></td>

													<td class="td1">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
													</td>
												</tr>
												
												<?php
											}


										} else {
											
											$req = "SELECT * FROM personnel ORDER BY Id_personnel ASC";
											$resultPersonnel = mysqli_query($conn, $req);

								
											?>

												<table class="table1_1">
												<tr>
													<th class="th1">-|| Matricule ||-</th>
													<th class="th1">-|| Nom ||-</th>
													<th class="th1">-|| Prénom ||-</th>
													<th class="th1">-|| Téléphone ||-</th>
													<th class="th1">-|| Adresse ||-</th>
													<th class="th1">-|| Email ||-</th>
													<th class="th1">-|| Bureau ||-</th>
													<th class="th1">-|| Fonction ||-</th>
													<th class="th1">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($resultPersonnel))
											{
												$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

												$Id_bureau = $row['Id_bureau']??'NULL';

												if ($Id_bureau != 'NULL') {
													$recupBureau = $bdd->prepare('SELECT Nom FROM bureau WHERE Id_bureau = ?');
													$recupBureau->execute(array($row['Id_bureau']));
													$Nom_bureau = $recupBureau->fetch()['Nom'];
												} else {
													$Nom_bureau = '';
												}

												$Id_fonction = $row['Id_fonction']??'NULL';

												if ($Id_fonction != 'NULL') {
													$recupFonction = $bdd->prepare('SELECT Nom FROM fonction WHERE Id_fonction = ?');
													$recupFonction->execute(array($row['Id_fonction']));
													$Nom_fonction = $recupFonction->fetch()['Nom'];
												} else {
													$Nom_fonction = '';
												}

												

												?>

												<tr>
													<td class="td1"><?=$row['Matricule_personnel'];?></td>
													<td class="td1"><?=$row['Nom'];?></td>
													<td class="td1"><?=$row['Prenom'];?></td>
													<td class="td1"><?=$row['Telephone'];?></td>
													<td class="td1"><?=$row['Adresse'];?></td>
													<td class="td1"><?=$row['Email'];?></td>
													<td class="td1"><?=$Nom_bureau;?></td>
													<td class="td1"><?=$Nom_fonction;?></td>

													<td class="td1">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_personnel=<?=str_replace("'", "\'", $row['Id_personnel']);?>&Matricule_personnel=<?=str_replace("'", "\'", $row['Matricule_personnel']);?>&Date_debut_affectation=<?=str_replace("'", "\'", $row['Date_debut_affectation']);?>&Date_fin_affectation=<?=str_replace("'", "\'", $row['Date_fin_affectation']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>&Prenom=<?=str_replace("'", "\'", $row['Prenom']);?>&Telephone=<?=str_replace("'", "\'", $row['Telephone']);?>&Adresse=<?=str_replace("'", "\'", $row['Adresse']);?>&Email=<?=str_replace("'", "\'", $row['Email']);?>&selectBureau=<?=str_replace("'", "\'", $Nom_bureau);?>&selectFonction=<?=str_replace("'", "\'", $Nom_fonction);?>';">
													</td>
												</tr>
												
												<?php
											}
											
										}


										
										mysqli_close($conn);

									?>
											</table>

							
					</div>
					<?php 
		} else if ($s == 2) {
			
			?>

			<div class="form_5">

						<div class="actual">

							<div>
								<input type="button" onclick="window.location='deconnexion_admin_form1_3.php?select=2';" value="Actualiser" id="validationCustomBtn1">
								<input type="button" onclick="window.print();return false;" value="Imprimer" id="validationCustomBtn1">
							</div>
							
						</div>

						

							<form action="rechercher.php" method="REQUEST" class="form_r1_1">			      	

			        		        <div>
				     			     
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_bureau1" value="envoyer" id="validationCustomBtn">

				                    </div>

				      	 	 </form>

								<?php

										$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
										if (!$conn) { ?>

											<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
											<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
												<div class="row py-3 justify-content-center">
													<div class="col-md-7">
														<div class="alert alert-danger">
															<h1 class="py-3 text-center">Erreur !</h1>
															<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=2" style="position: relative; left: 35px; color: brown">X</a></h4>
														</div>
													</div>
												</div>
											</div>					

											<?php
											exit;
										}


										if (isset($_REQUEST['valider_bureau1'])) {
										
											$recherche = htmlspecialchars($_REQUEST['valider_bureau1']);

											$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

										

									

											$req = 'SELECT * FROM bureau WHERE Code LIKE  "%'.$recherche.'%" OR Nom LIKE  "%'.$recherche.'%"  ORDER BY Nom ASC';
										
										

											$result = mysqli_query($conn, $req);
											?>

												<table class="table1_1">
												<tr>
													<th class="th3">-|| Code ||</th>
													<th class="th3">-|| Nom ||</th>
													<th class="th3">-|| Opérations ||</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{
												$Nom = $row['Nom'];
												$Nom = str_replace("'","\'",$Nom);
												$Code = $row['Code'];
												$Id_bureau = $row['Id_bureau'];
												?>
												<tr>
													<td class="td2"><?=$row['Code'];?></td>
													<td class="td2"><?=$row['Nom'];?></td>
													<td class="td2">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
													</td>
												</tr>
												
												<?php
											}



										} else {
											
											$req = "SELECT * FROM bureau ORDER BY Id_bureau ASC";
											$result = mysqli_query($conn, $req);
											?>

												<table class="table1_1">
												<tr>
													<th class="th2">-|| Code ||-</th>
													<th class="th2">-|| Nom ||-</th>
													<th class="th2">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{
												$Nom = $row['Nom'];
												$Nom = str_replace("'","\'",$Nom);
												$Code = $row['Code'];
												$Id_bureau = $row['Id_bureau'];
												?>
												<tr>
													<td class="td2"><?=$row['Code'];?></td>
													<td class="td2"><?=$row['Nom'];?></td>
													<td class="td2">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>&Nom=<?=$Nom;?>';">
													</td>
												</tr>
												
												<?php
											}
											
										}

										
										mysqli_close($conn);

									?>
											</table>

							

					</div>
					<?php 
		} else if ($s == 3) {
			
			?>

			<div class="form_5">

						<div class="actual">

							<div>
								<input type="button" onclick="window.location='deconnexion_admin_form1_3.php?select=3';" value="Actualiser" id="validationCustomBtn1">
								<input type="button" onclick="window.print();return false;" value="Imprimer" id="validationCustomBtn1">
							</div>
							
						</div>

						

							<form action="rechercher.php" method="REQUEST" class="form_r1_1">			      	

			        		        <div>
				     			     
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_fonction1" value="envoyer" id="validationCustomBtn">

				                    </div>

				      	 	 </form>

								<?php

										$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
										if (!$conn) { ?>

											<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
											<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
												<div class="row py-3 justify-content-center">
													<div class="col-md-7">
														<div class="alert alert-danger">
															<h1 class="py-3 text-center">Erreur !</h1>
															<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
														</div>
													</div>
												</div>
											</div>					

											<?php
											exit;
										}


										if (isset($_REQUEST['valider_fonction1'])) {
										
											$recherche = htmlspecialchars($_REQUEST['valider_fonction1']);

											$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

										

									

											$req = 'SELECT * FROM fonction WHERE Code LIKE  "%'.$recherche.'%" OR Nom LIKE  "%'.$recherche.'%"  ORDER BY Nom ASC';
										
										

											$result = mysqli_query($conn, $req);
											?>

												<table class="table1_1">
												<tr>
													<th class="th3">-|| Code ||</th>
													<th class="th3">-|| Nom ||</th>
													<th class="th3">-|| Opérations ||</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{?>
												<tr>
													<td class="td3"><?=$row['Code'];?></td>
													<td class="td3"><?=$row['Nom'];?></td>
													<td class="td3">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
													</td>
												</tr>
												
												<?php
											}



										} else {
											
											$req = "SELECT * FROM fonction ORDER BY Id_fonction ASC";
											$result = mysqli_query($conn, $req);
											?>

												<table class="table1_1">
												<tr>
													<th class="th3">-|| Code ||</th>
													<th class="th3">-|| Nom ||</th>
													<th class="th3">-|| Opérations ||-</th>
												</tr>
											<?php

											while($row=mysqli_fetch_assoc($result))
											{?>
												<tr>
													<td class="td3"><?=$row['Code'];?></td>
													<td class="td3"><?=$row['Nom'];?></td>
													<td class="td3">
														<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
														<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_fonction=<?=str_replace("'", "\'", $row['Id_fonction']);?>&Code=<?=str_replace("'", "\'", $row['Code']);?>&Nom=<?=str_replace("'", "\'", $row['Nom']);?>';">
													</td>
												</tr>
												
												<?php
											}
											
										}



										
										mysqli_close($conn);

									?>
											</table>

							

					</div>
					<?php 
		} else if ($s == 4) {
			
			?>

			

				<div class="form_5">

					<div class="actual">

						<div>
							<input type="button" onclick="window.location='deconnexion_admin_form1_3.php?select=4';" value="Actualiser" id="validationCustomBtn1">
							<input type="button" onclick="window.print();return false;" value="Imprimer" id="validationCustomBtn1">
						</div>
						
					</div>


						<form action="rechercher.php" method="REQUEST" class="form_r1_1">			      	

			        		        <div>
				     			     
					     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
					     			    <input type="submit" name="valider_demande1_1" value="envoyer" id="validationCustomBtn">

				                    </div>

				       	 </form>
				
			

							
								
				

					<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_demande1_1'])) {
										
							$recherche = htmlspecialchars($_REQUEST['valider_demande1_1']);

							$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

							$recupEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Nom = ?');		
							$recupEtablissement->execute(array($recherche));

							if ($recupEtablissement->rowCount() > 0) {

								$recherche = $recupEtablissement->fetch()['Id_etablissement'];

							}

					

							$req = 'SELECT * FROM demande WHERE Id_etablissement LIKE  "%'.$recherche.'%" OR Niveau LIKE  "%'.$recherche.'%" OR Domaine LIKE  "%'.$recherche.'%" OR Nom_demandeur LIKE  "%'.$recherche.'%" OR Prenom_demandeur LIKE  "%'.$recherche.'%" OR Decision LIKE  "%'.$recherche.'%" ORDER BY Id_demande ASC';
						

							$result = mysqli_query($conn, $req);
							?>

								<table class="table1_1">
								<tr>
									<th class="th4">-|| Décision ||-</th>
									<th class="th4">-|| Nom ||-</th>
									<th class="th4">-|| Prénom ||-</th>
									<th class="th4">-|| Etablissement ||-</th>
									<th class="th4">-|| Niveau ||-</th>
									<th class="th4">-|| Domaine ||-</th>
									<th class="th4">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_etablissement = $row['Id_etablissement']??'NULL';

								if ($Id_etablissement != 'NULL') {

									$req1 = "SELECT * FROM etablissement WHERE Id_etablissement = $Id_etablissement";
									$result1 = mysqli_query($conn, $req1);
									while($row1=mysqli_fetch_assoc($result1))
									{
										$NomE = $row1['Nom'];
										$selectPays = $row1['Pays'];
									}

								} else {
									$NomE = '';
									$selectPays = '';
								}


								?>
								<tr>

									<td class="td4"><?=$row['Decision'];?></td>
									<td class="td4"><?=$row['Nom_demandeur'];?></td>
									<td class="td4"><?=$row['Prenom_demandeur'];?></td>
									<td class="td4"><?=$NomE;?></td>
									<td class="td4"><?=$row['Niveau'];?></td>
									<td class="td4"><?=$row['Domaine'];?></td>
									<td class="td4">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">


										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">
									</td>
								</tr>
								
								<?php
							}



						} else {
							
							$req = "SELECT * FROM demande ORDER BY Id_demande ASC";
							$result = mysqli_query($conn, $req);
							?>

								<table class="table1_1">
								<tr>
									<th class="th4">-|| Décision ||-</th>
									<th class="th4">-|| Nom ||-</th>
									<th class="th4">-|| Prénom ||-</th>
									<th class="th4">-|| Etablissement ||-</th>
									<th class="th4">-|| Niveau ||-</th>
									<th class="th4">-|| Domaine ||-</th>
									<th class="th4">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_etablissement = $row['Id_etablissement']??'NULL';

								if ($Id_etablissement != 'NULL') {

									$req1 = "SELECT * FROM etablissement WHERE Id_etablissement = $Id_etablissement";
									$result1 = mysqli_query($conn, $req1);
									while($row1=mysqli_fetch_assoc($result1))
									{
										$NomE = $row1['Nom'];
										$selectPays = $row1['Pays'];
									}

								} else {
									$NomE = '';
									$selectPays = '';
								}


								?>
								<tr>

									<td class="td4"><?=$row['Decision'];?></td>
									<td class="td4"><?=$row['Nom_demandeur'];?></td>
									<td class="td4"><?=$row['Prenom_demandeur'];?></td>
									<td class="td4"><?=$NomE;?></td>
									<td class="td4"><?=$row['Niveau'];?></td>
									<td class="td4"><?=$row['Domaine'];?></td>
									<td class="td4">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">


										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_demande=<?=str_replace("'", "\'", $row['Id_demande']);?>&Id_etablissement=<?=str_replace("'", "\'", $row['Id_etablissement']);?>&Niveau=<?=str_replace("'", "\'", $row['Niveau']);?>&Domaine=<?=str_replace("'", "\'", $row['Domaine']);?>&NomD=<?=str_replace("'", "\'", $row['Nom_demandeur']);?>&PrenomD=<?=str_replace("'", "\'", $row['Prenom_demandeur']);?>&AdresseD=<?=str_replace("'", "\'", $row['Adresse']);?>&dateN=<?=str_replace("'", "\'", $row['Date_naissance']);?>&Lieu=<?=str_replace("'", "\'", $row['Lieu_naissance']);?>&TelephoneD=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailD=<?=str_replace("'", "\'", $row['Email']);?>&selectDecision=<?=$row['Decision'];?>&selectEtablissement=<?=str_replace("'", "\'", $NomE);?>';">
									</td>
								</tr>
								
								<?php
							}
						}




						mysqli_close($conn);

					?>
							</table>

				

			</div>	
		
					<?php 


		} else if ($s == 51) {
			
			?>

			<div class="form_5">

					
						<div class="actual">

							<div>
								<input type="button" onclick="window.location='deconnexion_admin_form1_3.php?select=51';" value="Actualiser" id="validationCustomBtn1">
								<input type="button" onclick="window.print();return false;" value="Imprimer" id="validationCustomBtn1">
							</div>
							
						</div>

						<form action="rechercher.php" method="REQUEST" class="form_r1_1">			      	

		        		        <div>
			     			     
				     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
				     			    <input type="submit" name="valider_stage1_1_1" value="envoyer" id="validationCustomBtn">

			                    </div>

				       	 </form>
				
	

							
								
				

					<?php

						$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

						if (!$conn) { ?>

							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=3" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>					

							<?php
							exit;
						}

						if (isset($_REQUEST['valider_stage1_1_1'])) {
										
							$recherche = htmlspecialchars($_REQUEST['valider_stage1_1_1']);
							$recherche1 = -1;
							$recherche2 = -1;

							$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

							$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Nom_demandeur = ?');		
							$recupDemande->execute(array($recherche));

							if ($recupDemande->rowCount() > 0) {

								$recherche1 = $recupDemande->fetch()['Id_demande'];

							}

							$recupDemande1 = $bdd->prepare('SELECT * FROM demande WHERE Prenom_demandeur = ?');		
							$recupDemande1->execute(array($recherche));

							if ($recupDemande1->rowCount() > 0) {

								$recherche1 = $recupDemande1->fetch()['Id_demande'];

							}

							$recupDemande2 = $bdd->prepare('SELECT * FROM demande WHERE Domaine = ?');		
							$recupDemande2->execute(array($recherche));

							if ($recupDemande2->rowCount() > 0) {

								$recherche1 = $recupDemande2->fetch()['Id_demande'];

							}

							$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Nom = ?');		
							$recupPersonnel->execute(array($recherche));

							if ($recupPersonnel->rowCount() > 0) {

								$recherche2 = $recupPersonnel->fetch()['Id_personnel'];

							}

							$recupPersonnel1 = $bdd->prepare('SELECT * FROM personnel WHERE Prenom = ?');		
							$recupPersonnel1->execute(array($recherche));

							if ($recupPersonnel1->rowCount() > 0) {

								$recherche2 = $recupPersonnel1->fetch()['Id_personnel'];

							}

					

							$req = 'SELECT * FROM stage WHERE Id_demande LIKE  "%'.$recherche1.'%" OR Id_personnel LIKE  "%'.$recherche2.'%" OR Nom_stage LIKE  "%'.$recherche.'%" OR Niveau_stage LIKE  "%'.$recherche.'%" OR Sujet_stage LIKE  "%'.$recherche.'%"  ORDER BY Id_stage ASC';
						

							$result = mysqli_query($conn, $req);
							?>

								<table class="table1_1">
								<tr>
									<th class="th51">-|| Stage ||-</th>
									<th class="th51">-|| Sujet ||-</th>
									<th class="th51">-|| Encadrant ||-</th>
									<th class="th51">-|| Stagiaire ||-</th>
									<th class="th51">-|| Niveau ||-</th>
									<th class="th51">-|| Domaine ||-</th>
									<th class="th51">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
								}


								?>
								<tr>

									<td class="td51"><?=$row['Nom_stage'];?></td>
									<td class="td51"><?=$row['Sujet_stage'];?></td>
									<td class="td51"><?=$Prenom_personnel." ".$Nom_personnel;?></td>
									<td class="td51"><?=$Prenom_demandeur." ".$Nom_demandeur;?></td>
									<td class="td51"><?=$row['Niveau_stage'];?></td>
									<td class="td51"><?=$Domaine;?></td>
									<td class="td51">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">

										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">
									

									</td>
								</tr>
								
								<?php
							}


						} else {
							
							$req = "SELECT * FROM stage  ORDER BY Id_stage ASC";
							$result = mysqli_query($conn, $req);
							?>

								<table class="table1_1">
								<tr>
									<th class="th51">-|| Stage ||-</th>
									<th class="th51">-|| Sujet ||-</th>
									<th class="th51">-|| Encadrant ||-</th>
									<th class="th51">-|| Stagiaire ||-</th>
									<th class="th51">-|| Niveau ||-</th>
									<th class="th51">-|| Domaine ||-</th>
									<th class="th51">-|| Opérations ||-</th>
								</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$Id_demande = $row['Id_demande'];
								$Id_personnel = $row['Id_personnel'];

								$req1 = "SELECT * FROM personnel WHERE Id_personnel = $Id_personnel";
								$result1 = mysqli_query($conn, $req1);
								while($row1=mysqli_fetch_assoc($result1))
								{
									$Nom_personnel = $row1['Nom'];
									$Prenom_personnel = $row1['Prenom'];
								}

								$req2 = "SELECT * FROM demande WHERE Id_demande = $Id_demande";
								$result2 = mysqli_query($conn, $req2);
								while($row2=mysqli_fetch_assoc($result2))
								{
									$Nom_demandeur = $row2['Nom_demandeur'];
									$Prenom_demandeur = $row2['Prenom_demandeur'];
									$Domaine = $row2['Domaine'];
								}


								?>
								<tr>

									<td class="td51"><?=$row['Nom_stage'];?></td>
									<td class="td51"><?=$row['Sujet_stage'];?></td>
									<td class="td51"><?=$Prenom_personnel." ".$Nom_personnel;?></td>
									<td class="td51"><?=$Prenom_demandeur." ".$Nom_demandeur;?></td>
									<td class="td51"><?=$row['Niveau_stage'];?></td>
									<td class="td51"><?=$Domaine;?></td>
									<td class="td51">

										<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">

										<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?Id_stage=<?=str_replace("'", "\'", $row['Id_stage']);?>&Nom_stage=<?=str_replace("'", "\'", $row['Nom_stage']);?>&Sujet_stage=<?=str_replace("'", "\'", $row['Sujet_stage']);?>&Niveau_stage=<?=str_replace("'", "\'", $row['Niveau_stage']);?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>';">

									

									</td>
								</tr>
								
								<?php
							}
						}




						mysqli_close($conn);

					?>
							</table>

				

			</div>	
		
					<?php 
			
		} else if ($s == 6) {
			
			?>

			<div class="form_5">

					


						<div class="actual">

							<div>
								<input type="button" onclick="window.location='deconnexion_admin_form1_3.php?select=6';" value="Actualiser" id="validationCustomBtn1">
								<input type="button" onclick="window.print();return false;" value="Imprimer" id="validationCustomBtn1">
							</div>
							
						</div>

								<form action="rechercher.php" method="REQUEST" class="form_r1_1">			      	

					        		        <div>
						     			     
							     			    <input type="text" name="rechercher" placeholder="Rechercher ici" required="" id="validationCustomRecherche">
							     			    <input type="submit" name="valider_etablissement1" value="envoyer" id="validationCustomBtn">

						                    </div>

						       	 </form>


								

								<?php

									$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

									if (!$conn) { ?>

										<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
										<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
											<div class="row py-3 justify-content-center">
												<div class="col-md-7">
													<div class="alert alert-danger">
														<h1 class="py-3 text-center">Erreur !</h1>
														<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php&select=6" style="position: relative; left: 35px; color: brown">X</a></h4>
													</div>
												</div>
											</div>
										</div>					

										<?php
										exit;
									}

									if (isset($_REQUEST['valider_etablissement1'])) {
										
										$recherche = htmlspecialchars($_REQUEST['valider_etablissement1']);


										$req = 'SELECT * FROM etablissement WHERE Nom LIKE  "%'.$recherche.'%" OR Telephone LIKE  "%'.$recherche.'%" OR Email LIKE  "%'.$recherche.'%" OR Adresse LIKE  "%'.$recherche.'%" OR BP LIKE  "%'.$recherche.'%" OR Ville LIKE  "%'.$recherche.'%" OR Pays LIKE  "%'.$recherche.'%" ORDER BY Id_etablissement ASC';
									

							

										$result = mysqli_query($conn, $req);

										?>

											<table class="table1_1">
											<tr>
												<th class="th6">-|| Nom ||-</th>
												<th class="th6">-|| Téléphone ||-</th>
												<th class="th6">-|| Email ||-</th>
												<th class="th6">-|| Adresse ||-</th>
												<th class="th6">-|| BP ||-</th>
												<th class="th6">-|| Ville ||-</th>
												<th class="th6">-|| Pays ||-</th>
												<th class="th6">-|| Opérations ||-</th>
											</tr>
										<?php

										while($row=mysqli_fetch_assoc($result))
										{
											
											?>
											<tr>
												<td class="td6"><?=$row['Nom'];?></td>
												<td class="td6"><?=$row['Telephone'];?></td>
												<td class="td6"><?=$row['Email'];?></td>
												<td class="td6"><?=$row['Adresse'];?></td>
												<td class="td6"><?=$row['BP'];?></td>
												<td class="td6"><?=$row['Ville'];?></td>
												<td class="td6"><?=$row['Pays'];?></td>


							
												<td class="td6">
													<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
													<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
												</td>
											</tr>
											
											<?php
										}



									} else {
										$req = "SELECT * FROM etablissement ORDER BY Id_etablissement ASC";
										$result = mysqli_query($conn, $req);
										?>

											<table class="table1_1">
											<tr>
												<th class="th6">-|| Nom ||-</th>
												<th class="th6">-|| Téléphone ||-</th>
												<th class="th6">-|| Email ||-</th>
												<th class="th6">-|| Adresse ||-</th>
												<th class="th6">-|| BP ||-</th>
												<th class="th6">-|| Ville ||-</th>
												<th class="th6">-|| Pays ||-</th>
												<th class="th6">-|| Opérations ||-</th>
											</tr>
										<?php

										while($row=mysqli_fetch_assoc($result))
										{
											
											?>
											<tr>
												<td class="td6"><?=$row['Nom'];?></td>
												<td class="td6"><?=$row['Telephone'];?></td>
												<td class="td6"><?=$row['Email'];?></td>
												<td class="td6"><?=$row['Adresse'];?></td>
												<td class="td6"><?=$row['BP'];?></td>
												<td class="td6"><?=$row['Ville'];?></td>
												<td class="td6"><?=$row['Pays'];?></td>
							
												<td class="td6">
													<input type="button" class="bouton2" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_admin_form1_2_modifier.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
													<input type="button" class="bouton2" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_admin_form1_2_supprimer.php?NomE=<?=str_replace("'", "\'", $row['Nom']);?>&BP=<?=str_replace("'", "\'", $row['BP']);?>&villeE=<?=str_replace("'", "\'", $row['Ville']);?>&AdresseE=<?=str_replace("'", "\'", $row['Adresse']);?>&TelephoneE=<?=str_replace("'", "\'", $row['Telephone']);?>&EmailE=<?=str_replace("'", "\'", $row['Email']);?>&select=6&Id_etablissement=<?=$row['Id_etablissement'];?>&selectPays=<?=str_replace("'", "\'", $row['Pays']);?>';">
												</td>
											</tr>
											
											<?php
										}
									}

									
									mysqli_close($conn);

								?>
										</table>

							

				</div>		
					<?php 
		}

	}

	


	




	function deconnexion_admin_form1_6() {

			session_start();
			
			if (session_status() === PHP_SESSION_NONE) {
			    session_start();
			}
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
		
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_2_1_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			  <?php
			  $conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
				if (!$conn) { ?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur !</h1>
									<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion.php" style="position: relative; left: 35px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>					

					<?php
					exit;
				}

				$req = "SELECT * FROM administrateur";
				$result = mysqli_query($conn, $req);
				

				while($row=mysqli_fetch_assoc($result))
				{
					$Login_defaut = $row['Login'];

				}
				mysqli_close($conn);

				?>


			  <div class="form">

					<h3><p>Changez vos coordonnées</p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion_form1_6.php">

<!-- ggg -->
							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomLogin">Login</label>
									        </div>
									        
									 
									        <input type="text" pattern="[A-Za-z0-9'àáâãäåèéêëìíîï-ðòóôõöùúûüýÿ -]{4,50}" class="form-control" id="validationCustomLogin" name="Login" required="" aria-describedby="inputGroupPrepend" placeholder="Login" value="<?=$Login_defaut;?>">
									        <?php if (!isset($_REQUEST['Login1'])): ?>
									        	<span>* : Renseignez un login!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['Login1'])): ?>
									        	<p><?= $_REQUEST['Login1']?></P>
									       	<?php endif ?>


									    </div>
									   
							   		</div>	
							   		

							   		<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPassword">Mot de passe</label>
									        </div>
									 
									        <input type="password" maxlength="50"  pattern=".{4,50}" class="form-control" id="validationCustomPassword" name="Mot_de_passe" required="" aria-describedby="inputGroupPrepend" placeholder="Nouveau mot de passe" value="<?=isset($_REQUEST['Mot_de_passe'])?$_REQUEST['Mot_de_passe']:'';?>">
									        <?php if (!isset($_REQUEST['password'])): ?>
									        	<span>? : Facultatif!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['password'])): ?>
									        	<p><?= $_REQUEST['password']?></P>
									       	<?php endif ?>

									    </div>
									    
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPassword1">Mot de passe</label>
									        </div>
									 
									        <input type="password" maxlength="50"  pattern=".{4,50}" class="form-control" id="validationCustomPassword1" name="Mot_de_passe1" required="" aria-describedby="inputGroupPrepend" placeholder="Mot de passe à nouveau" value="<?=isset($_REQUEST['Mot_de_passe1'])?$_REQUEST['Mot_de_passe1']:'';?>">
									        <?php if (!isset($_REQUEST['password1'])): ?>
									        	<span>? : Facultatif!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['password1'])): ?>
									        	<p><?= $_REQUEST['password1'];?></P>
									       	<?php endif ?>

									    </div>
									    
							   		</div>	
							</div>

							

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <input type="submit" class="bouton" name="envoi" value="Changer de coordonnée">

									    </div>
							   		</div>	

							</div>

						</form>
				</div>	

			</body>
			<?php
	}


	function confirmer_password_form() {
		session_start();
		if (!$_SESSION['Id_utilisateurs']) { // Si la session password n'est pas actif sur le site
		 	header('Location: connexion_form.php');
		}
		if (isset($_SESSION['Login'])) {
			$Login = $_SESSION['Login'];
		}
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/confirmer_password_form.css?v=<?php echo time(); ?>">
		<body>
		<form action="confirmer_password.php" method="REQUEST">
		
				<div class="formContainer">

					<div class="formSection">

						<h2>Réinitialisez votre mot de passe maintenant!</h2>
						
						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/user.png">
							</div>
							<input type="text" name="Login" disabled="" id="Login" placeholder="Login" value="<?=$Login;?>" >
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe" id="userPassword" placeholder="Entrez votre mot de passe" value="<?=(isset($_REQUEST['Mot_de_passe'])&&$_REQUEST['Mot_de_passe']!='')?$_REQUEST['Mot_de_passe']:'';?>">
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe1" id="userPassword" placeholder="Mot de passe à nouveau" value="<?=(isset($_REQUEST['Mot_de_passe1'])&&$_REQUEST['Mot_de_passe1']!='')?$_REQUEST['Mot_de_passe1']:'';?>">
						</div>

						<div class="btnRow">
							<input type="submit" value="Modifier le mot de passe" class="btn" name="envoi" id="loginBtn">
						</div>

					</div>

		
			</div>

		</form>
			
		</body>
		
		<?php
	}

	function modifier_password_form() {
		
		session_start();
		$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
		session_destroy();
	
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/modifier_password_form.css?v=<?php echo time(); ?>">
		<body>
		<form action="modifier_password.php" method="REQUEST">

			<div class="formContainer">

					<div class="formSection">

						<h2>Récupérer votre mot de passe d'utilisateur</h2>

						<P>Veillez saisir votre matricule lors de la création de votre compte.</P>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/user.png">
							</div>
							<input type="text" name="Login" id="userName" placeholder="Matricule" value="<?=(isset($_REQUEST['Login'])&&$_REQUEST['Login']!='')?$_REQUEST['Login']:'';?>">
						</div>

						<div class="btnRow">
							<input type="submit" value="Prochain" class="btn" name="envoi" id="loginBtn">
						</div>
						<div class="btnRow">
							<input type="button" value="Annuler" class="btn" name="envoi1" id="loginBtn1" onclick="window.location.href='connexion_form.php';">
						</div>

					</div>
					
			</div>
					

		</form>
			

		</body>
		<?php
	}

?>