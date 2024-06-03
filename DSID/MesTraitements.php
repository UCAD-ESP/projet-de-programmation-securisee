<?php

	require('MesFonctions.php');
	
	function connexion() {

		$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

		if (isset($_REQUEST['envoi'])) {

			$Login_defaut = "";
			$Login = htmlspecialchars($_REQUEST['Login']);
			$Mot_de_passe = htmlspecialchars($_REQUEST['Mot_de_passe']);

			if (!empty($_REQUEST['Login']) && !empty($_REQUEST['Mot_de_passe'])) {

				$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
				if (!$conn) { ?>

					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Erreur !</h1>
									<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion.php" style="position: relative; left: 35px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>					

					<?php
					exit;
				}

				// Requête SQL pour sélectionner toutes les colonnes de la table "utilisateur"
				// $req = "SELECT * FROM utilisateur";
				
				// $lg = $_REQUEST['Login'];

				$req = "SELECT * FROM utilisateur WHERE Login = '$Login'";

				// Exécution de la requête SQL et stockage du résultat dans $result
				$result = mysqli_query($conn, $req);

				// Boucle while pour parcourir chaque ligne de résultat de la requête
				while($row=mysqli_fetch_assoc($result))
				{
					if ($row['Role'] == 'admin') {
						// Extraction de la valeur de la colonne "Login" de la ligne actuelle et stockage dans $Login_defaut
						$Login_defaut = $row['Login'];

						// Extraction de la valeur de la colonne "Mot_de_passe" de la ligne actuelle et stockage dans $Password_defaut
						$Password_defaut = $row['Mot_de_passe'];
						$Id_utilisateur = $row['Id_utilisateur'];
						$Role = $row['Role'];
					}
					
				}

				mysqli_close($conn);


				// $Login = htmlspecialchars($_REQUEST['Login']);
				

				if ($Login == $Login_defaut && (sha1($Mot_de_passe) == $Password_defaut || $Mot_de_passe == $Password_defaut) && $Role == "admin") {

						session_start();
						
						// if (isset($_REQUEST['rememberMe'])) {
						// 	setcookie('Login',$Login, time()+365*24*3600, null, null, false, true);
						// 	setcookie('Mot_de_passe', $Mot_de_passe, time()+365*24*3600, null, null, false, true);
						// }

						//$_SESSION['Message'] = '';
						$_SESSION['Mot_de_passe_admin'] = $Password_defaut;
						$_SESSION['Login'] = $Login_defaut;
						$_SESSION['Id_utilisateur'] = $Id_utilisateur;

						header('Location: deconnexion_admin_form1.php');

		
				} else  {

					$Mot_de_passe = sha1($_REQUEST['Mot_de_passe']); /* Cripter le mot de passe*/
					

					// $recupId = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ? AND Mot_de_passe = ?');
					// $recupId->execute(array($Login, $Mot_de_passe));
					$recupMatricule = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ? AND Mot_de_passe = ?');
					$recupMatricule->execute(array($Login, $Mot_de_passe));

					if ($recupMatricule->rowCount() > 0) { 
					// if ($recupId->rowCount() > 0) { 

						session_start();
						
						// if (isset($_REQUEST['rememberMe'])) {
						// 	setcookie('Login',$Login, time()+365*24*3600, null, null, false, true);
						// 	setcookie('Mot_de_passe', $Mot_de_passe, time()+365*24*3600, null, null, false, true);
						// }

						$_SESSION['Login'] = $Login;
						$_SESSION['Mot_de_passe'] = $Mot_de_passe;
						$_SESSION['Id_utilisateur'] = $recupMatricule->fetch()['Id_utilisateur'];
						$_SESSION['Matricule_personnel'] = $recupMatricule->fetch()['Matricule_personnel'];
						//echo 'Bienvenue'.' '.$_SESSION['login'].' '.$_SESSION['id'];
						header('Location: deconnexion_form1.php');

					} else { 

						?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<script src="bootstrap/js/bootstrap_min.js"></script>
						<script src="bootstrap/js/jquery.js"></script>
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-warning">
										<h1 class="py-3 text-center">Attention !</h1>
										<h4 style="text-align: center;">Votre mot de passe ou pseudo est incorrect !<a href="connexion_form.php?Login=<?=$Login;?>" style="position: relative; left: 55px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						
						<?php
						require('MesFormulaires.php');
						connexion_form();
					}
				}

			} else { ?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<script src="bootstrap/js/bootstrap_min.js"></script>
				<script src="bootstrap/js/jquery.js"></script>
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur !</h1>
								<h4 style="text-align: center;">Veillez compléter tous les champs !<a href="connexion_form.php?Login=<?=$Login;?>" style="position: relative; left: 55px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<!-- <script>
					alert('Veillez compléter tous les champs !');
				</script> -->
				<?php
				require('MesFormulaires.php');	
				connexion_form();
			}
		}
		
	}




	function inscription() {
		// Connexion à la base de données
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=gestion_de_stage;charset=utf8;', 'root', '');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		if (isset($_REQUEST['envoi'])) {
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$Login = htmlspecialchars($_REQUEST['Login']);
			$Mot_de_passe2 = htmlspecialchars($_REQUEST['Mot_de_passe']);
			$Mot_de_passe3 = htmlspecialchars($_REQUEST['Mot_de_passe1']);

			// $sel = bin2hex(random_bytes(16)); // 16 octets donnent 32 caractères hexadécimaux
			// // Hacher le mot de passe avec SHA-256 et le sel
			// $Mot_de_passe_hash = hash('sha256', $sel . $Mot_de_passe2);

			if (!empty($Matricule_personnel) && !empty($Login) && !empty($Mot_de_passe2) && !empty($Mot_de_passe3)) {
				if (!is_numeric($Matricule_personnel)) {
					// showMessage('Le matricule doit être un nombre!', $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Le matricule doit être un nombre!<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: yellow">X</a></h4>								</div>
							</div>
						</div>
					</div>
					<?php
					return;
				}

				if (!preg_match('/^[a-zA-Z0-9]+$/', $Login)) {
					// showMessage('Le login doit être en lettres et/ou en chiffres!', $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
					
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Le login doit être en lettres et/ou en chiffres!<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: yellow">X</a></h4>								
								</div>
							</div>
						</div>
					</div>
					<?php
					return;
				}

				if ($Mot_de_passe2 !== $Mot_de_passe3) {
					// showMessage('Les mots de passe ne sont pas identiques!', $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Les mots de passe ne sont pas identiques!<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>								</div>
							</div>
						</div>
					</div>
					<?php
					return;
				}

				if (strlen($Mot_de_passe2) < 8 || !preg_match('/[A-Z]/', $Mot_de_passe2) || !preg_match('/[a-z]/', $Mot_de_passe2) || !preg_match('/[0-9]/', $Mot_de_passe2)) {
					// showMessage('Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.', $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>								</div>
							</div>
						</div>
					</div>
					<?php
					return;
				}

				// $Mot_de_passe = password_hash($Mot_de_passe2, PASSWORD_BCRYPT);
				$Mot_de_passe = sha1($_REQUEST['Mot_de_passe']);

				$recupMatricule = $bdd->prepare('SELECT * FROM personnel WHERE Matricule_personnel = ?');
				$recupMatricule->execute(array($Matricule_personnel));

				if ($recupMatricule->rowCount() <= 0) {
					// showMessage("Ce matricule n'est pas enregistré!", $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
					?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Ce matricule n'est pas enregistré!<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>								</div>
							</div>
						</div>
					</div>
					<?php
				} else {
					$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ?');
					$recupLogin->execute(array($Login));

					$recupId_employe = $bdd->prepare('SELECT * FROM utilisateur WHERE Matricule_personnel = ?');
					$recupId_employe->execute(array($Matricule_personnel));

					if ($recupId_employe->rowCount() > 0) {
						// showMessage("Cet identifiant existe déjà!", $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
						?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Cet identifiant existe déjà!<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>								</div>
							</div>
						</div>
					</div>
					<?php
					} elseif ($recupLogin->rowCount() > 0) {
						// showMessage("Ce pseudonyme existe déjà!", $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
						?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Ce pseudonyme existe déjà!<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>								</div>
							</div>
						</div>
					</div>
					<?php
					} else {
						$insertUser = $bdd->prepare('INSERT INTO utilisateur (Matricule_personnel, Login, Role, Mot_de_passe) VALUES (?, ?, ?, ?)');
						$insertUser->execute(array($Matricule_personnel, $Login, "user", $Mot_de_passe));

						$recupUser = $bdd->prepare('SELECT * FROM utilisateur WHERE Matricule_personnel = ? AND Login = ?');
						$recupUser->execute(array($Matricule_personnel, $Login));

						if ($recupUser->rowCount() > 0) {
							session_start();
							$user = $recupUser->fetch();
							$_SESSION['Matricule_personnel'] = $Matricule_personnel;
							$_SESSION['Login'] = $Login;
							$_SESSION['Id_utilisateur'] = $user['Id_utilisateur'];

							// showMessage("Vos informations ont bien été enregistrées!", $Login);

							?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-success">
											<h1 class="py-3 text-center">Réussi!</h1>
											<h4 style="text-align: center;">Vos informations ont bien été enregistrées !<a href="connexion_form.php?Login=<?=$Login;?>" style="position: relative; left: 45px; color: green">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}
				}
			} else {
				// showMessage("Veuillez compléter tous les champs!", $Login, $Mot_de_passe2, $Mot_de_passe3, $Matricule_personnel);
			
				?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-warning">
											<h1 class="py-3 text-center">Attention!</h1>
											<h4 style="text-align: center;">Veillez compléter tous les champs !<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>" style="position: relative; left: 55px; color: yellow">X</a></h4>										</div>
									</div>
								</div>
							</div>
							<?php

			}
		}
	}

	function showMessage($message, $login = '', $password = '', $password1 = '', $matricule = '') {
		?>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
		<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
			<div class="row py-3 justify-content-center">
				<div class="col-md-7">
					<div class="alert alert-warning">
						<h1 class="py-3 text-center">Attention!</h1>
						<h4 style="text-align: center;"><?= htmlspecialchars($message); ?><a href="inscription=_form.php?Matricule_personnel=<?= htmlspecialchars($matricule); ?>&Login=<?= htmlspecialchars($login); ?>&Mot_de_passe=<?= htmlspecialchars($password); ?>&Mot_de_passe1=<?= htmlspecialchars($password1); ?>" style="position: relative; left: 45px; color: brown">X</a></h4>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	


	function deconnexion() {
		session_start(); 
		setcookie('Login', '', time()-3600);
		setcookie('Mot_de_passe', '', time()-3600);
		$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
		session_destroy(); // Detruire toutes les sessions du tableau
		header('Location: connexion_form.php');
	}



	function modifier_password() {

		$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');


		if (isset($_REQUEST['envoi'])) {


			if (!empty($_REQUEST['Login'])) {


				$Login = htmlspecialchars($_REQUEST['Login']);

					
				$recupId_employe = $bdd->prepare('SELECT * FROM utilisateur WHERE Matricule_personnel = ?');
				$recupId_employe->execute(array($Login));
				

				if ($recupId_employe->rowCount() > 0) {

					session_start();
					$_SESSION['Id_utilisateur'] = $recupId_employe->fetch()['Id_utilisateur'];

					$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Matricule_personnel = ?');
					$recupLogin->execute(array($Login));
					$_SESSION['Login'] = $Login = $recupLogin->fetch()['Login'];


					header('Location: confirmer_password_form.php');

				} else { ?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<script src="bootstrap/js/bootstrap_min.js"></script>
					<script src="bootstrap/js/jquery.js"></script>
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention !</h1>
									<h4 style="text-align: center;">Ce matricule n'existe pas !<a href="modifier_password_form.php?Login=<?=$Login;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<!-- <script>
						alert('Ce pseudonyme ou matricule n\'existe pas !');
					</script> -->
					<?php
					require('MesFormulaires.php');
					modifier_password_form();
				} 

			} else { ?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<script src="bootstrap/js/bootstrap_min.js"></script>
				<script src="bootstrap/js/jquery.js"></script>
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur !</h1>
								<h4 style="text-align: center;">Veillez saisir votre pseudonyme ou matricule !<a href="modifier_password_form.php" style="position: relative; left: 55px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<!-- <script>
					alert('Veillez renseigner le champs de saisi !')
				</script> -->
				<?php
				require('MesFormulaires.php');
				modifier_password_form();
			}
		}
	}

	function confirmer_password() {

		
		require('MesFormulaires.php');
		
		$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');


		if (isset($_REQUEST['envoi'])) {

			if (!empty($_REQUEST['Mot_de_passe']) && !empty($_REQUEST['Mot_de_passe1'])) {
				
				$Mot_de_passe = sha1($_REQUEST['Mot_de_passe']);
				$Mot_de_passe1 = sha1($_REQUEST['Mot_de_passe1']);

				if ($Mot_de_passe == $Mot_de_passe1) {

					
					session_start();
					$Id_utilisateur = $_SESSION['Id_utilisateurs'];

					$insertUser = $bdd->prepare('UPDATE utilisateur SET Mot_de_passe = ? WHERE Id_utilisateur = ?');
					$insertUser->execute(array($Mot_de_passe, $Id_utilisateur));

					$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
					session_destroy();
					unset($_REQUEST['Mot_de_passe']);
					connexion_form();
					
				} else { ?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<script src="bootstrap/js/bootstrap_min.js"></script>
					<script src="bootstrap/js/jquery.js"></script>
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention !</h1>
									<h4 style="text-align: center;">Veillez renseigner des mots de passe identiques !<a href="confirmer_password_form.php" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<!-- <script>
						alert('Veillez renseigner des mots de passe identiques !')
					</script> -->
					<?php
					confirmer_password_form();
				}
			

			} else { ?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<script src="bootstrap/js/bootstrap_min.js"></script>
					<script src="bootstrap/js/jquery.js"></script>
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-danger">
									<h1 class="py-3 text-center">Attention !</h1>
									<h4 style="text-align: center;">Veillez renseigner les champs de saisi !<a href="confirmer_password_form.php" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
				<!-- <script>
					alert('Veillez renseigner les champs de saisi !')
				</script> -->
				<?php
				confirmer_password_form();
			}
		}
	}
 



?>