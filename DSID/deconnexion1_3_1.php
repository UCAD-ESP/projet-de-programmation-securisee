<?php

	if (isset($_REQUEST['envoi'])) {

		

		require('MesFonctions.php');

		$Id_evenement = $_REQUEST['Id_evenement'];
		$Matricule_personnel = $_REQUEST['Matricule_personnel'];

		if (isset($_REQUEST['Id_utilisateur'])) {
			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
		}

		$titre = htmlspecialchars($_REQUEST['titre']);
		$date = htmlspecialchars($_REQUEST['date']);
		$first = htmlspecialchars($_REQUEST['first']);
		$last = htmlspecialchars($_REQUEST['last']);
		$description = htmlspecialchars($_REQUEST['description']);


		$verification = 'true';

		if (empty($Matricule_personnel)) {
			$verification = 'false';
		}

		if (empty($titre)) {
			$titre1 = '* : renseignez un titre!';
			$verification = 'false';
		}else if (strlen($titre) < 3) {
			$titre1 = '* : uniquement et au moin trois (3) lettres!';
			$verification = 'false';
		} else if (titreValid($titre) == 'false') {
			$titre1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$titre1 = '';
		} 


		if (empty($date)) {
			$date1 = '* : renseignez une date!';
			$verification = 'false';
		} else if (!isValidDate($date)) {
			$date1 = '* : renseignez une date valide!';
			$date = date('Y-m-d');
			$verification = 'false';
		} else {
			$date1 = '';
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


		if (empty($description)) {
			$description1 = '* : renseignez une description!';
			$verification = 'false';
		} else if (strlen($description) > 255) {
			$description1 = '* :  moins de 255 caractères!';
			$verification = 'false';
		} else {
			$description1 = '';
		}


		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_form1_3_1.php?titre=<?=$titre;?>&date=<?=$date;?>&first=<?=$first;?>&last=<?=$last;?>&description=<?=$description;?>&titre1=<?=$titre1;?>&date1=<?=$date1;?>&first1=<?=$first1;?>&last1=<?=$last1;?>&description1=<?=$description1;?>&Id_evenement=<?=$Id_evenement;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
			require('MesFormulaires.php');
			deconnexion_form1_3_1();
		} else if (deltaDate($first, $last) == 'false') { 

			?>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">L'heure de démarrage doit être inférieur à l'heure de fin!<a href="deconnexion_form1_3_1.php?titre=<?=isset($titre)?$titre:'';?>&date=<?=isset($date)?$date:'';?>&first=<?=isset($first)?$first:'';?>&last=<?=isset($last)?$last:'';?>&description=<?=isset($description)?$description:'';?>&titre1=<?=$titre1;?>&date1=<?=$date1;?>&first1=<?=$first1;?>&last1=<?=$last1;?>&description1=<?=$description1;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
			require('MesFormulaires.php');
			deconnexion_form1_3_1();
		}else { 

				$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
				$Date_debut = date('Y-m-d H:i', strtotime("$date $first"));
				$Date_fin = date('Y-m-d H:i', strtotime("$date $last"));

				$UpdateDate = $bdd->prepare('UPDATE evenement SET Titre = ?, Id_utilisateur = ?, Description = ?, Date_debut = ?, Date_fin = ? WHERE Id_evenement = ?');
				$UpdateDate->execute(array($titre, $Id_utilisateur, $description, $Date_debut, $Date_fin, $Id_evenement));

				$recupDate = $bdd->prepare('SELECT * FROM evenement WHERE Id_evenement = ? AND Matricule_personnel = ? AND Titre = ? AND Description = ? AND Date_debut = ?');
				$recupDate->execute(array($Id_evenement, $Matricule_personnel, $titre, $description, $Date_debut));

				if ($recupDate->rowCount() > 0) {

					$_SESSION['Id_evenement'] = $recupDate->fetch()['Id_evenement']; /* Recuperer uniquement l'id parmis les éléments du "fetch"*/
					// $_SESSION['Matricule_personnel'] = $_REQUEST['Matricule_personnel'];
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Succès !</h1>
									<h4 style="text-align: center;">Vos informations ont bien été modifiées!<a href="deconnexion_form1_3.php" style="position: relative; left: 45px; color: green">X</a></h4>
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
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_3_1.php?Login=<?=$Login;?>" style="position: relative; left: 45px; color: green">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}


		}



	} else if (isset($_REQUEST['envoi2'])) {

	

		if (isset($_REQUEST['Id_evenement'])) {


			$Id_evenement = $_REQUEST['Id_evenement'];
			$Matricule_personnel = $_REQUEST['Matricule_personnel'];

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$DeleteDate = $bdd->prepare('DELETE FROM evenement WHERE Id_evenement = ? AND Matricule_personnel = ?');
			$DeleteDate->execute(array($Id_evenement, $Matricule_personnel));

			$recupDate = $bdd->prepare('SELECT * FROM evenement WHERE Id_evenement = ? AND Matricule_personnel = ?');
			$recupDate->execute(array($Id_evenement, $Matricule_personnel));

			if (!$recupDate->rowCount() > 0) {

					
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Succès !</h1>
									<h4 style="text-align: center;">Vos informations ont bien été supprimées!<a href="deconnexion_form1_3.php" style="position: relative; left: 45px; color: green">X</a></h4>
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
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_3_1.php?Login=<?=$Login;?>" style="position: relative; left: 45px; color: green">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}

		}
		

			

				


	



	}


?>