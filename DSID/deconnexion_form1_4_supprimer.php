<?php

		if (isset($_REQUEST['Demandeur']) && isset($_REQUEST['Id_stage']) && isset($_REQUEST['Id_demande']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Stage']) && isset($_REQUEST['Sujet']) && isset($_REQUEST['Date_debut']) && isset($_REQUEST['Date_fin']) && isset($_REQUEST['Rapport']) && isset($_REQUEST['selectNote']) && isset($_REQUEST['Appreciations']) && isset($_REQUEST['Observation']) && isset($_REQUEST['Travail']) && isset($_REQUEST['Evaluation']) && isset($_REQUEST['Sociabilité']) && isset($_REQUEST['selectSatisfait']) && isset($_REQUEST['selectFormation'])) {


			$Id_stage = $_REQUEST['Id_stage'];
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$code5 = 4;
			



			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');



			$recupStage = $bdd->prepare('SELECT * FROM stage WHERE Id_stage = ? AND Id_demande = ? AND Id_personnel = ?');
			$recupStage->execute(array($Id_stage, $Id_demande, $Id_personnel));

			if ($recupStage->rowCount() > 0) {
				
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Le stagiaire se sera supprimé!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_stage=<?=$Id_stage;?>&Id_personnel=<?=$Id_personnel;?>&Id_demande=<?=$Id_demande;?>&code5=<?=$code5;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_form1_4_1.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_4_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}



		} else {
			header('Location: deconnexion_form1_4.php');
		}



?>