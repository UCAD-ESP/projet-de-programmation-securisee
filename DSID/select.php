<?php


	if (isset($_REQUEST['envoi_bureau'])) {

		require('MesFonctions.php');

		if (isset($_REQUEST['Id_bureau'])) {
			$Id_bureau = htmlspecialchars($_REQUEST['Id_bureau']);
		}

		$Code = htmlspecialchars($_REQUEST['Code']);
		$Nom = htmlspecialchars($_REQUEST['Nom']);



		$verification = 'true';

		if (empty($Code)) {
			$code1 = '* : renseignez le code!';
			$verification = 'false';
		} else if (isnan($Code) == 'false') {
			$code1 = '* : renseignez des chiffres!';
			$verification = 'false';
		} else {
			$code1 = '';
		} 


		if (empty($Nom)) {
			$nom1 = '* : renseignez un nom!';
			$verification = 'false';
		} else {
			$nom1 = '';
		} 




		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur!</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&select=2&Id_bureau=<?=$Id_bureau;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
			require('MesFormulaires.php');
			deconnexion_admin_form1_2();
		}else { 

					$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

				 

					$insertBureau = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau = ?');
					$insertBureau->execute(array($Id_bureau??-1));

					if ($insertBureau->rowCount() > 0) {

						$recupBureau = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau != ? AND Code = ?');
						$recupBureau->execute(array($Id_bureau, $Code));

						$recupBureau1 = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau != ? AND Nom = ?');
						$recupBureau1->execute(array($Id_bureau, $Nom));

						if ($recupBureau1->rowCount() > 0) {  ?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-warning">
												<h1 class="py-3 text-center">Attention!</h1>
												<h4 style="text-align: center;">Ce Nom de bureau existe déja!<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&Id_bureau=<?=$Id_bureau;?>&select=2" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
						} else if ($recupBureau->rowCount() > 0) {  ?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-warning">
												<h1 class="py-3 text-center">Attention!</h1>
												<h4 style="text-align: center;">Ce code bureau existe déja!<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&Id_bureau=<?=$Id_bureau;?>&select=2" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
						} else {


							$recupDate = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau = ?');
							$recupDate->execute(array($Id_bureau));

							if ($recupDate->rowCount() > 0) {

								?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-success">
												<h1 class="py-3 text-center">Confirmation :</h1>
												<h4 style="text-align: center;">Les informations du bureau vont être modifiées!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&Id_bureau=<?=$Id_bureau;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=2" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
												<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=2" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
					} else {

						$recupBureau = $bdd->prepare('SELECT * FROM bureau WHERE Code = ?');
						$recupBureau->execute(array($Code));

						$recupBureau1 = $bdd->prepare('SELECT * FROM bureau WHERE Nom = ?');
						$recupBureau1->execute(array($Nom));

						if ($recupBureau->rowCount() > 0) {  ?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-warning">
												<h1 class="py-3 text-center">Attention!</h1>
												<h4 style="text-align: center;">Ce code bureau existe déja!<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&select=2" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
						} else if ($recupBureau1->rowCount() > 0) {  ?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-warning">
												<h1 class="py-3 text-center">Attention!</h1>
												<h4 style="text-align: center;">Ce Nom de bureau existe déja!<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&select=2" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
						} else {

							$insertBureau = $bdd->prepare('INSERT INTO bureau (Code, Nom) VALUES (?,?)');
							$insertBureau->execute(array($Code, $Nom));

							$recupBureau = $bdd->prepare('SELECT * FROM bureau WHERE Code = ? AND Nom = ?');
							$recupBureau->execute(array($Code, $Nom));

							if ($recupBureau->rowCount() > 0) {

								?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-success">
												<h1 class="py-3 text-center">Succès !</h1>
												<h4 style="text-align: center;">Vos informations ont bien été enregistrées!<a href="deconnexion_admin_form1_2.php?select=2" style="position: relative; left: 45px; color: green">X</a></h4>
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
												<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php" style="position: relative; left: 45px; color: green">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}

					}

					
				

		}


	}



// ---------------------------------------------------------------------------------------------------

	if (isset($_REQUEST['envoi_fonction'])) {

		require('MesFonctions.php');

		if (isset($_REQUEST['Id_fonction'])) {
			$Id_fonction = htmlspecialchars($_REQUEST['Id_fonction']);
		}

		$Code = htmlspecialchars($_REQUEST['Code']);
		$Nom = htmlspecialchars($_REQUEST['Nom']);



		$verification = 'true';

		if (empty($Code)) {
			$code1 = '* : renseignez le code!';
			$verification = 'false';
		} else if (isnan($Code) == 'false') {
			$code1 = '* : renseignez des chiffres!';
			$verification = 'false';
		} else {
			$code1 = '';
		} 


		if (empty($Nom)) {
			$nom1 = '* : renseignez un nom!';
			$verification = 'false';
		} else {
			$nom1 = '';
		} 



		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur!</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&select=3&Id_fonction=<?=$Id_fonction;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
			require('MesFormulaires.php');
			deconnexion_admin_form1_2();
		}else { 

					$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');


					$insertBureau = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction = ?');
					$insertBureau->execute(array($Id_fonction??-1));

					if ($insertBureau->rowCount() > 0) {

						$recupBureau = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction != ? AND Code = ?');
						$recupBureau->execute(array($Id_fonction, $Code));

						$recupBureau1 = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction != ? AND Nom = ?');
						$recupBureau1->execute(array($Id_fonction, $Nom));

						if ($recupBureau->rowCount() > 0) {  ?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-warning">
												<h1 class="py-3 text-center">Attention!</h1>
												<h4 style="text-align: center;">Ce code fonction existe déja!<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&Id_fonction=<?=$Id_fonction;?>&select=3" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
						} else if ($recupBureau1->rowCount() > 0) {  ?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-warning">
												<h1 class="py-3 text-center">Attention!</h1>
												<h4 style="text-align: center;">Ce Nom de fonction existe déja!<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&Id_fonction=<?=$Id_fonction;?>&select=3" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
						} else {


							$recupDate = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction = ?');
							$recupDate->execute(array($Id_fonction));

							if ($recupDate->rowCount() > 0) {

								?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-success">
												<h1 class="py-3 text-center">Confirmation :</h1>
												<h4 style="text-align: center;">Les informations de la fonction vont être modifiées!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&Id_fonction=<?=$Id_fonction;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=3" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
												<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=3" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
					} else {

						$recupBureau = $bdd->prepare('SELECT * FROM fonction WHERE Code = ?');
						$recupBureau->execute(array($Code));

						if ($recupBureau->rowCount() > 0) {  ?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-warning">
												<h1 class="py-3 text-center">Attention!</h1>
												<h4 style="text-align: center;">Ce code fonction existe déja!<a href="deconnexion_admin_form1_2.php?Code=<?=$Code;?>&Nom=<?=$Nom;?>&code1=<?=$code1;?>&nom1=<?=$nom1;?>&select=3" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
						} else {

							$insertBureau = $bdd->prepare('INSERT INTO fonction (Code, Nom) VALUES (?,?)');
							$insertBureau->execute(array($Code, $Nom));

							$recupBureau = $bdd->prepare('SELECT * FROM fonction WHERE Code = ? AND Nom = ?');
							$recupBureau->execute(array($Code, $Nom));

							if ($recupBureau->rowCount() > 0) {

								?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-success">
												<h1 class="py-3 text-center">Succès !</h1>
												<h4 style="text-align: center;">Vos informations ont bien été enregistrées!<a href="deconnexion_admin_form1_2.php?select=3" style="position: relative; left: 45px; color: green">X</a></h4>
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
												<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php" style="position: relative; left: 45px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}

					}

					
				

		}


	}

	//------------------------------------------------------------------------------------------------------

	if (isset($_REQUEST['envoi_personnel'])) {

		

		require('MesFonctions.php');

		if (isset($_REQUEST['Id_personnel'])) {
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
		}

		$Matricule_personnel = $_REQUEST['Matricule_personnel'];
		$Telephone = $_REQUEST['Telephone'];
		$Nom = htmlspecialchars($_REQUEST['Nom']);
		$Prenom = htmlspecialchars($_REQUEST['Prenom']);
		$dateD = htmlspecialchars($_REQUEST['dateD']);
		$dateF = htmlspecialchars($_REQUEST['dateF']);
		$Adresse = htmlspecialchars($_REQUEST['Adresse']);
		$Email = htmlspecialchars($_REQUEST['Email']);
		$selectBureau = htmlspecialchars($_REQUEST['selectBureau']);
		$selectFonction = htmlspecialchars($_REQUEST['selectFonction']);


		$verification = 'true';

		if ($selectBureau == '--Choix Bureau--') {
			$selectBureau1 = '* : renseignez un bureau!';
			$verification = 'false';
		} else {
			$selectBureau1 = '';
		}

		if ($selectFonction == '--Choix Fonction--') {
			$selectFonction1 = '* : renseignez une fonction!';
			$verification = 'false';
		} else {
			$selectFonction1 = '';
		}

		if (empty($Matricule_personnel)) {
			$Matricule_personnel1 = '* : renseignez un matricule!';
			$verification = 'false';
		} else if (isnan($Matricule_personnel) == 'false') {
			$Matricule_personnel1 = '* : renseignez des chiffres!';
			$verification = 'false';
		} else {
			$Matricule_personnel1 = '';
		} 

		if (empty($Telephone)) {
			$Telephone1 = '* : renseignez un numéro!';
			$verification = 'false';
		} else if (isnan($Telephone) == 'false') {
			$Telephone1 = '* : renseignez des chiffres!';
			$verification = 'false';
		} else {
			$Telephone1 = '';
		} 

		if (empty($Nom)) {
			$nom1 = '* : renseignez un nom!';
			$verification = 'false';
		} else if (strlen($Nom) < 2) {
			$nom1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($Nom) == 'false') {
			$nom1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$nom1 = '';
		} 

		if (empty($Prenom)) {
			$prenom1 = '* : renseignez un prenom!';
			$verification = 'false';
		} else if (strlen($Prenom) < 2) {
			$prenom1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($Prenom) == 'false') {
			$prenom1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$prenom1 = '';
		} 


		if (empty($dateD)) {
			$dateD1 = '* : renseignez une date!';
			$verification = 'false';
		} else if (!isValidDate($dateD)) {
			$dateD1 = '* : renseignez une date valide!';
			$dateD = date('Y-m-d');
			$verification = 'false';
		} else {
			$dateD1 = '';
		}


		if (empty($dateF)) {
			$dateF1 = '* : renseignez une date!';
			$verification = 'false';
		} else if (!isValidDate($dateF)) {
			$dateF1 = '* : renseignez une date valide!';
			$dateF = date('Y-m-d');
			$verification = 'false';
		} else {
			$dateF1 = '';
		}

		if (empty($Adresse)) {
			$Adresse1 = '* : renseignez une adresse!';
			$verification = 'false';
		} else if (strlen($Adresse) < 2) {
			$Adresse1 = '* : entrez au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Adresse) == 'false') {
			$Adresse1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Adresse1 = '';
		} 

		if (empty($Email)) {
			$Email1 = '* : renseignez une adresse mail!';
			$verification = 'false';
		} else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
			$Email1 = '* : renseignez une adresse mail valide!';
			$verification = 'false';
		} else {
			$Email1 = '';
		} 




		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&selectBureau1=<?=$selectBureau1;?>&selectFonction1=<?=$selectFonction1;?>&select=1&Id_personnel=<?=$Id_personnel;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php


		}else { 

				$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

				$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Id_personnel = ?');
				$recupPersonnel->execute(array($Id_personnel??-1));

				if ($recupPersonnel->rowCount() > 0) {





					$recupBureau = $bdd->prepare('SELECT Nom FROM bureau WHERE Nom = ?');
					$recupBureau->execute(array($selectBureau));
					$rowCountBureau = $recupBureau->rowCount();
					// $recupBureau->fetch()['Id_utilisateur'];

					$recupFonction = $bdd->prepare('SELECT Nom FROM fonction WHERE Nom = ?');
					$recupFonction->execute(array($selectFonction));
					$rowCountFonction = $recupFonction->rowCount();

					$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Id_personnel != ? AND Matricule_personnel = ?');
					$recupPersonnel->execute(array($Id_personnel, $Matricule_personnel));

					

					if ($rowCountBureau <= 0 && $rowCountFonction <= 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Veillez renseignez un bureau et une fonction!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&select=1&selectBureau1=* : renseignez un bureau&selectFonction1=* : renseignez une fonction!&Id_personnel=<?=$Id_personnel;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php

					} else if ($rowCountBureau <= 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Veillez renseignez un bureau!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&select=1&selectBureau1=* : renseignez un bureau!&selectFonction=<?=$selectFonction;?>&Id_personnel=<?=$Id_personnel;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php

					} else if ($rowCountFonction <= 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Veillez renseignez une fonction!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&select=1&selectFonction1=* : renseignez une fonction!&selectBureau=<?=$selectBureau;?>&Id_personnel=<?=$Id_personnel;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php

						require('MesFormulaires.php');
						deconnexion_admin_form1_2();
					} else if ($recupPersonnel->rowCount() > 0) {  ?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-warning">
										<h1 class="py-3 text-center">Attention!</h1>
										<h4 style="text-align: center;">Ce matricule existe déjà!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&selectBureau1=<?=$selectBureau1;?>&selectFonction1=<?=$selectFonction1;?>&select=1&Id_personnel=<?=$Id_personnel;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					
					} else {

						$recupBureau = $bdd->prepare('SELECT Id_bureau FROM bureau WHERE Nom = ?');
						$recupBureau->execute(array($selectBureau));
						$Id_bureau = $recupBureau->fetch()['Id_bureau'];

						$recupFonction = $bdd->prepare('SELECT Id_fonction FROM fonction WHERE Nom = ?');
						$recupFonction->execute(array($selectFonction));
						$Id_fonction = $recupFonction->fetch()['Id_fonction'];


						$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Id_personnel = ?');
						$recupPersonnel->execute(array($Id_personnel));

						$code6 = 2;

						if ($recupPersonnel->rowCount() > 0) {

							?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-success">
											<h1 class="py-3 text-center">Confirmation :</h1>
											<h4 style="text-align: center;">Les informations du personnel vont être modifiées!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Id_bureau=<?=$Id_bureau;?>&Id_fonction=<?=$Id_fonction;?>&Matricule_personnel=<?=$Matricule_personnel;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&Telephone=<?=$Telephone;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&Id_personnel=<?=$Id_personnel;?>&code6=<?=$code6;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=1" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
											<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=1" style="position: relative; left: 45px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}


				} else {

					$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Matricule_personnel = ?');
					$recupPersonnel->execute(array($Matricule_personnel));

					$recupBureau = $bdd->prepare('SELECT Nom FROM bureau WHERE Nom = ?');
					$recupBureau->execute(array($selectBureau));
					$rowCountBureau = $recupBureau->rowCount();
					// $recupBureau->fetch()['Id_utilisateur'];

					$recupFonction = $bdd->prepare('SELECT Nom FROM fonction WHERE Nom = ?');
					$recupFonction->execute(array($selectFonction));
					$rowCountFonction = $recupFonction->rowCount();

					if ($rowCountBureau <= 0 && $rowCountFonction <= 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Veillez renseignez un bureau et une fonction!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&select=1&selectBureau1=* : renseignez un bureau&selectFonction1=* : renseignez une fonction" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php

					} else if ($rowCountBureau <= 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Veillez renseignez un bureau!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&select=1&selectBureau1=* : renseignez un bureau&selectFonction=<?=$selectFonction;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php

						require('MesFormulaires.php');
						deconnexion_admin_form1_2();
					} else if ($rowCountFonction <= 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-danger">
										<h1 class="py-3 text-center">Erreur !</h1>
										<h4 style="text-align: center;">Veillez renseignez une fonction!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&select=1&selectFonction1=* : renseignez une fonction&selectBureau=<?=$selectBureau;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php

						require('MesFormulaires.php');
						deconnexion_admin_form1_2();
					} else if ($recupPersonnel->rowCount() > 0) {


						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-warning">
										<h1 class="py-3 text-center">Attention!</h1>
										<h4 style="text-align: center;">Ce matricule existe déjà!<a href="deconnexion_admin_form1_2.php?Matricule_personnel=<?=$Matricule_personnel;?>&Matricule_personnel1=* : ce matricule existe déjà!&Telephone=<?=$Telephone;?>&Nom=<?=$Nom;?>&Prenom=<?=$Prenom;?>&dateD=<?=$dateD;?>&dateF=<?=$dateF;?>&Adresse=<?=$Adresse;?>&Email=<?=$Email;?>&selectBureau=<?=$selectBureau;?>&selectFonction=<?=$selectFonction;?>&Matricule_personnel1=<?=$Matricule_personnel1;?>&Telephone1=<?=$Telephone1;?>&nom1=<?=$nom1;?>&prenom1=<?=$prenom1;?>&dateD1=<?=$dateD1;?>&dateF1=<?=$dateF1;?>&Adresse1=<?=$Adresse1;?>&Email1=<?=$Email1;?>&select=1" style="position: relative; left: 45px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					} else {

						
							$recupBureau = $bdd->prepare('SELECT Id_bureau FROM bureau WHERE Nom = ?');
							$recupBureau->execute(array($selectBureau));
							$Id_bureau = $recupBureau->fetch()['Id_bureau'];

							$recupFonction = $bdd->prepare('SELECT Id_fonction FROM fonction WHERE Nom = ?');
							$recupFonction->execute(array($selectFonction));
							$Id_fonction = $recupFonction->fetch()['Id_fonction'];

							$insertPersonnel = $bdd->prepare('INSERT INTO personnel (Id_bureau, Id_fonction, Matricule_personnel, Date_debut_affectation, Date_fin_affectation, Nom, Prenom, Telephone, Adresse, Email) VALUES (?,?,?,?,?,?,?,?,?,?)');
							$insertPersonnel->execute(array($Id_bureau, $Id_fonction, $Matricule_personnel, $dateD, $dateF, $Nom , $Prenom, $Telephone, $Adresse, $Email));

							$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Matricule_personnel = ?');
							$recupPersonnel->execute(array($Matricule_personnel));

							if ($recupPersonnel->rowCount() > 0) {


								?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-success">
												<h1 class="py-3 text-center">Succès!</h1>
												<h4 style="text-align: center;">Vos informations ont bien été enregistrées !<a href="deconnexion_admin_form1_2.php?select=1" style="position: relative; left: 45px; color: green">X</a></h4>
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
												<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php" style="position: relative; left: 35px; color: brown">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						

					}
				}

		}



	} 


	// ---------------------------------------------------------------------------------------------------

	if (isset($_REQUEST['envoi_demande'])) {

		

		require('MesFonctions.php');

		// if(isset($_SESSION['Id_utilisateur'])) {
		// 	// Récupère l'ID de l'utilisateur depuis la session
		// 	$Id_utilisateur = $_SESSION['Id_utilisateur'];
		
		// 	echo $Id_utilisateur;
		// 	// Utilisez $id_utilisateur comme vous le souhaitez
		// 	// Par exemple, pour l'afficher :
		// 	// echo "L'ID de l'utilisateur est : " . $id_utilisateur;
		// } else {
		// 	// Si l'ID de l'utilisateur n'est pas défini dans la session
		// 	echo "ID utilisateur non trouvé dans la session.";
		// }


		if (isset($_REQUEST['Id_demande'])) {
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
		}
		if (isset($_REQUEST['Id_etablissement'])) {
			$Id_etablissement = htmlspecialchars($_REQUEST['Id_etablissement']);
		}
		if (isset($_REQUEST['Id_utilisateur'])) {
			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
		}

		$NomD = $_REQUEST['NomD'];
		$PrenomD = $_REQUEST['PrenomD'];
		$dateN = htmlspecialchars($_REQUEST['dateN']);
		$Lieu = htmlspecialchars($_REQUEST['Lieu']);
		$AdresseD = htmlspecialchars($_REQUEST['AdresseD']);
		$TelephoneD = htmlspecialchars($_REQUEST['TelephoneD']);
		$EmailD = htmlspecialchars($_REQUEST['EmailD']);
		$selectDecision = htmlspecialchars($_REQUEST['selectDecision']);
		$selectEtablissement = htmlspecialchars($_REQUEST['selectEtablissement']);
		$Niveau = htmlspecialchars($_REQUEST['Niveau']);
		$Domaine = htmlspecialchars($_REQUEST['Domaine']);
           

		$verification = 'true';

		if (empty($NomD)) {
			$nomD1 = '* : renseignez un nom!';
			$verification = 'false';
		} else if (strlen($NomD) < 2) {
			$nomD1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($NomD) == 'false') {
			$nomD1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$nomD1 = '';
		} 

		if (empty($PrenomD)) {
			$prenomD1 = '* : renseignez un prénom!';
			$verification = 'false';
		} else if (strlen($PrenomD) < 2) {
			$prenomD1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($PrenomD) == 'false') {
			$prenomD1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$prenomD1 = '';
		} 

		if (empty($dateN)) {
			$dateN1 = '* : renseignez une date!';
			$verification = 'false';
		} else if (!isValidDate($dateN)) {
			$dateN1 = '* : renseignez une date valide!';
			$dateN = date('Y-m-d');
			$verification = 'false';
		} else {
			$dateN1 = '';
		}

		if (empty($Lieu)) {
			$lieu1 = '* : renseignez un lieu!';
			$verification = 'false';
		} else if (strlen($Lieu) < 2) {
			$lieu1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($Lieu) == 'false') {
			$lieu1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$lieu1 = '';
		} 

		if (empty($AdresseD)) {
			$AdresseD1 = '* : renseignez une adresse!';
			$verification = 'false';
		} else if (strlen($AdresseD) < 2) {
			$AdresseD1 = '* : entrez au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($AdresseD) == 'false') {
			$AdresseD1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$AdresseD1 = '';
		} 

		if (empty($TelephoneD)) {
			$TelephoneD1 = '* : renseignez un numéro!';
			$verification = 'false';
		} else if (isnan($TelephoneD) == 'false') {
			$TelephoneD1 = '* : renseignez des chiffres!';
			$verification = 'false';
		} else {
			$TelephoneD1 = '';
		}

		if (empty($EmailD)) {
			$EmailD1 = '* : renseignez une adresse mail!';
			$verification = 'false';
		} else if (!filter_var($EmailD, FILTER_VALIDATE_EMAIL)) {
			$EmailD1 = '* : renseignez une adresse mail valide!';
			$verification = 'false';
		} else {
			$EmailD1 = '';
		} 

		if (empty($selectDecision)) {
			$selectDecision1 = '* : Accepter ou Attente!';
			$verification = 'false';
		} else if ($selectDecision != 'Accepter' && $selectDecision != 'Attente' && $selectDecision != 'Rejeter') {
			$selectDecision1 = '* : Accepter ou Attente ou Rejeter!';
			$verification = 'false';
		} else {
			$selectDecision1 = '';
		}

		if (empty($selectEtablissement) || $selectEtablissement == '--Choix Etablissement--') {
			$selectEtablissement1 = '* : Choisissez un établissement!';
			$verification = 'false';
		} else {
			$selectEtablissement1 = '';
		}

		

		if (empty($Niveau)) {
			$Niveau1 = '* : renseignez un niveau!';
			$verification = 'false';
		} else if (strlen($Niveau) < 2) {
			$Niveau1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($Niveau) == 'false') {
			$Niveau1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Niveau1 = '';
		}

		if (empty($Domaine)) {
			$Domaine1 = '* : renseignez un domaine!';
			$verification = 'false';
		} else if (strlen($Domaine) < 2) {
			$Domaine1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($Domaine) == 'false') {
			$Domaine1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Domaine1 = '';
		}


		

		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_admin_form1_2.php?NomD=<?=$NomD;?>&PrenomD=<?=$PrenomD;?>&dateN=<?=$dateN;?>&Lieu=<?=$Lieu;?>&AdresseD=<?=$AdresseD;?>&TelephoneD=<?=$TelephoneD;?>&EmailD=<?=$EmailD;?>&selectDecision=<?=$selectDecision;?>&selectEtablissement=<?=$selectEtablissement;?>&Niveau=<?=$Niveau;?>&Domaine=<?=$Domaine;?>&select=4&nomD1=<?=$nomD1;?>&prenomD1=<?=$prenomD1;?>&dateN1=<?=$dateN1;?>&lieu1=<?=$lieu1;?>&AdresseD1=<?=$AdresseD1;?>&TelephoneD1=<?=$TelephoneD1;?>&EmailD1=<?=$EmailD1;?>&selectDecision1=<?=$selectDecision1;?>&selectEtablissement1=<?=$selectEtablissement1;?>&Niveau1=<?=$Niveau1;?>&Domaine1=<?=$Domaine1;?>&Id_demande=<?=$Id_demande;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
			
		} else { 

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
			$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Id_demande = ?');
			$recupDemande->execute(array($Id_demande));

			
			

			if ($recupDemande->rowCount() > 0 && isset($Id_etablissement)) {

				$recupEtablissement = $bdd->prepare('SELECT Id_etablissement FROM etablissement WHERE Nom = ?');
				$recupEtablissement->execute(array($selectEtablissement));
				$Id_etablissement = $recupEtablissement->fetch()['Id_etablissement'];

				
				
				// $UpdateEtablissement = $bdd->prepare('UPDATE demande SET Id_etablissement = ?, Niveau = ?, Domaine = ?, Nom_demandeur = ?, Prenom_demandeur = ?, Adresse = ?, Date_naissance = ?, Lieu_naissance = ?, Telephone = ?, Email, Decision = ? WHERE Id_demande = ?');
				// $UpdateEtablissement->execute(array($Id_etablissement, $Niveau, $Domaine, $NomD, $PrenomD, $AdresseD, $dateN, $Lieu, $TelephoneD, $EmailD, $selectDecision, $Id_demande));

				$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Id_demande = ?');
				$recupDemande->execute(array($Id_demande));

				if ($selectDecision == 'Accepter' && $recupDemande->rowCount() > 0) {

					$insertStage = $bdd->prepare('INSERT INTO stage (Id_demande, Id_utilisateur, Niveau_stage) VALUES (?,?,?)');
					$insertStage->execute(array($Id_demande, $Id_utilisateur, $Niveau));

				} else if ($selectDecision == 'Attente' && $recupDemande->rowCount() > 0) {

					$DeleteStage = $bdd->prepare('DELETE FROM stage WHERE Id_demande = ?');
					$DeleteStage->execute(array($Id_demande));
				}

				if ($recupDemande->rowCount() > 0) {
						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-success">
											<h1 class="py-3 text-center">Confirmation :</h1>
											<h4 style="text-align: center;">La demande va être modifiée!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Id_etablissement=<?=$Id_etablissement;?>&Niveau=<?=$Niveau;?>&Domaine=<?=$Domaine;?>&Nom_demandeur=<?=$NomD;?>&Prenom_demandeur=<?=$PrenomD;?>&Adresse=<?=$AdresseD;?>&Date_naissance=<?=$dateN;?>&Lieu_naissance=<?=$Lieu;?>&Telephone=<?=$TelephoneD;?>&Email=<?=$EmailD;?>&Decision=<?=$selectDecision;?>&Id_demande=<?=$Id_demande;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=4" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
										<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php?NomD=<?=$NomD;?>&PrenomD=<?=$PrenomD;?>&dateN=<?=$dateN;?>&Lieu=<?=$Lieu;?>&AdresseD=<?=$AdresseD;?>&TelephoneD=<?=$TelephoneD;?>&EmailD=<?=$EmailD;?>&selectDecision=<?=$selectDecision;?>&selectEtablissement=<?=$selectEtablissement;?>&Niveau=<?=$Niveau;?>&Domaine=<?=$Domaine;?>&select=4&Id_demande=<?=$Id_demande;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					}

			} else {

				$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
				$recupEtablissement = $bdd->prepare('SELECT Id_etablissement FROM etablissement WHERE Nom = ?');
				$recupEtablissement->execute(array($selectEtablissement));
				$Id_etablissement = $recupEtablissement->fetch()['Id_etablissement'];

				if (!$recupDemande->rowCount() > 0 && $recupEtablissement->rowCount() > 0) {

					// $Id_utilisateur = intval($Id_utilisateur);

					$insertDemande = $bdd->prepare('INSERT INTO demande (Id_etablissement, Id_utilisateur, Niveau, Domaine, Nom_demandeur, Prenom_demandeur, Adresse, Date_naissance, Lieu_naissance, Telephone, Email, Decision) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
					$insertDemande->execute(array($Id_etablissement, $Id_utilisateur, $Niveau, $Domaine, $NomD, $PrenomD, $AdresseD, $dateN, $Lieu, $TelephoneD, $EmailD, $selectDecision));

					$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Id_etablissement = ? AND Id_utilisateur = ? AND Niveau = ? AND Domaine = ? AND Nom_demandeur = ? AND Prenom_demandeur = ? AND Adresse = ? AND Date_naissance = ? AND Lieu_naissance = ? AND Telephone = ? AND Email = ? AND Decision = ?');
					$recupDemande->execute(array($Id_etablissement, $Id_utilisateur, $Niveau, $Domaine, $NomD, $PrenomD, $AdresseD, $dateN, $Lieu, $TelephoneD, $EmailD, $selectDecision));

					$Id_demande = $recupDemande->fetch()['Id_demande'];

					if ($selectDecision == 'Accepter' && $recupDemande->rowCount() > 0) {

						$insertStage = $bdd->prepare('INSERT INTO stage (Id_demande, Id_utilisateur, Niveau_stage) VALUES (?,?,?)');
						$insertStage->execute(array($Id_demande, $Id_utilisateur, $Niveau));

					} else if ($selectDecision == 'Attente' && $recupDemande->rowCount() > 0) {

						$DeleteStage = $bdd->prepare('DELETE FROM stage WHERE Id_demande = ?');
						$DeleteStage->execute(array($Id_demande));
					}


					if ($recupDemande->rowCount() > 0) {
						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<script src="bootstrap/js/bootstrap_min.js"></script>
						<script src="bootstrap/js/jquery.js"></script>
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-success">
										<h1 class="py-3 text-center">Succès!</h1>
										<h4 style="text-align: center;">La demande a été ajoutée!<a href="deconnexion_admin_form1_2.php?select=4" style="position: relative; left: 45px; color: green">X</a></h4>
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
										<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php?NomD=<?=$NomD;?>&PrenomD=<?=$PrenomD;?>&dateN=<?=$dateN;?>&Lieu=<?=$Lieu;?>&AdresseD=<?=$AdresseD;?>&TelephoneD=<?=$TelephoneD;?>&EmailD=<?=$EmailD;?>&selectDecision=<?=$selectDecision;?>&selectEtablissement=<?=$selectEtablissement;?>&Niveau=<?=$Niveau;?>&Domaine=<?=$Domaine;?>&select=4&Id_demande=<?=$Id_demande;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					
				} else { ?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur !</h1>
									<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php?NomD=<?=$NomD;?>&PrenomD=<?=$PrenomD;?>&dateN=<?=$dateN;?>&Lieu=<?=$Lieu;?>&AdresseD=<?=$AdresseD;?>&TelephoneD=<?=$TelephoneD;?>&EmailD=<?=$EmailD;?>&selectDecision=<?=$selectDecision;?>&selectEtablissement=<?=$selectEtablissement;?>&Niveau=<?=$Niveau;?>&Domaine=<?=$Domaine;?>&select=4&Id_demande=<?=$Id_demande;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}

			


		}



	}

	// ------------------------------------------------------------------------------------------------

	if (isset($_REQUEST['envoi_etablissement'])) {

		

		require('MesFonctions.php');

		if (isset($_REQUEST['Id_etablissement'])) {
			$Id_etablissement = htmlspecialchars($_REQUEST['Id_etablissement']);
		}

		$NomE = htmlspecialchars($_REQUEST['NomE']);
		$BP = htmlspecialchars($_REQUEST['BP']);
		$selectPays = $_REQUEST['selectPays'];
		$villeE = $_REQUEST['villeE'];
		$AdresseE = htmlspecialchars($_REQUEST['AdresseE']);
		$TelephoneE = htmlspecialchars($_REQUEST['TelephoneE']);
		$EmailE = htmlspecialchars($_REQUEST['EmailE']);

		
           

		$verification = 'true';

		

		if (empty($NomE)) {
			$nomE1 = '* : renseignez un établissement!';
			$verification = 'false';
		} else if (strlen($NomE) < 2) {
			$nomE1 = '* : uniquement et au moin deux (2) lettres!';
			$verification = 'false';
		} else if (loginValid($NomE) == 'false') {
			$nomE1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$nomE1 = '';
		} 

		if (empty($BP)) {
			$BP1 = '* : renseignez une adresse!';
			$verification = 'false';
		} else if (strlen($BP) < 2) {
			$BP1 = '* : entrez au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($BP) == 'false') {
			$BP1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$BP1 = '';
		}

		if (empty($selectPays)) {
			$selectPays = 'Senegal';
		} 

		if (empty($villeE)) {
			$villeE1 = '* : renseignez une ville!';
			$verification = 'false';
		} else if (strlen($villeE) < 2) {
			$villeE1 = '* : entrez au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($villeE) == 'false') {
			$villeE1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$villeE1 = '';
		} 

		if (empty($AdresseE)) {
			$AdresseE1 = '* : renseignez une adresse!';
			$verification = 'false';
		} else if (strlen($AdresseE) < 2) {
			$AdresseE1 = '* : entrez au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($AdresseE) == 'false') {
			$AdresseE1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$AdresseE1 = '';
		} 

		if (empty($TelephoneE)) {
			$TelephoneE1 = '* : renseignez un numéro!';
			$verification = 'false';
		} else if (isnan($TelephoneE) == 'false') {
			$TelephoneE1 = '* : renseignez des chiffres!';
			$verification = 'false';
		} else {
			$TelephoneE1 = '';
		}

		if (empty($EmailE)) {
			$EmailE1 = '* : renseignez une adresse mail!';
			$verification = 'false';
		} else if (!filter_var($EmailE, FILTER_VALIDATE_EMAIL)) {
			$EmailE1 = '* : renseignez une adresse mail valide!';
			$verification = 'false';
		} else {
			$EmailE1 = '';
		}




		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_admin_form1_2.php?NomE=<?=$NomE;?>&BP=<?=$BP;?>&villeE=<?=$villeE;?>&AdresseE=<?=$AdresseE;?>&TelephoneE=<?=$TelephoneE;?>&EmailE=<?=$EmailE;?>&select=6&nomE1=<?=$nomE1;?>&BP1=<?=$BP1;?>&villeE1=<?=$villeE1;?>&AdresseE1=<?=$AdresseE1;?>&TelephoneE1=<?=$TelephoneE1;?>&EmailE1=<?=$EmailE1;?>&Id_etablissement=<?=$Id_etablissement;?>&selectPays=<?=$selectPays;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
			require('MesFormulaires.php');
			deconnexion_admin_form1_2();

		} else { 

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$recupEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Id_etablissement = ?');
			$recupEtablissement->execute(array($Id_etablissement??-1));

			if ($recupEtablissement->rowCount() > 0) {



					$recupEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Id_etablissement = ?');
					$recupEtablissement->execute(array($Id_etablissement));

					if ($recupEtablissement->rowCount() > 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-success">
										<h1 class="py-3 text-center">Confirmation :</h1>
										<h4 style="text-align: center;">Les informations de l'établissement vont être modifiées!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Nom=<?=$NomE;?>&Telephone=<?=$TelephoneE;?>&Email=<?=$EmailE;?>&Adresse=<?=$AdresseE;?>&BP=<?=$BP;?>&Ville=<?=$villeE;?>&Pays=<?=$selectPays;?>&Id_etablissement=<?=$Id_etablissement;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=6" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
										<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=6" style="position: relative; left: 45px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
			


			} else {

	

				$recupEtablissement = $bdd->prepare('SELECT Nom FROM etablissement WHERE Nom = ?');
				$recupEtablissement->execute(array($NomE));
			
				if ($recupEtablissement->rowCount() > 0) {


					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Ce nom d'établissement existe déjà!<a href="deconnexion_admin_form1_2.php?NomE=<?=$NomE;?>&BP=<?=$BP;?>&villeE=<?=$villeE;?>&AdresseE=<?=$AdresseE;?>&TelephoneE=<?=$TelephoneE;?>&EmailE=<?=$EmailE;?>&select=6&nomE1=<?=$nomE1;?>&BP1=<?=$BP1;?>&villeE1=<?=$villeE1;?>&AdresseE1=<?=$AdresseE1;?>&TelephoneE1=<?=$TelephoneE1;?>&EmailE1=<?=$EmailE1;?>&Id_etablissement=<?=$Id_etablissement;?>&selectPays=<?=$selectPays;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				} else {
			

						$insertEtablissement = $bdd->prepare('INSERT INTO etablissement (Nom, Telephone, Email, Adresse, BP, Ville, Pays) VALUES (?,?,?,?,?,?,?)');
						$insertEtablissement->execute(array($NomE, $TelephoneE, $EmailE, $AdresseE, $BP, $villeE, $selectPays));

						$recupEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Nom = ? AND Telephone = ?');
						$recupEtablissement->execute(array($NomE, $TelephoneE));

						if ($recupEtablissement->rowCount() > 0) {


							?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-success">
											<h1 class="py-3 text-center">Succès!</h1>
											<h4 style="text-align: center;">L'établissement à bien été enregistrées !<a href="deconnexion_admin_form1_2.php?select=6" style="position: relative; left: 45px; color: green">X</a></h4>
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
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					

				}
			}
				

		}



	}

// ----------------------------------------------------------------------------------------------------

	if (isset($_REQUEST['envoi_stage'])) {

		

		require('MesFonctions.php');

		if (isset($_REQUEST['Id_stage'])) {
			$Id_stage = htmlspecialchars($_REQUEST['Id_stage']);
		}
		if (isset($_REQUEST['Id_personnel'])) {
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
		}
		if (isset($_REQUEST['Id_demande'])) {
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
		}
		if (isset($_REQUEST['Id_utilisateur'])) {
			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
		}

		$Stage = htmlspecialchars($_REQUEST['Stage']);
		$Sujet = htmlspecialchars($_REQUEST['Sujet']);
		$selectNiveau = $_REQUEST['selectNiveau'];
		$selectEncadrant = $_REQUEST['selectEncadrant'];


		
		if (isset($_REQUEST['selectStagiaire'])) {
	
			$selectStagiaire = htmlspecialchars($_REQUEST['selectStagiaire']);

		}

      

		$verification = 'true';

		

		if (empty($Stage)) {
			$Stage1 = '* : renseignez un nom de stage!';
			$verification = 'false';
		} else if (strlen($Stage) < 2) {
			$Stage1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Stage) == 'false') {
			$Stage1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Stage1 = '';
		} 

		if (empty($Sujet)) {
			$Sujet1 = '* : renseignez un sujet!';
			$verification = 'false';
		} else if (strlen($Sujet) < 2) {
			$Sujet1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Sujet) == 'false') {
			$Sujet1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Sujet1 = '';
		} 


		if (empty($selectNiveau)) {
			$selectNiveau = 'BAC';
		}

		// if (empty($selectEncadrant) || $selectEncadrant == '------------Choix Encadrant------------') {
		// 	$verification == 'false';
		// } else if ($selectEncadrant == '------------Choix Encadrant------------') { 
		// 	$verification == 'false';
		// }

		if (empty($selectStagiaire)) {
			$verification == 'false';
		}

		if (($selectEncadrant == '------------Choix Encadrant------------') || empty($selectEncadrant)) {

		 	?>

			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Choisissez un encadrant!<a href="deconnexion_admin_form1_2.php?select=51&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&selectNiveau=<?=$selectNiveau;?>&selectEncadrant=<?=$selectEncadrant;?>&Stage1=<?=$Stage1;?>&Sujet1=<?=$Sujet1;?>&Id_demande=<?=$selectStagiaire;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php


		} else if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_admin_form1_2.php?select=51&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&selectNiveau=<?=$selectNiveau;?>&selectEncadrant=<?=$selectEncadrant;?>&Stage1=<?=$Stage1;?>&Sujet1=<?=$Sujet1;?>&Id_demande=<?=$selectStagiaire;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php

		} else { 

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ?');
			$recupStage->execute(array($Id_stage??-1));

			if ($recupStage->rowCount() > 0) {

					$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ?');
					$recupStage->execute(array($Id_stage));

					if ($recupStage->rowCount() > 0) {

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-success">
										<h1 class="py-3 text-center">Confirmation :</h1>
										<h4 style="text-align: center;">Les informations du stage vont être modifiées!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Id_demande=<?=$selectStagiaire;?>&Id_personnel=<?=$selectEncadrant;?>&Nom_stage=<?=$Stage;?>&Niveau_stage=<?=$selectNiveau;?>&Sujet_stage=<?=$Sujet;?>&Id_stage=<?=$Id_stage;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=51" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
										<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=51" style="position: relative; left: 45px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
			


			} else {

	

				$recupStage = $bdd->prepare('SELECT Nom_stage FROM stage WHERE Nom_stage = ?');
				$recupStage->execute(array($Stage));
			
				if ($recupStage->rowCount() > 0) {


					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Ce stage existe déjà!<a href="deconnexion_admin_form1_2.php?select=51&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&selectNiveau=<?=$selectNiveau;?>&selectEncadrant=<?=$selectEncadrant;?>&Stage1=<?=$Stage1;?>&Sujet1=<?=$Sujet1;?>&Id_demande=<?=$selectStagiaire;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				} else {
			

						$insertStage = $bdd->prepare('INSERT INTO stage (Id_demande, Id_utilisateur, Id_personnel, Nom_stage, Niveau_stage, Sujet_stage) VALUES (?,?,?,?,?,?)');
						$insertStage->execute(array($selectStagiaire, $Id_utilisateur, $selectEncadrant, $Stage, $selectNiveau, $Sujet));

						$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_demande = ? AND Id_personnel = ?');
						$recupStage->execute(array($selectStagiaire, $selectEncadrant));

						$UpdateDemande = $bdd->prepare('UPDATE demande SET Decision = "Accepter" WHERE Id_demande = ?');
						$UpdateDemande->execute(array($selectStagiaire));
				

						if ($recupStage->rowCount() > 0) {

							?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-success">
											<h1 class="py-3 text-center">Succès!</h1>
											<h4 style="text-align: center;">Le stagiaire à bien été ajouté !<a href="deconnexion_admin_form1_2.php?select=51" style="position: relative; left: 45px; color: green">X</a></h4>
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
											<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_admin_form1_2.php" style="position: relative; left: 35px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					

				}
			}
				

		}



	}

	// ----------------------------------------------------------------------------------------------------

	if (isset($_POST['envoi_stage1'])) {

		
		

		require('MesFonctions.php');

		if (isset($_REQUEST['Id_stage'])) {
			$Id_stage = htmlspecialchars($_REQUEST['Id_stage']);
		}
		if (isset($_REQUEST['Id_personnel'])) {
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
		}
		if (isset($_REQUEST['Id_demande'])) {
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
		}
		if (isset($_REQUEST['Id_utilisateur'])) {
			$Id_utilisateur = htmlspecialchars($_REQUEST['Id_utilisateur']);
		}

		$Demandeur = htmlspecialchars($_REQUEST['Demandeur']);
		$Stage = htmlspecialchars($_REQUEST['Stage']);
		$Sujet = htmlspecialchars($_REQUEST['Sujet']);
		$Date_debut = htmlspecialchars($_REQUEST['Date_debut']);
		$Date_fin = htmlspecialchars($_REQUEST['Date_fin']);

		$Duree = '';

		if (isset($Date_debut) && isset($Date_fin) ) {
				
			$differenceFormat = '%m Mois et %d Jour(s)';
	
		    $datetime1 = date_create($Date_debut);
		    $datetime2 = date_create($Date_fin);
		   
		    $interval = date_diff($datetime1, $datetime2);
		   
		    $Duree = $interval->format($differenceFormat);	
		}


		$Rapport = htmlspecialchars($_REQUEST['Rapport']);
		$Appreciations = htmlspecialchars($_REQUEST['Appreciations']);
		$Observation = htmlspecialchars($_REQUEST['Observation']);
		$Travail = htmlspecialchars($_REQUEST['Travail']);
		$Evaluation = htmlspecialchars($_REQUEST['Evaluation']);
		$Sociabilité = htmlspecialchars($_REQUEST['Sociabilité']);
		$selectSatisfait = htmlspecialchars($_REQUEST['selectSatisfait']);
		$selectFormation = htmlspecialchars($_REQUEST['selectFormation']);
		$selectNote = htmlspecialchars($_REQUEST['selectNote']);

		

		$verification = 'true';

		if (empty($selectSatisfait)) {
			$verification = 'false';
		}

		if (empty($selectFormation)) {
			$verification = 'false';
		}	

		if (empty($selectNote)) {
			$verification = 'false';
		}	

		if (empty($Stage)) {
			$Stage1 = '* : renseignez un nom de stage!';
			$verification = 'false';
		} else if (strlen($Stage) < 2) {
			$Stage1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Stage) == 'false') {
			$Stage1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Stage1 = '';
		} 

		if (empty($Sujet)) {
			$Sujet1 = '* : renseignez un sujet!';
			$verification = 'false';
		} else if (strlen($Sujet) < 2) {
			$Sujet1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Sujet) == 'false') {
			$Sujet1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Sujet1 = '';
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

		if (empty($Rapport)) {
			$Rapport1 = '* : renseignez un rapport!';
			$verification = 'false';
		} else if (strlen($Rapport) < 2) {
			$Rapport1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Rapport) == 'false') {
			$Rapport1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Rapport1 = '';
		} 

		if (empty($Appreciations)) {
			$Appreciation1 = '* : renseignez une appréciation!';
			$verification = 'false';
		} else if (strlen($Appreciations) < 2) {
			$Appreciation1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Appreciations) == 'false') {
			$Appreciation1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Appreciation1 = '';
		} 

		if (empty($Observation)) {
			$Observation1 = '* : renseignez une observation!';
			$verification = 'false';
		} else if (strlen($Observation) < 2) {
			$Observation1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Observation) == 'false') {
			$Observation1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Observation1 = '';
		} 

		if (empty($Travail)) {
			$Travail1 = '* : renseignez le travail effectué!';
			$verification = 'false';
		} else if (strlen($Travail) < 2) {
			$Travail1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Travail) == 'false') {
			$Travail1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Travail1 = '';
		}

		if (empty($Evaluation)) {
			$Evaluation1 = '* : renseignez une évaluation!';
			$verification = 'false';
		} else if (strlen($Evaluation) < 2) {
			$Evaluation1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Evaluation) == 'false') {
			$Evaluation1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Evaluation1 = '';
		} 

		if (empty($Sociabilité)) {
			$Sociabilité1 = '* : renseignez la sociabilité!';
			$verification = 'false';
		} else if (strlen($Sociabilité) < 2) {
			$Sociabilité1 = '* : uniquement et au moin deux (2) caractères!';
			$verification = 'false';
		} else if (titreValid($Sociabilité) == 'false') {
			$Sociabilité1 = '* : sans caractères spéciaux!';
			$verification = 'false';
		} else {
			$Sociabilité1 = '';
		} 



		if ($verification == 'false') { ?>
		
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1> 
							<h4 style="text-align: center;">Veillez renseignez conformément les champs (obligatoire)* !<a href="deconnexion_form1_4_1.php?Id_stage=<?=$Id_stage;?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&selectNote=<?=$selectNote;?>&Rapport=<?=$Rapport;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>&Stage1=<?=$Stage1;?>&Sujet1=<?=$Sujet1;?>&Date_debut1=<?=$Date_debut1;?>&Date_fin1=<?=$Date_fin1;?>&Rapport1=<?=$Rapport1;?>&Appreciation1=<?=$Appreciation1;?>&Observation1=<?=$Observation1;?>&Travail1=<?=$Travail1;?>&Evaluation1=<?=$Evaluation1;?>&Sociabilité1=<?=$Sociabilité1;?>&Demandeur=<?=$Demandeur;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
			

		} else { 

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ? AND Id_personnel = ? AND Id_demande = ?');
			$recupStage->execute(array($Id_stage, $Id_personnel, $Id_demande));

			if (!$recupStage->rowCount() > 0) {

				 	?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur !</h1>
									<h4 style="text-align: center;">Choisissez un stagiaire!<a href="deconnexion_form1_4.php" style="position: relative; left: 35px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
	
			} else {

				$Convention_nom = "$Id_stage$Id_demande$Id_personnel-";
				$Convention_nom .= $_FILES['Convention']['name'];
				$Destination = 'Telechargements/'.$Convention_nom;
				$extension = pathinfo($Convention_nom, PATHINFO_EXTENSION);
				$Convention = $_FILES['Convention']['tmp_name'];

				if (isset($Convention) && $_FILES['Convention']['size'] > 1000000) {
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur !</h1> 
									<h4 style="text-align: center;">La convention est trop lourd !<a href="deconnexion_form1_4_1.php?Id_stage=<?=$Id_stage;?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&selectNote=<?=$selectNote;?>&Rapport=<?=$Rapport;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>&Stage1=<?=$Stage1;?>&Sujet1=<?=$Sujet1;?>&Date_debut1=<?=$Date_debut1;?>&Date_fin1=<?=$Date_fin1;?>&Rapport1=<?=$Rapport1;?>&Appreciation1=<?=$Appreciation1;?>&Observation1=<?=$Observation1;?>&Travail1=<?=$Travail1;?>&Evaluation1=<?=$Evaluation1;?>&Sociabilité1=<?=$Sociabilité1;?>&Demandeur=<?=$Demandeur;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				} else if ($_FILES['Convention']['size'] < 1000000 && is_uploaded_file($_FILES['Convention']['tmp_name'])) {
				
					array_map('unlink', glob("Telechargements/$Id_stage$Id_personnel$Id_demande-*"));

					if (move_uploaded_file($Convention, $Destination)) {
					

						$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ? AND Id_personnel = ? AND Id_demande = ?');
						$recupStage->execute(array($Id_stage, $Id_personnel, $Id_demande));

						if ($recupStage->rowCount() > 0) {

							?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-success">
											<h1 class="py-3 text-center">Confirmation :</h1>
											<h4 style="text-align: center;">La clôture va être effectuée!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>&Duree=<?=$Duree;?>&selectNote=<?=$selectNote;?>&Convention_nom=<?=$Convention_nom;?>&Id_stage=<?=$Id_stage;?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_form1_4_1.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
											<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_4_1.php?Id_stage=<?=$Id_stage;?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&selectNote=<?=$selectNote;?>&Rapport=<?=$Rapport;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>&Stage1=<?=$Stage1;?>&Sujet1=<?=$Sujet1;?>&Date_debut1=<?=$Date_debut1;?>&Date_fin1=<?=$Date_fin1;?>&Rapport1=<?=$Rapport1;?>&Appreciation1=<?=$Appreciation1;?>&Observation1=<?=$Observation1;?>&Travail1=<?=$Travail1;?>&Evaluation1=<?=$Evaluation1;?>&Sociabilité1=<?=$Sociabilité1;?>&Demandeur=<?=$Demandeur;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}

				} else {


						$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ? AND Id_personnel = ? AND Id_demande = ?');
						$recupStage->execute(array($Id_stage, $Id_personnel, $Id_demande));
						$code4 = 2;

						if ($recupStage->rowCount() > 0) {

							?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-success">
											<h1 class="py-3 text-center">Confirmation :</h1>
											<h4 style="text-align: center;">La clôture va être effectuée!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&Rapport=<?=$Rapport;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>&Duree=<?=$Duree;?>&selectNote=<?=$selectNote;?>&Id_stage=<?=$Id_stage;?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>&code4=<?=$code4;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_form1_4_1.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
											<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_4_1.php?Id_stage=<?=$Id_stage;?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>&Stage=<?=$Stage;?>&Sujet=<?=$Sujet;?>&Date_debut=<?=$Date_debut;?>&Date_fin=<?=$Date_fin;?>&selectNote=<?=$selectNote;?>&Rapport=<?=$Rapport;?>&Appreciations=<?=$Appreciations;?>&Observation=<?=$Observation;?>&Travail=<?=$Travail;?>&Evaluation=<?=$Evaluation;?>&Sociabilité=<?=$Sociabilité;?>&selectSatisfait=<?=$selectSatisfait;?>&selectFormation=<?=$selectFormation;?>&Stage1=<?=$Stage1;?>&Sujet1=<?=$Sujet1;?>&Date_debut1=<?=$Date_debut1;?>&Date_fin1=<?=$Date_fin1;?>&Rapport1=<?=$Rapport1;?>&Appreciation1=<?=$Appreciation1;?>&Observation1=<?=$Observation1;?>&Travail1=<?=$Travail1;?>&Evaluation1=<?=$Evaluation1;?>&Sociabilité1=<?=$Sociabilité1;?>&Demandeur=<?=$Demandeur;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<?php
						}

				}


				

			}
				
		}
	}



?>
	
