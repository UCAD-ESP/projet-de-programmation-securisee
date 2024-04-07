<?php

	if ($_REQUEST['envoi']) {

		require('MesFonctions.php');

		if (isset($_REQUEST['Id_planning'])) {
			$Id_planning = htmlspecialchars($_REQUEST['Id_planning']);
		}


		$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
		$titre = htmlspecialchars($_REQUEST['titre']);
		$Date_debut = htmlspecialchars($_REQUEST['Date_debut']);
		$Date_fin = htmlspecialchars($_REQUEST['Date_fin']);
		$first = htmlspecialchars($_REQUEST['first']);
		$last = htmlspecialchars($_REQUEST['last']);
		$tache = htmlspecialchars($_REQUEST['tache']);


		$verification = 'true';

		if (empty($Matricule_personnel)) {
			$verification = 'false';
		}

		if (empty($titre)) {
			$titre1 = '* : renseignez un titre!';
			$verification = 'false';
		}else if (strlen($titre) < 3) {
			$titre1 = '* : au moin trois (3) lettres ou chiffres!';
			$verification = 'false';
		} else if (titreValid($titre) == 'false') {
			$titre1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$titre1 = '';
		} 


		if (empty($Date_debut)) {
			$Date_debut1 = '* : renseignez une date!';
			$verification = 'false';
		} else if (!isValidDate($Date_debut)) {
			$Date_debut1 = '* : renseignez une date valide!';
			$Date_debut = date('Y-m-d');
			$verification = 'false';
		} else {
			$Date_debut1 = '';
		}

		if (empty($Date_fin)) {
			$Date_fin1 = '* : renseignez une date!';
			$verification = 'false';
		} else if (!isValidDate($Date_fin)) {
			$Date_fin1 = '* : renseignez une date valide!';
			$Date_fin = date('Y-m-d');
			$verification = 'false';
		} else {
			$Date_fin1 = '';
		}

		if (empty($first)) {
			$first1 = '* : renseignez une heure!';
			$verification = 'false';
		} else if (!isValidHeure($first)) {
			$first1 = '* : renseignez une heure valide!';
			$first = '08:00';
			$verification = 'false';
		} else {
			$first1 = '';
		}


		if (empty($last)) {
			$last1 = '* : renseignez une heure!';
			$verification = 'false';
		} else if (!isValidHeure($last)) {
			$last1 = '* : renseignez une heure valide!';
			$last = '20:00';
			$verification = 'false';
		} else {
			$last1 = '';
		}


		if (empty($tache)) {
			$tache1 = '* : renseignez une tache!';
			$verification = 'false';
		} else if (strlen($tache) > 255) {
			$tache1 = '* :  moins de 255 caractères!';
			$verification = 'false';
		} else {
			$tache1 = '';
		}


		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_form1_2.php?titre=<?=$titre;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&first=<?=$first;?>&last=<?=$last;?>&tache=<?=$tache;?>&titre1=<?=$titre1;?>&Date_debut1=<?=$Date_debut1;?>&Date_fin1=<?=$Date_fin1;?>&first1=<?=$first1;?>&last1=<?=$last1;?>&tache1=<?=$tache1;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
	
		
		} else if (deltaDate($first, $last) == 'false') { 

			?>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">L'heure de démarrage doit être inférieur à l'heure de fin!<a href="deconnexion_form1_2.php?titre=<?=$titre;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&first=<?=$first;?>&last=<?=$last;?>&tache=<?=$tache;?>&titre1=<?=$titre1;?>&Date_debut1=<?=$Date_debut1;?>&Date_fin1=<?=$Date_fin1;?>&first1=<?=$first1;?>&last1=<?=$last1;?>&tache1=<?=$tache1;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
	

		} else { 

				$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

				$Date_debut = date('Y-m-d H:i', strtotime("$Date_debut $first"));
				$Date_fin = date('Y-m-d H:i', strtotime("$Date_fin $last"));

				$recupTest = $bdd->prepare('SELECT * FROM planning WHERE  Id_planning = ? AND Matricule_personnel = ?');
				$recupTest->execute(array($Id_planning, $Matricule_personnel));

				if ($recupTest->rowCount() > 0) {

					
					$recupDate = $bdd->prepare('SELECT * FROM planning WHERE Id_planning = ? ');
					$recupDate->execute(array($Id_planning));

					if ($recupDate->rowCount() > 0) {

						// $_SESSION['Id_planning'] = $recupDate->fetch()['Id_planning']; /* Recuperer uniquement l'id parmis les éléments du "fetch"*/
						// $_SESSION['Matricule_personnel'] = $_REQUEST['Matricule_personnel'];
						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-success">
										<h1 class="py-3 text-center">Confirmation :</h1>
										<h4 style="text-align: center;">Vos informations vont être modifiés!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?titre=<?=$titre;?>&tache=<?=$tache;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Id_planning=<?=$Id_planning;?>&Matricule_personnel=<?=$Matricule_personnel;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_form1_2.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
						
						//header('Location: connexion_form.php');
					} else { ?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2.php" style="position: relative; left: 45px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					}

				} else {

					$insertDate = $bdd->prepare('INSERT INTO planning (Matricule_personnel, Titre, Tache, Date_debut, Date_fin) VALUES (?,?,?,?,?)');
					$insertDate->execute(array($Matricule_personnel, $titre, $tache, $Date_debut, $Date_fin));

					$recupDate = $bdd->prepare('SELECT * FROM planning WHERE Matricule_personnel = ? AND Titre = ?');
					$recupDate->execute(array($Matricule_personnel, $titre));

					if ($recupDate->rowCount() > 0) {

						$_SESSION['Id_planning'] = $recupDate->fetch()['Id_planning']; 

						?>

						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-success">
										<h1 class="py-3 text-center">Succès !</h1>
										<h4 style="text-align: center;">Vos informations ont bien été enregistrées!<a href="deconnexion_form1_2.php" style="position: relative; left: 45px; color: green">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php


					} else { ?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_form1_2.php" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php


					}

				}



		}



	}
?>