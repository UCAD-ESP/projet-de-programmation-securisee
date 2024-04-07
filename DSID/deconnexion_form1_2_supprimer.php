<?php

		if (isset($_REQUEST['Id_planning']) && isset($_REQUEST['Matricule_personnel'])) {

			$Id_planning = htmlspecialchars($_REQUEST['Id_planning']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			
		


			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

	

			$recupDate = $bdd->prepare('SELECT * FROM planning WHERE Id_planning = ? AND Matricule_personnel = ?');
			$recupDate->execute(array($Id_planning, $Matricule_personnel));

			if ($recupDate->rowCount() > 0) {

					
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Confirmation :</h1>
									<h4 style="text-align: center;">Vos informations vont être supprimées!<br><br>Cliquez ici pour Confirmer<a href="Suppression.php?Id_planning=<?=$Id_planning;?>&Matricule_personnel=<?=$Matricule_personnel;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_form1_2.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
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
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2.php?Login=<?=$Login;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}


		} 

		

		


?>