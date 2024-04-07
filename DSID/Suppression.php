<?php



	if (isset($_REQUEST['Id_utilisateur']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['code1'])) {

			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$suppression = $bdd->prepare('DELETE FROM utilisateur WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
			$suppression->execute(array($Id_utilisateur, $Matricule_personnel));

			$recupSup = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
			$recupSup->execute(array($Id_utilisateur, $Matricule_personnel));

			if ($recupSup->rowCount() <= 0) {  

					header('Location: deconnexion.php');

			} else {  ?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_2.php" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
			} 

	}

	if (isset($_REQUEST['Id_planning']) && isset($_REQUEST['Matricule_personnel'])) {

			$Id_planning = htmlspecialchars($_REQUEST['Id_planning']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$DeleteDate = $bdd->prepare('DELETE FROM planning WHERE Id_planning = ? AND Matricule_personnel = ?');
			$DeleteDate->execute(array($Id_planning, $Matricule_personnel));

			$recupDate = $bdd->prepare('SELECT * FROM planning WHERE Id_planning = ? AND Matricule_personnel = ?');
			$recupDate->execute(array($Id_planning, $Matricule_personnel));

			if (!$recupDate->rowCount() > 0) {

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

	if (isset($_REQUEST['code5']) && isset($_REQUEST['Id_stage']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Id_demande'])) {

			
			$Id_stage = $_REQUEST['Id_stage'];
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$UpdateDemande = $bdd->prepare('UPDATE demande SET Decision = "Attente" WHERE Id_demande = ?');
			$UpdateDemande->execute(array($Id_demande));

			$DeleteStage = $bdd->prepare('DELETE FROM stage WHERE Id_stage = ? AND Id_demande = ? AND Id_personnel = ?');
			$DeleteStage->execute(array($Id_stage, $Id_demande, $Id_personnel));

			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ? AND Id_demande = ? AND Id_personnel = ?');
			$recupStage->execute(array($Id_stage, $Id_demande, $Id_personnel));

			array_map('unlink', glob("Telechargements/$Id_stage$Id_personnel$Id_demande-*"));

			if (!$recupStage->rowCount() > 0) {

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


	if (isset($_REQUEST['Id_bureau']) && isset($_REQUEST['Code'])) {

			
			$Id_bureau = $_REQUEST['Id_bureau'];
			$Code = htmlspecialchars($_REQUEST['Code']);



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$DeleteBureau = $bdd->prepare('DELETE FROM bureau WHERE Id_bureau = ? AND Code = ?');
			$DeleteBureau->execute(array($Id_bureau, $Code));

			$recupBureau = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau = ? AND Code = ?');
			$recupBureau->execute(array($Id_bureau, $Code));

			if (!$recupBureau->rowCount() > 0) {

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

	if (isset($_REQUEST['Id_fonction']) && isset($_REQUEST['Code'])) {

			
			$Id_fonction = $_REQUEST['Id_fonction'];
			$Code = htmlspecialchars($_REQUEST['Code']);



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$DeleteFonction = $bdd->prepare('DELETE FROM fonction WHERE Id_fonction = ? AND Code = ?');
			$DeleteFonction->execute(array($Id_fonction, $Code));

			$recupFonction = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction = ? AND Code = ?');
			$recupFonction->execute(array($Id_fonction, $Code));

			if (!$recupFonction->rowCount() > 0) {

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

	if (isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Matricule_personnel'])) {

			
			$Id_personnel = $_REQUEST['Id_personnel'];
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			
			$DeletePersonnel = $bdd->prepare('DELETE FROM personnel WHERE Id_personnel = ? AND Matricule_personnel = ?');
			$DeletePersonnel->execute(array($Id_personnel, $Matricule_personnel));

			$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Id_personnel = ? AND Matricule_personnel = ?');
			$recupPersonnel->execute(array($Id_personnel, $Matricule_personnel));

			if (!$recupPersonnel->rowCount() > 0) {	

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

	if (isset($_REQUEST['Id_demande']) && isset($_REQUEST['code6'])) {

			
			$Id_demande = $_REQUEST['Id_demande'];
	



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$DeleteDemande = $bdd->prepare('DELETE FROM demande WHERE Id_demande = ?');
			$DeleteDemande->execute(array($Id_demande));

			$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Id_demande = ?');
			$recupDemande->execute(array($Id_demande));


			if (!$recupDemande->rowCount() > 0) {

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

	if (isset($_REQUEST['Id_etablissement']) && isset($_REQUEST['code6'])) {

			
			$Id_etablissement = $_REQUEST['Id_etablissement'];
	



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$DeleteEtablissement = $bdd->prepare('DELETE FROM etablissement WHERE Id_etablissement = ?');
			$DeleteEtablissement->execute(array($Id_etablissement));

			$recpEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Id_etablissement = ?');
			$recpEtablissement->execute(array($Id_etablissement));


			if (!$recpEtablissement->rowCount() > 0) {	

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

	if (isset($_REQUEST['Id_stage']) && isset($_REQUEST['code6']) && isset($_REQUEST['Id_demande'])) {

			
			$Id_stage = $_REQUEST['Id_stage'];
			$Id_stage = $_REQUEST['Id_demande'];
	



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$Attente = 'Attente';

			

			$DeleteStage = $bdd->prepare('DELETE FROM stage WHERE Id_stage = ?');
			$DeleteStage->execute(array($Id_stage));

			$recpStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ?');
			$recpStage->execute(array($Id_stage));


			if (!$recpStage->rowCount() > 0) {

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




?>