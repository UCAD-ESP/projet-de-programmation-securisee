<?php

	session_start();

	if (isset($_REQUEST['envoi'])) {



		$Id_utilisateur = $_SESSION['Id_utilisateur'];
		$Matricule = $_SESSION['Matricule_personnel'];
		$Log = $_SESSION['Login'];

		$Login = htmlspecialchars($_REQUEST['Login']);
		$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);


		if (($Login == $Log) && ($Matricule == $Matricule)) {

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$suppression = $bdd->prepare('DELETE FROM utilisateur WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
			$suppression->execute(array($Id_utilisateur, $Matricule_personnel));

			$recupSup = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
			$recupSup->execute(array($Id_utilisateur, $Matricule_personnel));
			
			
			if ($recupSup->rowCount() <= 0) {

						
					?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Votre compte va être supprimé!<br><br>Cliquez ici pour Confirmer<a href="deconnexion.php" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_form1_2_1_2.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_2.php" style="position: relative; left: 45px; color: green">X</a></h4>
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
							<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		

	}


?>
	














