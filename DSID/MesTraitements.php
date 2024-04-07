<?php

	require('MesFonctions.php');
	
	function connexion() {

	
	
		$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

		if (isset($_REQUEST['envoi'])) {

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

				$req = "SELECT * FROM administrateur";
				$result = mysqli_query($conn, $req);
				

				while($row=mysqli_fetch_assoc($result))
				{
					$Login_defaut = $row['Login'];
					$Password_defaut = $row['Mot_de_passe'];

				}
				mysqli_close($conn);



				

				$Login = htmlspecialchars($_REQUEST['Login']);

				if ($Login == $Login_defaut && (sha1($Mot_de_passe) == $Password_defaut || $Mot_de_passe == $Password_defaut)) {

	

						session_start();
						
						// if (isset($_REQUEST['rememberMe'])) {
						// 	setcookie('Login',$Login, time()+365*24*3600, null, null, false, true);
						// 	setcookie('Mot_de_passe', $Mot_de_passe, time()+365*24*3600, null, null, false, true);
						// }

						//$_SESSION['Message'] = '';
						$_SESSION['Mot_de_passe_admin'] = $Mot_de_passe;

						header('Location: deconnexion_admin_form1.php');

		
				} else {

					$Mot_de_passe = sha1($_REQUEST['Mot_de_passe']); /* Cripter le mot de passe*/
					

					$recupId = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ? AND Mot_de_passe = ?');
					$recupId->execute(array($Login, $Mot_de_passe));
					$recupMatricule = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ? AND Mot_de_passe = ?');
					$recupMatricule->execute(array($Login, $Mot_de_passe));

					if ($recupId->rowCount() > 0 && $recupMatricule->rowCount() > 0) { 

						session_start();
						
						// if (isset($_REQUEST['rememberMe'])) {
						// 	setcookie('Login',$Login, time()+365*24*3600, null, null, false, true);
						// 	setcookie('Mot_de_passe', $Mot_de_passe, time()+365*24*3600, null, null, false, true);
						// }

						$_SESSION['Login'] = $Login;
						$_SESSION['Mot_de_passe'] = $Mot_de_passe;
						$_SESSION['Id_utilisateur'] = $recupId->fetch()['Id_utilisateur'];
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
						<!-- <script>
							alert('Votre mot de passe ou pseudo est incorrect !');
						</script> -->
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

		$bdd = new PDO('mysql:host=localhost; dbname=gestion_de_stage; chaset=utf8;', 'root', '');

		if (isset($_REQUEST['envoi'])) {

			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$Login = htmlspecialchars($_REQUEST['Login']);
			$Mot_de_passe2 = htmlspecialchars($_REQUEST['Mot_de_passe']);
			$Mot_de_passe3 = htmlspecialchars($_REQUEST['Mot_de_passe1']);

			if (!empty($_REQUEST['Matricule_personnel']) && !empty($_REQUEST['Login']) && !empty($_REQUEST['Mot_de_passe']) && !empty($_REQUEST['Mot_de_passe1'])) {
				$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
				$Login = htmlspecialchars($_REQUEST['Login']);
				$Mot_de_passe = sha1($_REQUEST['Mot_de_passe']);
				$Mot_de_passe1 = sha1($_REQUEST['Mot_de_passe1']);


				$recupMatricule = $bdd->prepare('SELECT * FROM personnel WHERE Matricule_personnel = ?');
				$recupMatricule->execute(array($Matricule_personnel));

				if ($recupMatricule->rowCount() <= 0) { ?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Ce matricule n'est pas enregistré!<a href="inscription_form.php?Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<!-- <script>
						alert('Cet identifiant est déja inscrit !');
					</script> -->
					<?php
					require('MesFormulaires.php');
					inscription_form();
					//header('Location: inscription_form.php');
				} else if (isnan($Matricule_personnel) == 'false') { ?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Le matricule doit etre un nombre!<a href="inscription_form.php?Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
				} else if (loginValid($Login) == 'false') {?>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
					<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
						<div class="row py-3 justify-content-center">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<h1 class="py-3 text-center">Attention!</h1>
									<h4 style="text-align: center;">Le login doit être en lettre ou/et en chiffre!<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
								</div>
							</div>
						</div>
					</div>
					<?php
					
				} else {

					if ($Mot_de_passe == $Mot_de_passe1) {

						$recupLogin = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ?');
						$recupLogin->execute(array($Login));
						
						$recupId_employe = $bdd->prepare('SELECT * FROM utilisateur WHERE Matricule_personnel = ?');
						$recupId_employe->execute(array($Matricule_personnel));

						if ($recupId_employe->rowCount() > 0) { ?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Cet identifiant existe déja !<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<!-- <script>
								alert('Cet identifiant est déja inscrit !');
							</script> -->
							<?php
							require('MesFormulaires.php');
							inscription_form();
							//header('Location: inscription_form.php');
						} else if ($recupLogin->rowCount() > 0) { ?>
							<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
							<script src="bootstrap/js/bootstrap_min.js"></script>
							<script src="bootstrap/js/jquery.js"></script>
							<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
								<div class="row py-3 justify-content-center">
									<div class="col-md-7">
										<div class="alert alert-danger">
											<h1 class="py-3 text-center">Erreur !</h1>
											<h4 style="text-align: center;">Ce pseudonyme existe déja !<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>&Mot_de_passe=<?=$Mot_de_passe2;?>&Mot_de_passe1=<?=$Mot_de_passe3;?>" style="position: relative; left: 55px; color: brown">X</a></h4>
										</div>
									</div>
								</div>
							</div>
							<!-- <script>
								alert('Ce pseudonyme existe déja !');
							</script> -->
							<?php
							require('MesFormulaires.php');
							inscription_form();

						} else {
							$insertUser = $bdd->prepare('INSERT INTO utilisateur (Matricule_personnel, Login, Mot_de_passe) VALUES (?,?,?)');
							$insertUser->execute(array($Matricule_personnel, $Login, $Mot_de_passe));

							$recupUser = $bdd->prepare('SELECT * FROM utilisateur WHERE Matricule_personnel = ? AND Login = ? AND Mot_de_passe = ?');
							$recupUser->execute(array($Matricule_personnel, $Login, $Mot_de_passe));

							if ($recupUser->rowCount() > 0) {

								session_start();
								$_SESSION['Matricule_personnel'] = $Matricule_personnel;	
								$_SESSION['Login'] = $Login;
								$_SESSION['Mot_de_passe'] = $Mot_de_passe;
								$_SESSION['Id_utilisateur'] = $recupUser->fetch()['Id_utilisateur']; /* Recuperer uniquement l'id parmis les éléments du "fetch"*/

								?>
								<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
								<script src="bootstrap/js/bootstrap_min.js"></script>
								<script src="bootstrap/js/jquery.js"></script>
								<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
									<div class="row py-3 justify-content-center">
										<div class="col-md-7">
											<div class="alert alert-success">
												<h1 class="py-3 text-center">Succès !</h1>
												<h4 style="text-align: center;">Vos informations ont bien été enregistrées !<a href="connexion_form.php?Login=<?=$Login;?>" style="position: relative; left: 45px; color: green">X</a></h4>
											</div>
										</div>
									</div>
								</div>
								<?php
								
								//header('Location: connexion_form.php');
							}
						}
					} else { ?>
						<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
						<script src="bootstrap/js/bootstrap_min.js"></script>
						<script src="bootstrap/js/jquery.js"></script>
						<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
							<div class="row py-3 justify-content-center">
								<div class="col-md-7">
									<div class="alert alert-warning">
										<h1 class="py-3 text-center">Attention !</h1>
										<h4 style="text-align: center;">Veillez renseigner des mots de passe identiques !<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>" style="position: relative; left: 45px; color: brown">X</a></h4>
									</div>
								</div>
							</div>
						</div>
						<!-- <script>
							alert('Veillez renseigner des mots de passe identiques !')
						</script> -->
						<?php
						require('MesFormulaires.php');
						inscription_form();
					}
				}

				

				
			}else { ?>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
				<script src="bootstrap/js/bootstrap_min.js"></script>
				<script src="bootstrap/js/jquery.js"></script>
				<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
					<div class="row py-3 justify-content-center">
						<div class="col-md-7">
							<div class="alert alert-danger">
								<h1 class="py-3 text-center">Erreur !</h1>
								<h4 style="text-align: center;">Veillez compléter tous les champs !<a href="inscription_form.php?Matricule_personnel=<?=$Matricule_personnel;?>&Login=<?=$Login;?>" style="position: relative; left: 55px; color: brown">X</a></h4>
							</div>
						</div>
					</div>
				</div>
				<!-- <script>
					alert('Veillez compléter tous les champs !')
				</script> -->
				<?php
				require('MesFormulaires.php');
				inscription_form();
			}
		}
		
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
					$_SESSION['Id_utilisateurs'] = $recupId_employe->fetch()['Id_utilisateur'];

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