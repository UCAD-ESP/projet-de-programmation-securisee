<?php


	if (isset($_REQUEST['envoi'])) {

		require('MesFonctions.php');

		$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");

		if (!$conn) { 
			header('Location: deconnexion.php');
		}

		$req = "SELECT * FROM administrateur";
		$result = mysqli_query($conn, $req);
		

		while($row=mysqli_fetch_assoc($result))
		{
			$Login_defaut = $row['Login'];
			$Id_administrateur = $row['Id_administrateur'];

		}
		mysqli_close($conn);
		
		$Login = htmlspecialchars($_REQUEST['Login']);
		$Mot_de_passe = htmlspecialchars($_REQUEST['Mot_de_passe']);
		$Mot_de_passe1 = htmlspecialchars($_REQUEST['Mot_de_passe1']);


		$verification = 'true';


		if (empty($_REQUEST['Login'])) {
			$Login1 = '* : renseignez un login!';
			$verification = 'false';
		}

		if (titreValid($Login) == 'false') {
			$Login1 = '* : Sans caractères spéciaux!';
			$verification = 'false';
		} 

		if (strlen($Login) <= 3) {
			$Login1 = '* : renseignez au moins 4 caractères!';
			$verification = 'false';
		}

		if (strlen($Mot_de_passe) < 3) {
			$password = '? : renseignez au moins 4 caractères!';
		}

		if (strlen($Mot_de_passe1) < 3) {
			$password1 = '? : renseignez au moins 4 caractères!';
		}



		if ($verification == 'false') {

			?>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez les modifications a effectuer<br> *(obligatoire) ou ?(facultatif)!<a href="deconnexion_admin_form1_6.php?Login1=<?=$Login1??'';?>&password=<?=$password??'';?>&password1=<?=$password1??'';?>" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php

		} else if ($Mot_de_passe != $Mot_de_passe1) {

			?>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Les deux mot de passe doivent se resembler!<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
	

		} else if ($Login == $Login_defaut && empty($Mot_de_passe) && empty($Mot_de_passe1)) {
			
			?>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
				<div class="row py-3 justify-content-center">
					<div class="col-md-7">
						<div class="alert alert-danger">
							<h1 class="py-3 text-center">Erreur !</h1>
							<h4 style="text-align: center;">Veillez renseignez les modifications a effectuer<br> *(obligatoire) ou ?(facultatif)!<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 35px; color: brown">X</a></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
	

	
		} else if ($Login != $Login_defaut) {
			

			

			$code1 = 4;
			$code2 = 4;

			if (empty($Mot_de_passe) && empty($Mot_de_passe1)) {

				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-success">
								<h1 class="py-3 text-center">Confirmation :</h1>
								<h4 style="text-align: center;">Votre login va être modifié!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Login=<?=$Login;?>&code1=<?=$code1;?>&Id_administrateur=<?=$Id_administrateur;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
				
				//header('Location: connexion_form.php');
			} else if (!empty($Mot_de_passe) && !empty($Mot_de_passe1)) {

				$Mot_de_passe = sha1($Mot_de_passe);
				$Mot_de_passe1 = sha1($Mot_de_passe1);

				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-success">
								<h1 class="py-3 text-center">Confirmation :</h1>
								<h4 style="text-align: center;">Votre login et mot de passe vont être modifiés!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Mot_de_passe=<?=$Mot_de_passe;?>&code2=<?=$code2;?>&Id_administrateur=<?=$Id_administrateur;?>&Login=<?=$Login;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
				
				//header('Location: connexion_form.php');
			
			} else { ?>
				
				
				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur !</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 35px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
						
			
			}

		} else  {

			$Mot_de_passe = sha1($Mot_de_passe);
			$Mot_de_passe1 = sha1($Mot_de_passe1);


			$code4 = 4;
			
			if ($Mot_de_passe == $Mot_de_passe1) {


				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-success">
								<h1 class="py-3 text-center">Confirmation :</h1>
								<h4 style="text-align: center;">Votre mot de passe va être modifié!<br><br>Cliquez ici pour Confirmer<a href="Modification.php?Mot_de_passe=<?=$Mot_de_passe;?>&code4=<?=$code4;?>&Id_administrateur=<?=$Id_administrateur;?>" style="position: relative; left: 45px; background-color: green; border: 2px solid green; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Confirmer</a> <br><br>Cliquez ici pour Annler<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 45px; background-color: red; border-radius: 20px;text-decoration: none;color: #d1e7dd; padding: 5px">Annuler</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
				

			} else { ?>
				
				
				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur !</h1>
								<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_admin_form1_6.php" style="position: relative; left: 35px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
						
			
			}
		}		

	}


?>
	














