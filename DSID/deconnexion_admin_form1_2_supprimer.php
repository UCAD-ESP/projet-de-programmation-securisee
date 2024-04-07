<?php

		if (isset($_REQUEST['Id_bureau']) && isset($_REQUEST['Code']) && isset($_REQUEST['Nom'])) {

			$Id_bureau = htmlspecialchars($_REQUEST['Id_bureau']);
			$Code = htmlspecialchars($_REQUEST['Code']);
			

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$insertBureau = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau = ? AND Code = ?');
			$insertBureau->execute(array($Id_bureau, $Code));

			if ($insertBureau->rowCount() > 0) {


				$recupBureau = $bdd->prepare('SELECT * FROM bureau WHERE Id_bureau = ? AND Code = ?');
				$recupBureau->execute(array($Id_bureau, $Code));

				if ($recupBureau->rowCount() > 0) {	

					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Ce bureau va être supprimé!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_bureau=<?=$Id_bureau;?>&Code=<?=$Code;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=2" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=2" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}


		} else if (isset($_REQUEST['Id_fonction']) && isset($_REQUEST['Code']) && isset($_REQUEST['Nom'])) {

			$Id_fonction = htmlspecialchars($_REQUEST['Id_fonction']);
			$Code = htmlspecialchars($_REQUEST['Code']);
			

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$insertFonction = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction = ? AND Code = ?');
			$insertFonction->execute(array($Id_fonction, $Code));

			if ($insertFonction->rowCount() > 0) {


				$recupFonction = $bdd->prepare('SELECT * FROM fonction WHERE Id_fonction = ? AND Code = ?');
				$recupFonction->execute(array($Id_fonction, $Code));

				if ($recupFonction->rowCount() > 0) {	

					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Cette fonction va être supprimée!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_fonction=<?=$Id_fonction;?>&Code=<?=$Code;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=3" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=3" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}


		} else if (isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['Date_debut_affectation']) && isset($_REQUEST['Date_fin_affectation']) && isset($_REQUEST['Nom']) && isset($_REQUEST['Prenom']) && isset($_REQUEST['Telephone']) && isset($_REQUEST['Adresse']) && isset($_REQUEST['Email']) && isset($_REQUEST['selectBureau']) && isset($_REQUEST['selectFonction'])) {

			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);


			

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$insertPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Id_personnel = ? AND Matricule_personnel = ?');
			$insertPersonnel->execute(array($Id_personnel, $Matricule_personnel));

			if ($insertPersonnel->rowCount() > 0) {

		
				$recupPersonnel = $bdd->prepare('SELECT * FROM personnel WHERE Id_personnel = ? AND Matricule_personnel = ?');
				$recupPersonnel->execute(array($Id_personnel, $Matricule_personnel));

				if ($recupPersonnel->rowCount() > 0) {	

					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Ce personnel va être supprimé!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_personnel=<?=$Id_personnel;?>&Matricule_personnel=<?=$Matricule_personnel;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=1" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=1" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}


		} else if (isset($_REQUEST['Id_demande']) && isset($_REQUEST['Id_etablissement']) && isset($_REQUEST['Niveau']) && isset($_REQUEST['Domaine']) && isset($_REQUEST['NomD']) && isset($_REQUEST['PrenomD']) && isset($_REQUEST['dateN']) && isset($_REQUEST['Lieu']) && isset($_REQUEST['AdresseD']) && isset($_REQUEST['TelephoneD']) && isset($_REQUEST['EmailD']) && isset($_REQUEST['selectDecision']) && isset($_REQUEST['selectEtablissement']) && isset($_REQUEST['selectEtablissement'])) {

			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$code6 = 2;
			

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');


			$recupDemande = $bdd->prepare('SELECT * FROM demande WHERE Id_demande = ?');
			$recupDemande->execute(array($Id_demande));


			if ($recupDemande->rowCount() > 0) {	

				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-success">
								<h1 class="py-3 text-center">Confirmation :</h1>
								<h4 style="text-align: center;">Cette demande va être supprimée!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_demande=<?=$Id_demande;?>&code6=<?=$code6;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=4" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
								<h1 class="py-3 text-center">Erreur!</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=4" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			


		} else if (isset($_REQUEST['Id_etablissement']) && isset($_REQUEST['NomE']) && isset($_REQUEST['BP']) && isset($_REQUEST['villeE']) && isset($_REQUEST['AdresseE']) && isset($_REQUEST['TelephoneE']) && isset($_REQUEST['EmailE'])) {


			$Id_etablissement = htmlspecialchars($_REQUEST['Id_etablissement']);
		

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$recupDemande = $bdd->prepare('SELECT * FROM etablissement WHERE Id_etablissement = ?');
			$recupDemande->execute(array($Id_etablissement));
			$code6 = 4;

			if ($recupDemande->rowCount() > 0) {

			
				$recpEtablissement = $bdd->prepare('SELECT * FROM etablissement WHERE Id_etablissement = ?');
				$recpEtablissement->execute(array($Id_etablissement));


				if ($recpEtablissement->rowCount() > 0) {	

					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Cet établissement va être supprimé!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_etablissement=<?=$Id_etablissement;?>&code6=<?=$code6;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=6" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=6" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}


		} else if (isset($_REQUEST['Id_stage']) && isset($_REQUEST['Nom_stage']) && isset($_REQUEST['Sujet_stage']) && isset($_REQUEST['Niveau_stage']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Id_demande'])) {

			$Id_stage = htmlspecialchars($_REQUEST['Id_stage']);
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Attente = 'Attente';
		

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ?');
			$recupStage->execute(array($Id_stage));

			$code6 = 5;

			if ($recupStage->rowCount() > 0) {

				$recpStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ?');
				$recpStage->execute(array($Id_stage));


				if ($recpStage->rowCount() > 0) {	

					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Ce stagiaire va être supprimé!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_stage=<?=$Id_stage;?>&code6=<?=$code6;?>&Id_demande=<?=$Id_demande;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_2.php?select=51" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h1 class="py-3 text-center">Erreur!</h1>
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_2.php?select=51" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}

		} else {
			header('Location: deconnexion_admin_form1_2.php');
		}

		

		


?>