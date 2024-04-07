<?php



	if (isset($_REQUEST['Id_utilisateur']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['code1']) && isset($_REQUEST['Login'])) {

			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$Login = htmlspecialchars($_REQUEST['Login']);

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$insertUser = $bdd->prepare('UPDATE utilisateur SET Login = ? WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
			$insertUser->execute(array($Login, $Id_utilisateur, $Matricule_personnel));

			$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Login = ?');
			$recupLogin->execute(array($Id_utilisateur, $Login));



			if ($recupLogin->rowCount() > 0) {  

					header('Location: deconnexion_form1_2_1_1.php?LN='.$Login.'');

			} else {  ?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
			} 

	}

	if (isset($_REQUEST['Id_utilisateur']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['code2']) && isset($_REQUEST['Mot_de_passe'])) {

			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$Mot_de_passe = htmlspecialchars($_REQUEST['Mot_de_passe']);

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$insertUser = $bdd->prepare('UPDATE utilisateur SET Mot_de_passe = ? WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
			$insertUser->execute(array($Mot_de_passe, $Id_utilisateur, $Matricule_personnel));

			$recupPassword = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Mot_de_passe = ?');
			$recupPassword->execute(array($Id_utilisateur, $Mot_de_passe));



			if ($recupPassword->rowCount() > 0) {  

					header('Location: deconnexion_form1_2_1_1.php?MN='.$Mot_de_passe.'');

			} else {  ?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
			} 

	}

	if (isset($_REQUEST['Id_utilisateur']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['code3']) && isset($_REQUEST['Mot_de_passe']) && isset($_REQUEST['Login'])) {

			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$Mot_de_passe = htmlspecialchars($_REQUEST['Mot_de_passe']);
			$Login = htmlspecialchars($_REQUEST['Login']);

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$insertUser = $bdd->prepare('UPDATE utilisateur SET Login = ?, Mot_de_passe = ? WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
			$insertUser->execute(array($Login, $Mot_de_passe, $Id_utilisateur, $Matricule_personnel));

			$recupPassword = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Login = ?');
			$recupPassword->execute(array($Id_utilisateur, $Login));

			$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Login = ?');
			$recupLogin->execute(array($Id_utilisateur, $Login));


								
			if ($recupPassword->rowCount() > 0 && $recupLogin->rowCount() > 0) { 

					header('Location: deconnexion_form1_2_1_1.php?MN='.$Mot_de_passe.'&LN='.$Login.'');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}




	if (isset($_REQUEST['titre']) && isset($_REQUEST['tache']) && isset($_REQUEST['Date_debut']) && isset($_REQUEST['Date_fin']) && isset($_REQUEST['Id_planning']) && isset($_REQUEST['Matricule_personnel'])) {

			$titre = htmlspecialchars($_REQUEST['titre']);
			$tache = htmlspecialchars($_REQUEST['tache']);
			$Date_debut = htmlspecialchars($_REQUEST['Date_debut']);
			$Date_fin = htmlspecialchars($_REQUEST['Date_fin']);
			$Id_planning = htmlspecialchars($_REQUEST['Id_planning']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);


			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$UpdateDate = $bdd->prepare('UPDATE planning SET Titre = ?, Tache = ?, Date_debut = ?, Date_fin = ? WHERE Id_planning = ?');
			$UpdateDate->execute(array($titre, $tache, $Date_debut, $Date_fin, $Id_planning));

			$recupDate = $bdd->prepare('SELECT * FROM planning WHERE Id_planning = ? AND Matricule_personnel = ? AND Titre = ? AND Tache = ? AND Date_debut = ?');
			$recupDate->execute(array($Id_planning, $Matricule_personnel, $titre, $tache, $Date_debut));

			if ($recupDate->rowCount() > 0) {

					header('Location: deconnexion_form1_2.php?Id_planning='.$Id_planning.'');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}
 

	if (isset($_REQUEST['Stage']) && isset($_REQUEST['Sujet']) && isset($_REQUEST['Date_debut']) && isset($_REQUEST['Date_fin']) && isset($_REQUEST['Rapport']) && isset($_REQUEST['Appreciations']) && isset($_REQUEST['Observation']) && isset($_REQUEST['Travail']) && isset($_REQUEST['Evaluation']) && isset($_REQUEST['Sociabilité']) && isset($_REQUEST['selectSatisfait']) && isset($_REQUEST['selectFormation']) && isset($_REQUEST['Duree']) && isset($_REQUEST['selectNote']) && isset($_REQUEST['Convention_nom']) && isset($_REQUEST['Id_stage']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Id_demande'])) {

			
			$Id_stage = $_REQUEST['Id_stage'];
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$Stage = htmlspecialchars($_REQUEST['Stage']);
			$Sujet = htmlspecialchars($_REQUEST['Sujet']);
			$Date_debut = htmlspecialchars($_REQUEST['Date_debut']);
			$Date_fin = htmlspecialchars($_REQUEST['Date_fin']);
			$Rapport = htmlspecialchars($_REQUEST['Rapport']);
			$selectNote = htmlspecialchars($_REQUEST['selectNote']);
			$Appreciations = htmlspecialchars($_REQUEST['Appreciations']);
			$Observation = htmlspecialchars($_REQUEST['Observation']);
			$Travail = htmlspecialchars($_REQUEST['Travail']);
			$Evaluation = htmlspecialchars($_REQUEST['Evaluation']);
			$Sociabilité = htmlspecialchars($_REQUEST['Sociabilité']);
			$selectSatisfait = htmlspecialchars($_REQUEST['selectSatisfait']);
			$selectFormation = htmlspecialchars($_REQUEST['selectFormation']);
			$Duree = htmlspecialchars($_REQUEST['Duree']);
			$Convention_nom = htmlspecialchars($_REQUEST['Convention_nom']);


			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');


			$UpdateStage = $bdd->prepare('UPDATE stage SET Nom_stage = ?, Sujet_stage = ?, Date_debut = ?, Date_fin = ?, Rapport = ?, Appreciations = ?, Observation = ?, Travail = ?, Evaluation = ?, Sociabilité = ?, Satisfait = ?, Jugement_formation = ?, Duree = ?, Note = ?, Convention = ? WHERE Id_stage = ?');
			$UpdateStage->execute(array($Stage, $Sujet, $Date_debut, $Date_fin, $Rapport, $Appreciations, $Observation, $Travail, $Evaluation, $Sociabilité, $selectSatisfait, $selectFormation, $Duree, $selectNote, $Convention_nom, $Id_stage));



			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ? AND Id_personnel = ? AND Id_demande = ?');
			$recupStage->execute(array($Id_stage, $Id_personnel, $Id_demande));

			if ($recupStage->rowCount() > 0) {

					header('Location: deconnexion_form1_4_1.php');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_4_1.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}

	if (isset($_REQUEST['Stage']) && isset($_REQUEST['Sujet']) && isset($_REQUEST['Date_debut']) && isset($_REQUEST['Date_fin']) && isset($_REQUEST['Rapport']) && isset($_REQUEST['Appreciations']) && isset($_REQUEST['Observation']) && isset($_REQUEST['Travail']) && isset($_REQUEST['Evaluation']) && isset($_REQUEST['Sociabilité']) && isset($_REQUEST['selectSatisfait']) && isset($_REQUEST['selectFormation']) && isset($_REQUEST['Duree']) && isset($_REQUEST['selectNote']) && isset($_REQUEST['code4']) && isset($_REQUEST['Id_stage']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Id_demande'])) {

			
			$Id_stage = $_REQUEST['Id_stage'];
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$Stage = htmlspecialchars($_REQUEST['Stage']);
			$Sujet = htmlspecialchars($_REQUEST['Sujet']);
			$Date_debut = htmlspecialchars($_REQUEST['Date_debut']);
			$Date_fin = htmlspecialchars($_REQUEST['Date_fin']);
			$Rapport = htmlspecialchars($_REQUEST['Rapport']);
			$selectNote = htmlspecialchars($_REQUEST['selectNote']);
			$Appreciations = htmlspecialchars($_REQUEST['Appreciations']);
			$Observation = htmlspecialchars($_REQUEST['Observation']);
			$Travail = htmlspecialchars($_REQUEST['Travail']);
			$Evaluation = htmlspecialchars($_REQUEST['Evaluation']);
			$Sociabilité = htmlspecialchars($_REQUEST['Sociabilité']);
			$selectSatisfait = htmlspecialchars($_REQUEST['selectSatisfait']);
			$selectFormation = htmlspecialchars($_REQUEST['selectFormation']);
			$Duree = htmlspecialchars($_REQUEST['Duree']);
	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateStage = $bdd->prepare('UPDATE stage SET Nom_stage = ?, Sujet_stage = ?, Date_debut = ?, Date_fin = ?, Rapport = ?, Appreciations = ?, Observation = ?, Travail = ?, Evaluation = ?, Sociabilité = ?, Satisfait = ?, Jugement_formation = ?, Duree = ?, Note = ? WHERE Id_stage = ?');
			$UpdateStage->execute(array($Stage, $Sujet, $Date_debut, $Date_fin, $Rapport, $Appreciations, $Observation, $Travail, $Evaluation, $Sociabilité, $selectSatisfait, $selectFormation, $Duree, $selectNote, $Id_stage));



			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ? AND Id_personnel = ? AND Id_demande = ?');
			$recupStage->execute(array($Id_stage, $Id_personnel, $Id_demande));

			if ($recupStage->rowCount() > 0) {

					header('Location: deconnexion_form1_4_1.php');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_4_1.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}



	if (isset($_REQUEST['Id_bureau']) && isset($_REQUEST['Id_fonction']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['dateD']) && isset($_REQUEST['dateF']) && isset($_REQUEST['Nom']) && isset($_REQUEST['Prenom']) && isset($_REQUEST['Telephone']) && isset($_REQUEST['Adresse']) && isset($_REQUEST['Email']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['code6'])) {

			
			$Id_bureau = $_REQUEST['Id_bureau'];
			$Id_fonction = htmlspecialchars($_REQUEST['Id_fonction']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$dateD = htmlspecialchars($_REQUEST['dateD']);
			$dateF = htmlspecialchars($_REQUEST['dateF']);
			$Nom = htmlspecialchars($_REQUEST['Nom']);
			$Prenom = htmlspecialchars($_REQUEST['Prenom']);
			$Telephone = htmlspecialchars($_REQUEST['Telephone']);
			$Adresse = htmlspecialchars($_REQUEST['Adresse']);
			$Email = htmlspecialchars($_REQUEST['Email']);
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$code6 = htmlspecialchars($_REQUEST['code6']);
	
	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdatePersonnel = $bdd->prepare('UPDATE personnel SET Id_bureau = ?, Id_fonction = ?, Matricule_personnel = ?, Date_debut_affectation = ?, Date_fin_affectation = ?, Nom = ?, Prenom = ?, Telephone = ?, Adresse = ?, Email = ? WHERE Id_personnel = ?');
			$UpdatePersonnel->execute(array($Id_bureau, $Id_fonction, $Matricule_personnel, $dateD, $dateF, $Nom , $Prenom, $Telephone, $Adresse, $Email, $Id_personnel));

			$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Id_personnel = ? AND Matricule_personnel = ?');
			$recupPersonnel->execute(array($Id_personnel, $Matricule_personnel));

			if ($recupPersonnel->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_2.php?select=1');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=1" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}

	if (isset($_REQUEST['Id_bureau']) && isset($_REQUEST['Code']) && isset($_REQUEST['Nom'])) {

			
			$Id_bureau = $_REQUEST['Id_bureau'];
			$Code = htmlspecialchars($_REQUEST['Code']);
			$Nom = htmlspecialchars($_REQUEST['Nom']);
			
	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateBureau = $bdd->prepare('UPDATE bureau SET Code = ?, Nom = ? WHERE Id_bureau = ?');
			$UpdateBureau->execute(array($Code, $Nom, $Id_bureau));

			$recupDate = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau = ? AND Code = ?');
			$recupDate->execute(array($Id_bureau, $Code));

			if ($recupDate->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_2.php?select=2');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=2" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}


	if (isset($_REQUEST['Id_fonction']) && isset($_REQUEST['Code']) && isset($_REQUEST['Nom'])) {

			
			$Id_fonction = $_REQUEST['Id_fonction'];
			$Code = htmlspecialchars($_REQUEST['Code']);
			$Nom = htmlspecialchars($_REQUEST['Nom']);
			
	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateBureau = $bdd->prepare('UPDATE fonction SET Code = ?, Nom = ? WHERE Id_fonction = ?');
			$UpdateBureau->execute(array($Code, $Nom, $Id_fonction));

			$recupDate = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction = ? AND Code = ?');
			$recupDate->execute(array($Id_fonction, $Code));

			if ($recupDate->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_2.php?select=3');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=3" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}




	if (isset($_REQUEST['Id_etablissement']) && isset($_REQUEST['Niveau']) && isset($_REQUEST['Domaine']) && isset($_REQUEST['Nom_demandeur']) && isset($_REQUEST['Prenom_demandeur']) && isset($_REQUEST['Adresse']) && isset($_REQUEST['Date_naissance']) && isset($_REQUEST['Lieu_naissance']) && isset($_REQUEST['Telephone']) && isset($_REQUEST['Email']) && isset($_REQUEST['Decision']) && isset($_REQUEST['Id_demande'])) {

			
			$Id_etablissement = $_REQUEST['Id_etablissement'];
			$Niveau = htmlspecialchars($_REQUEST['Niveau']);
			$Domaine = htmlspecialchars($_REQUEST['Domaine']);
			$Nom_demandeur = htmlspecialchars($_REQUEST['Nom_demandeur']);
			$Prenom_demandeur = htmlspecialchars($_REQUEST['Prenom_demandeur']);
			$Adresse = htmlspecialchars($_REQUEST['Adresse']);
			$Date_naissance = htmlspecialchars($_REQUEST['Date_naissance']);
			$Lieu_naissance = htmlspecialchars($_REQUEST['Lieu_naissance']);
			$Telephone = htmlspecialchars($_REQUEST['Telephone']);
			$Email = htmlspecialchars($_REQUEST['Email']);
			$Decision = htmlspecialchars($_REQUEST['Decision']);
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
	
	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Niveau = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Niveau, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Id_etablissement = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Id_etablissement, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Domaine = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Domaine, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Nom_demandeur = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Nom_demandeur, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Prenom_demandeur = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Prenom_demandeur, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Adresse = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Adresse, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Date_naissance = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Date_naissance, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Lieu_naissance = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Lieu_naissance, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Telephone = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Telephone, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Email = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Email, $Id_demande));

			$UpdateEtablissement = $bdd->prepare('UPDATE demande SET Decision = ? WHERE Id_demande = ?');
			$UpdateEtablissement->execute(array($Decision, $Id_demande));

			
			// $UpdateEtablissement = $bdd->prepare('UPDATE demande SET Id_etablissement = ?, Niveau = ?, Domaine = ?, Nom_demandeur = ?, Prenom_demandeur = ?, Adresse = ?, Date_naissance = ?, Lieu_naissance = ?, Telephone = ?, Email, Decision = ? WHERE Id_demande = ?');
			// $UpdateEtablissement->execute(array($Id_etablissement, $Niveau, $Domaine, $NomD, $PrenomD, $AdresseD, $dateN, $Lieu, $TelephoneD, $EmailD, $selectDecision, $Id_demande));

			$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Id_demande = ?');
			$recupDemande->execute(array($Id_demande));

			if ($recupDemande->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_2.php?select=4');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=4" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}




	if (isset($_REQUEST['Id_demande']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Nom_stage']) && isset($_REQUEST['Niveau_stage']) && isset($_REQUEST['Sujet_stage']) && isset($_REQUEST['Id_stage'])) {

			
			$Id_demande = $_REQUEST['Id_demande'];
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$Nom_stage = htmlspecialchars($_REQUEST['Nom_stage']);
			$Niveau_stage = htmlspecialchars($_REQUEST['Niveau_stage']);
			$Sujet_stage = htmlspecialchars($_REQUEST['Sujet_stage']);
			$Id_stage = htmlspecialchars($_REQUEST['Id_stage']);
	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateStage = $bdd->prepare('UPDATE stage SET Id_demande = ? WHERE Id_stage = ?');
			$UpdateStage->execute(array($Id_demande, $Id_stage));

			$UpdateStage = $bdd->prepare('UPDATE stage SET Id_personnel = ? WHERE Id_stage = ?');
			$UpdateStage->execute(array($Id_personnel, $Id_stage));

			$UpdateStage = $bdd->prepare('UPDATE stage SET Nom_stage = ?, Niveau_stage = ?, Sujet_stage = ? WHERE Id_stage = ?');
			$UpdateStage->execute(array($Nom_stage, $Niveau_stage, $Sujet_stage, $Id_stage));


			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ?');
			$recupStage->execute(array($Id_stage));

			if ($recupStage->rowCount() > 0) {


					header('Location: deconnexion_admin_form1_2.php?select=51');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=51" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}


	
	if (isset($_REQUEST['Nom']) && isset($_REQUEST['Telephone']) && isset($_REQUEST['Email']) && isset($_REQUEST['Adresse']) && isset($_REQUEST['BP']) && isset($_REQUEST['Ville']) && isset($_REQUEST['Pays']) && isset($_REQUEST['Id_etablissement'])) {

			
			$Nom = $_REQUEST['Nom'];
			$Telephone = htmlspecialchars($_REQUEST['Telephone']);
			$Email = htmlspecialchars($_REQUEST['Email']);
			$Adresse = htmlspecialchars($_REQUEST['Adresse']);
			$BP = htmlspecialchars($_REQUEST['BP']);
			$Ville = htmlspecialchars($_REQUEST['Ville']);
			$Pays = htmlspecialchars($_REQUEST['Pays']);
			$Id_etablissement = htmlspecialchars($_REQUEST['Id_etablissement']);

	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateEtablissement = $bdd->prepare('UPDATE etablissement SET Nom = ?, Telephone = ?, Email = ?, Adresse = ?, BP = ?, Ville = ?, Pays = ? WHERE Id_etablissement = ?');
			$UpdateEtablissement->execute(array($Nom, $Telephone, $Email, $Adresse, $BP, $Ville, $Pays, $Id_etablissement));


			$recupEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Id_etablissement = ?');
			$recupEtablissement->execute(array($Id_etablissement));

			if ($recupEtablissement->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_2.php?select=6');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=6" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}



	if (isset($_REQUEST['Login']) && isset($_REQUEST['code1']) && isset($_REQUEST['Id_administrateur'])) {

			
			$Login = $_REQUEST['Login'];
			$Id_administrateur = htmlspecialchars($_REQUEST['Id_administrateur']);

	

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateAdministrateur = $bdd->prepare('UPDATE administrateur SET Login = ? WHERE Id_administrateur = ?');
			$UpdateAdministrateur->execute(array($Login, $Id_administrateur));


			$recupAdministrateur = $bdd->prepare('SELECT * FROM administrateur WHERE Login = ?');
			$recupAdministrateur->execute(array($Login));

			if ($recupAdministrateur->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_6.php');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}


	if (isset($_REQUEST['Mot_de_passe']) && isset($_REQUEST['code2']) && isset($_REQUEST['Id_administrateur']) && isset($_REQUEST['Login'])) {

			
			$Login = $_REQUEST['Login'];
			$Mot_de_passe = $_REQUEST['Mot_de_passe'];
			$Id_administrateur = htmlspecialchars($_REQUEST['Id_administrateur']);


			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateAdministrateur = $bdd->prepare('UPDATE administrateur SET Login = ?, Mot_de_passe = ? WHERE Id_administrateur = ?');
			$UpdateAdministrateur->execute(array($Login, $Mot_de_passe, $Id_administrateur));


			$recupAdministrateur = $bdd->prepare('SELECT * FROM administrateur WHERE Login = ?');
			$recupAdministrateur->execute(array($Login));

			if ($recupAdministrateur->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_6.php');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}


	if (isset($_REQUEST['Mot_de_passe']) && isset($_REQUEST['code4']) && isset($_REQUEST['Id_administrateur'])) {


			$Mot_de_passe = $_REQUEST['Mot_de_passe'];
			$Id_administrateur = htmlspecialchars($_REQUEST['Id_administrateur']);


			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			

			$UpdateAdministrateur = $bdd->prepare('UPDATE administrateur SET Mot_de_passe = ? WHERE Id_administrateur = ?');
			$UpdateAdministrateur->execute(array($Mot_de_passe, $Id_administrateur));


			$recupAdministrateur = $bdd->prepare('SELECT * FROM administrateur WHERE Mot_de_passe = ?');
			$recupAdministrateur->execute(array($Mot_de_passe));

			if ($recupAdministrateur->rowCount() > 0) {

					header('Location: deconnexion_admin_form1_6.php');

			} else {  ?>

				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} 

	}



?>