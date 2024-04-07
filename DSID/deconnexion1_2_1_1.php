<?php

	session_start();

	if (isset($_REQUEST['envoi'])) {

		require('MesFonctions.php');

		$Id_utilisateur = $_SESSION['Id_utilisateur'];
		$Matricule_personnel = $_SESSION['Matricule_personnel'];
		$Log = $_SESSION['Login'];
		$Login = htmlspecialchars($_REQUEST['Login']);
		$Mot_de_passe = htmlspecialchars($_REQUEST['Mot_de_passe']);
		$Mot_de_passe1 = htmlspecialchars($_REQUEST['Mot_de_passe1']);

		if (($Login != $Log) && empty($Mot_de_passe) && empty($Mot_de_passe1) && (titreValid($Login) != 'false') && (strlen($Login) >= 3)) {

			$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

			$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ?');
			$recupLogin->execute(array($Login));

			if ($recupLogin->rowCount() > 0) {
				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-warning">
								<h1 class="py-3 text-center">Attention!</h1>
								<h4 style="text-align: center;">Ce login existe déjà!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
			} else {
				$Mot_de_passe = sha1($Mot_de_passe);
				$Mot_de_passe1 = sha1($Mot_de_passe1);

				$insertUser = $bdd->prepare('UPDATE utilisateur SET Login = ? WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
				$insertUser->execute(array($Login, $Id_utilisateur, $Matricule_personnel));

				$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Login = ?');
				$recupLogin->execute(array($Id_utilisateur, $Login));


				$_SESSION['Login'] = $recupLogin->fetch()['Login'];
				
				
				if ($recupLogin->rowCount() > 0) {

						
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Succès !</h1>
									<h4 style="text-align: center;">Votre login a été modifié!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
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
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}

			
		} else {
			$verification = 'true';


			if (empty($_REQUEST['Login'])) {
				$Login1 = '* : renseignez un login!';
				$verification = 'false';
			}else if (strlen($Login) < 3) {
				$Login1 = '* : au moin trois (3) caractères!';
				$verification = 'false';
			} else if (titreValid($Login) == 'false') {
				$Login1 = '* : sans caractères spéciaux!';
				$verification = 'false';
			} else {
				$Login1 = '';
			}


			if (empty($Mot_de_passe)) {
				$password = '? : facultatif!';
				$password1 = '? : facultatif!';
				$verification = 'false';
			}else if (strlen($Mot_de_passe) <= 3) {
				$password = '* : au moin quatre (4) caractères!';
				$verification = 'false';
			} else {
				$password = '';
			} 

			if (empty($Mot_de_passe1)) {
				$password = '? : facultatif!';
				$password1 = '? : facultatif!';
				$verification = 'false';
			}else if (strlen($Mot_de_passe1) <= 3) {
				$password1 = '* : au moin quatre (4) caractères!';
				$verification = 'false';
			} else {
				$password1 = '';
			} 


			if ($verification == 'false') {

				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur !</h1>
								<h4 style="text-align: center;">Veillez renseignez les modifications a effectuer<br> *(obligatoire) ou ?(facultatif)!<a href="deconnexion_form1_2_1_1.php?password=<?=$password;?>&password1=<?=$password1;?>&Login1=<?=$Login1;?>&Login=<?=$Login;?>" style="position: relative; left: 35px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
				require('MesFormulaires.php');
				deconnexion_form1_2_1_1();
			} else if ($Mot_de_passe != $Mot_de_passe1) {

				?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur !</h1>
								<h4 style="text-align: center;">Les deux mot de passe doivent se resembler!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 35px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
				require('MesFormulaires.php');
				deconnexion_form1_2_1_1();

			} else if ($Login == $_SESSION['Login']) {


				$Mot_de_passe = sha1($Mot_de_passe);
				$Mot_de_passe1 = sha1($Mot_de_passe1);

				$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

				$insertUser = $bdd->prepare('UPDATE utilisateur SET Mot_de_passe = ? WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
				$insertUser->execute(array($Mot_de_passe, $Id_utilisateur, $Matricule_personnel));

				$recupPassword = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Mot_de_passe = ?');
				$recupPassword->execute(array($Id_utilisateur, $Mot_de_passe));

				
				if ($recupPassword->rowCount() > 0) {

					$_SESSION['Mot_de_passe'] = $recupPassword->fetch()['Mot_de_passe'];

					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-success">
									<h1 class="py-3 text-center">Succès !</h1>
									<h4 style="text-align: center;">Votre mot de passe a été modifié!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
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
									<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				}

			} else if ($Login != $_SESSION['Login']) {

				$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');
				$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ?');
				$recupLogin->execute(array($Login));

				if ($recupLogin->rowCount() > 0) {
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Ce login existe déjà!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				} else {
					$Mot_de_passe = sha1($Mot_de_passe);
					$Mot_de_passe1 = sha1($Mot_de_passe1);

					$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

					$insertUser = $bdd->prepare('UPDATE utilisateur SET Login = ?, Mot_de_passe = ? WHERE Id_utilisateur = ? AND Matricule_personnel = ?');
					$insertUser->execute(array($Login, $Mot_de_passe, $Id_utilisateur, $Matricule_personnel));

					$recupPassword = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Mot_de_passe = ?');
					$recupPassword->execute(array($Id_utilisateur, $Mot_de_passe));

					$_SESSION['Mot_de_passe'] = $recupPassword->fetch()['Mot_de_passe'];

					$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_utilisateur = ? AND Login = ?');
					$recupLogin->execute(array($Id_utilisateur, $Login));

					$_SESSION['Login'] = $recupLogin->fetch()['Login'];
					
					
					if ($recupPassword->rowCount() > 0 && $recupLogin->rowCount() > 0) {

							
						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">

						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-success">
										<h1 class="py-3 text-center">Succès !</h1>
										<h4 style="text-align: center;">Votre login et mot de passe ont été modifiés!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
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
										<h4 style="text-align: center;">Une erreur est survenue!<a href="deconnexion_form1_2_1_1.php" style="position: relative; left: 45px; color: green">X</a></h4>
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
	














