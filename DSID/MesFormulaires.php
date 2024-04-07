<?php 

	function accueil() { 

		session_start();


		?>
		<!DOCTYPE html>
		<html>
		<meta charset="utf-8">
		<head>
			<link rel="stylesheet" href="css/accueil.css?v=<?php echo time(); ?>">
			<title>Accueil</title>
		</head>
		<body>

			<div id="entete">
				<div id="logo">
					<img src="image/logos.jpg">
				</div>
				<div id="titre">
					<h1>Direction des Systèmes informatiques douaniers</h1>
					<p>Gestion des demandes de stage</p>
				</div>
			</div>

			<div id="menu">
				<ul>
					<li><a href= "deconnexion_form1.php" target="zone">accueil</a></li>
					<li><a href="a_propos.php" target="zone">à propos</a></li>
					<li><a href="services.php" target="zone">services</a></li>
					<li><a href="contact.php" target="zone">contact</a></li>
					
				</ul>
			</div>

		
						<iframe src="deconnexion_form1.php" id="corps" name="zone"></iframe>
			


			<div id="pied">
				<pre>www.douanes.sn	 	copyright &copy; juillet 2021</pre>
			</div>

		</body>
		</html>
		<?php
	}

	function contact() {
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
		<body>

		
		<div class="table">
			<table border="2px solide">
				<caption><h2>Nous contacter</h2></caption>
				<tr>
					<td class="name"><input type="text" name="name" placeholder="Tapez votre nom ici !" ></td>
					<td class="email"><input type="text" name="email" placeholder="Tapez votre adresse e-mail ici !"></td>
				</tr>
				<tr>
					<td class="col" colspan="2"><textarea minlength="10" maxlength="200" wrap="soft" placeholder="Tapez votre message ici !!!"></textarea></td>
				</tr>
				<tr>
					<td class="submit" colspan="2"><input type="submit" name="envoi" value="Envoyer"></td>
				</tr>
			</table>		
		</div>
		

		<div class="info">

			<div class="info1">
				<h2>Adresse :</h2>
				<h5>8-10 allées Robert Delmas BP 4033 Dakar Sénégal</h5>
			</div>

			<div class="info2">
				<h2>Telephone :</h2>
				<h5>Telephone : 33 889 74 74</h5>
				<h5>FAX : 33 889-74-01</h5>
			</div>

			<div class="info3">
				<h2>E-mail :</h2>
				<h5>spdgd@douanes.sn</h5>
			</div>
			
		</div>
		

		</body>

		<?php
	}

	function services() {
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/services.css?v=<?php echo time(); ?>">
		<body>

			<div class="table">
				<table>
			   <caption><h2>Les fonctionnalités de gestion des stages</h2></caption>

			   <tr>
			   		<th class="border"></th>
			   		<th colspan="3" class="border"><h3>Les acteurs</h3></th>
			   </tr>
			   <tr>
			   		<th rowspan="13" class="border"><h3>Les fonctionnalités</h3></th>
			    	<th class="border">Utilisateur</th>
			    	<th class="border">Personnel</th>
			    	<th class="border">Bureau Administratif et Financier</th>
			   </tr>
			   <tr>
			   		
			    	<td class="border">Se connecter</td>
			    	<td class="border">Se déconnecter</td>
			    	<td class="border">Se déconnecter</td>
			   </tr>
			   <tr>
			    	<td class="border">Créer compte</td>
			    	<td class="border">Consulter</td>
			    	<td class="border">Ajouter</td>
			   </tr>
			   <tr>
			    	<td class="border">Supprimer compte</td>
			    	<td class="border">Rechercher</td>
			    	<td class="border">Supprimer</td>
			   </tr>
			   <tr>
			    	<td class="border">Changer mot de passe</td>
			    	<td class="border">Définir planning</td>
			    	<td class="border">Mettre à jour</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher accueil</td>
			    	<td class="border">Suivre planning</td>
			    	<td class="border">Consulter</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher à propos</td>
			    	<td class="border">Définir étape</td>
			    	<td class="border">Rechercher</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher services</td>
			    	<td class="border">Valider étape</td>
			    	<td class="border">Affecter bureau</td>
			   </tr>
			   <tr>
			    	<td class="border">Afficher contact</td>
			    	<td class="border">Clôturer stage</td>
			    	<td class="border">Imprimer carte stagiaire</td>
			   </tr>
			   <tr>
			    	<td rowspan="4" class="border"></td>
			    	<td class="border">Changer mot de passe</td>
			    	<td class="border">Imprimer attestation</td>
			   </tr>
			   <tr>
			   		<td rowspan="3" class="border"></td>
			    	<td class="border">Imprimer liste stage</td>
			   </tr>
			   <tr>
			    	<td class="border">Imprimer liste stagiaire</td>
			   </tr>
			   <tr>
			    	<td class="border">Changer mot de passe</td>
			   </tr>

			</table>
			</div>
			
			
		</body>

		<?php
	}

	function a_propos() {

		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/a_propos.css?v=<?php echo time(); ?>">
		<body>

			<div class="corps">

				<div class="titre">

					<h1 id="plan">A propos de nous</h1>	
					<h2>Plan :</h2>
			
					<ul>	
						<li><a href="#un" target="zone" class="plan"><h2 class="h2"> I - Organisation des Douanes sénégalaises</h2></a></li>
						<ul>
							<li><a href="#unun" target="zone" class="plan"><h3>1 . Organigramme</h3></a></li>
							<br>
							<li><a href="#undeux" target="zone" class="plan"><h3>2. CV du DG</h3></a></li>
						</ul>
						<li><a href="#deux" target="zone" class="plan"><h2 class="h2"> II - Mission de la Direction Général des Douanes</h2></a></li>
						<li><a href="#trois" target="zone" class="plan"><h2 class="h2"> III - Répertoire des douane</h2></a></li>
					</ul>
					
				</div>




				<div class="partie">
					<h2 class="h2" id="un"> I - Organisation</h2>

					<h3>LES NOUVEAUX ATOUTS DE L'ADMINISTRATION DES DOUANES</h3>

					<p>Après avoir contribué d’une manière significative à la mobilisation et la sécurisation des recettes douanières, mais également à la facilitation des procédures, l’arrêté n°8381/MEF/DGD du 25 Août 2000 portant organisation de l’Administration des Douanes a été abrogé et remplacé par l’arrêté n° 7282 du 30 juillet 2009. Des besoins nouveaux apparus dans le domaine organisationnel, ont amené les autorités à apporter des réaménagements au dispositif opérationnel du service des Douanes pour mieux s’adapter au contexte du moment.</p>

					<p>Ces besoins ont été guidés par l’intensification du trafic des marchandises, les nouvelles formes de criminalités, la nécessité de contribuer au rayonnement du Port autonome de Dakar, le renforcement de la représentation de l’Administration des Douanes au niveau régional et la définition d’une politique de gestion optimale des ressources humaines, financières et matérielles. Ainsi pour faire face aux défis actuels et futurs à relever, il est apparu opportun d’asseoir une nouvelle organisation basée autour de :</p>

					<ul>
						<li>la coordination optimale de l’action du service avec la création d’un poste de coordonnateur auprès du Directeur général;</li>
						<li>la promotion et le renforcement de la facilitation des procédures et du partenariat avec l’entreprise avec notamment la création d’une Direction chargée de la Facilitation et du Partenariat avec l’Entreprise (DFPE) ; </li>
						<li>une meilleure maîtrise des ressources humaines, matérielles et financières, ainsi qu’en matière de gestion et de maintenance du matériel et la rationalisation de la surveillance douanière.</li>
					</ul>

					<p>Voila tracés les nouveaux atouts d’une administration des Douanes du 21ème siècle qui en un mot comme en mille qui devront répondre aux attentes aussi bien de l’Etat que des partenaires et usagers du service public de la Douane.</p>

					<h3 class="h2" id="unun">1 . Organigramme</h3>

					<img src="image/Organigramme.jpg">

					<h3 class="h2" id="undeux">2 . CV du DG</h3>

					<h4>M.Abourahmane DIEYE</h4>
					<h4>Colonel - Inspecteur Principal des Douanes</h4>
					<img id="dg" src="image/dg.jpg">

					<h4>Formation</h4>
					<p><strong>- Septembre 2010 :</strong> Master II en politique et Négociation Commerciales Internationales : UCAD Mention Bien</p>
					<p>Les résultats escomptés du Master sont, d’une part, la constitution d’une masse critique d’experts en négociations internationales et ; d’autre part, l’adaptation des systèmes commerciaux nationaux aux exigences et obligations du système commercial multilatéral.</p>
					<p><strong>- Novembre 2003 :</strong> BREVET ENA Ecole Nationale d’Administration / Régie Economique Section Douanes. Mention Bien.</p>
					<p><strong>-Décembre 2000 :</strong> Maitrise sociologie des organisations UGB Sénégal Mention Très bien.</p>
					<p><strong>-Juliet 1995:</strong> BAC Lycée Malick Sy Thies / Mention Abien</p>

					<h4>Certifications</h4>
					<p><strong>-Fevrier 2014 :</strong> OMC E-Learning CERFICAT sur l’Agriculture à l’OMC</p>
					<p><strong>-Juillet 2006 :</strong> Chef de service Surveillance à l’Ecole Nationale Des Douanes de la Rochelle France</p>
					<P><strong>- Mars 2004 :</strong> Certificat sur l’Accord sur les aspects des droits de la propriété intellectuelle qui touche au commerce</P>
					<p><strong>-Avril 2004 :</strong> Certificat sur les méthodologies des contrôles des opérations commerciales à l’Ecole Nationale des Douanes de Tourcoing en France</p>
					<p><strong>-Aout 2002 :</strong> completion of The African Growth and Opportunity Act Training Worskship</p>

					<h4>Distinctions</h4>
					<p>-Décoration à la médaille d’honneur  de la Douane Hors Contingent (avant les 15 ans de service requis pour ladite médaille) en Janvier 2016.</p>

					<h4>Expériences Professionnelles</h4>
					<p><strong>- Juin 2019 : Directeur Régional Ouest des douanes</strong></p>
					<p>-Novembre 2018 : Conseiller Technique du Ministre de l’Economie et des Finances</p>
					<p>-Mars 2015 : Chef de Bureau des Douanes de Dakar Port Nord</p>
					<p><strong>-Fevrier 2012 :</strong> Chef de visite Bureau des Douanes Dakar Port Sud</p>
					<p><strong>-Mars 2010 :</strong> Chef du Bureau des Douanes de Dakar Yoff</p>
					<p><strong>-Novembre 2009 :</strong> Chef des Sections Bureau des Douanes de Dakar Port Nord</p>
					<p><strong>-Septembre 2007 :</strong> Chef des Sections du Bureau des Douanes de Dakar Yoff</p>
					<p><strong>-Juin 2004 :</strong> Vérificateur Dakar Port Nord</p>
					<p><strong>-Septembre 2003 :</strong> Inspecteur Stagiaire Direction des Systèmes Informatiques Douaniers</p>

					<h4>Langues</h4>
					<p><strong>Anglais :</strong> Bon niveau</p>
					<p><strong>Français :</strong> Très bon niveau</p>

					<h4>CompétencesTI</h4>
					<p><strong>-Traitement de texte :</strong> connaissances avancées</p>
					<p><strong>-Feuille de calcul :</strong> connaissances intermédiaires</p>
					<p><strong>-Présentation :</strong> connaissances intermédiaires</p>
					<p><strong>-Base de données :</strong> connaissances de base</p>


					<h2 class="h2" id="deux"> II - Mission de la Direction Général des Douanes</h2>

					<p><strong>Sous l’autorité du Directeur général, la Direction générale des Douanes est chargée :</strong></p>
					<p>de la liquidation des droits et taxes exigibles à l’occasion de l’importation ou de l’exportation des produits ou marchandises ;</p>
				    <p>de la recherche, de la constatation et de la répression de la fraude douanière, ainsi que de la contrefaçon et de la piraterie ;</p>
				    <p>de la poursuite et de la répression des infractions à la réglementation des changes ;</p>
				    <p>de la sécurité et de la facilitation de la chaîne logistique internationale ;</p> 
				    <p>de la formation professionnelle et du perfectionnement des personnels d’encadrement et d’exécution ;</p> 
				    <p>de l’élaboration, en collaboration avec les services intéressés tant au plan national qu’au sein des instances internationales, de la législation et de la réglementation douanières relatives aux échanges extérieurs et au change.</p>
				    <p>Elle concourt également à l’application de la réglementation relative, notamment à la sécurité, à la santé publique et à la protection de l’environnement ;</p>
				    <p>du suivi et du traitement des questions relatives aux relations douanières internationales ;</p>
				    <p>de l’administration, de l’orientation, de la coordination et du contrôle des directions et services qui la composent ;</p> 
				    <p>des secrétariats de la Commission de Règlement des Litiges douaniers, du Comité national de Lutte contre la Fraude et du Comité de Direction des Commissionnaires en Douane agréés.</p>

				    <p><strong>Le Directeur général des Douanes est assisté dans ses fonctions par un Coordonnateur, nommé par décret.
					Le Directeur général des Douanes peut, également, être assisté de Conseillers techniques et de Chargés de missions nommés par arrêté du Ministre chargé des Finances.
					Outre ses services rattachés, la Direction générale des Douanes comprend :</strong></p>

					<p><strong>1) les services centraux suivants :</strong></p>

				    <p>la Direction du Contrôle interne ;
				    la Direction de la Réglementation et de la Coopération internationale ;
				    la Direction des Opérations douanières ;
				    la Direction de la Facilitation et du Partenariat avec l’Entreprise ;
				    la Direction du Renseignement et des Enquêtes douanières ;
				    la Direction du Personnel et de la Logistique ;
				    la Direction des Systèmes informatiques douaniers.</p>

				    <p><strong>2) les services extérieurs suivants :</strong></p>

				    <p>la Direction régionale de Dakar-Port ;
				    la Direction régionale des Unités spécialisées et Produits pétroliers ;
				    la Direction régionale de l’Ouest ;
				    la Direction régionale du Centre ;
				    la Direction régionale du Nord ;
				    la Direction régionale du Sud ;
				    la Direction régionale du Sud-Est.</p>


					<h2 class="h2" id="trois"> III - Répertoire</h2>

					<table>
						<tr>
							<th colspan="4" class="td"><h3>Direction Générale des Douanes</h3></th>
						</tr>
						<tr>
							<th class="td">Directions DGD</th>
							<th class="td">Fixe</th>
							<th class="td">Cellulaire</th>
							<th class="td">Adresse</th>
						</tr>
						<tr>
							<td class="td">Standard</td>
							<td class="td">33 839 00 00</td>
							<td class="td"></td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Coordinateur</td>
							<td class="td">33 839 00 05</td>
							<td class="td">77 332 64 01</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Secrétaire Particulier N°1</td>
							<td class="td">33 839 00 03</td>
							<td class="td"></td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Secrétaire Particulier N°2</td>
							<td class="td">33 839 00 04</td>
							<td class="td"></td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Bureau des Relations Publiques et de la Communication</td>
							<td class="td">33 839 00 61</td>
							<td class="td">77 332 64 02</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Division de l’Orientation et de la Prospective</td>
							<td class="td">33 839 00 10</td>
							<td class="td">77 332 64 11</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Division de la Formation</td>
							<td class="td">33 824 98 11</td>
							<td class="td">77 332 64 10</td>
							<td class="td">Point E Boulevard du canal 4 X rue de diourbel PE15</td>
						</tr>
						<tr>
							<td class="td">Direction des Opérations Douanières</td>
							<td class="td">33 839 00 03</td>
							<td class="td">77 332 64 05</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Direction du Contrôle Interne</td>
							<td class="td"></td>
							<td class="td">77 332 64 03</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Direction de la Réglementation et de la Coopération Internationale</td>
							<td class="td">33 839 00 43</td>
							<td class="td">77 332 64 04</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Direction du Personnel et de la Logistique</td>
							<td class="td">33 839 00 23</td>
							<td class="td">77 332 64 08</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Direction du Renseignement et des Enquêtes Douanières</td>
							<td class="td"></td>
							<td class="td">77 332 64 07</td>
							<td class="td">Ouakam Extension Mamelles, lots 115/117</td>
						</tr>
						<tr>
							<td class="td">Direction de la Facilitation et du Partenariat avec l’Entreprise</td>
							<td class="td">33 839 00 23</td>
							<td class="td">77 332 64 06</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<td class="td">Direction des Systèmes Informatiques Douaniers</td>
							<td class="td">33 839 00 63</td>
							<td class="td">77 332 64 09</td>
							<td class="td">DGD / avenue Peytavin x avenue de la République</td>
						</tr>
						<tr>
							<th colspan="4" class="td"><h3>Directions régionales</h3></th>
						</tr>
						<tr>
							<td class="td">Direction Régionale Dakar Port</td>
							<td class="td"></td>
							<td class="td">77 332 64 13</td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td">Direction Régionale des Produits Pétroliers et des Unités Spécialisées</td>
							<td class="td"></td>
							<td class="td">77 332 64 16</td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td">Direction Régional Ouest</td>
							<td class="td">33 821 88 94</td>
							<td class="td">77 332 64 15</td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td">Direction Régionale du Centre</td>
							<td class="td">33 941 46 76</td>
							<td class="td">77 332 64 17</td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td">Direction Régionale des Douanes du Nord</td>
							<td class="td">33 961 51 70</td>
							<td class="td">77 332 64 19</td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td">Direction Régionale des Douanes du Sud</td>
							<td class="td">33 991 11 27</td>
							<td class="td">77 332 64 18</td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td">Direction Régionale des Douanes du Sud Est</td>
							<td class="td">33 981 17 19</td>
							<td class="td">77 332 64 20</td>
							<td class="td"></td>
						</tr>
					</table>

				</div>


			</div>

		</body>

		<?php
	}


	function inscription_form() { 
	
		session_start();
		$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
		session_destroy();
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/inscription_form.css?v=<?php echo time(); ?>">
		<body>

	
		<form action="inscription.php" method="REQUEST">

				<div class="formContainer">

					<div class="formSection">

						<h1>Inscription</h1>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/id.png">
							</div>
							<input type="number" name="Matricule_personnel" id="userName" placeholder="Entrez votre identifiant" value="<?=(isset($_REQUEST['Matricule_personnel'])&&$_REQUEST['Matricule_personnel']!='')?$_REQUEST['Matricule_personnel']:'';?>" autocomplete="off">
						</div>


						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/user.png">
							</div>
							<input type="text" name="Login" id="userName" placeholder="Entrez votre pseudonyme" value="<?=(isset($_REQUEST['Login'])&&$_REQUEST['Login']!='')?$_REQUEST['Login']:'';?>" autocomplete="off">
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe" id="userPassword" placeholder="Entrez votre mot de passe" value="<?=(isset($_REQUEST['Mot_de_passe'])&&$_REQUEST['Mot_de_passe']!='')?$_REQUEST['Mot_de_passe']:'';?>" autocomplete="off">
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe1" id="userPassword" placeholder="Mot de passe à nouveau" value="<?=(isset($_REQUEST['Mot_de_passe1'])&&$_REQUEST['Mot_de_passe1']!='')?$_REQUEST['Mot_de_passe1']:'';?>" autocomplete="off">
						</div>

						<div class="btnRow">
							<input type="submit" value="S'Inscrire" class="btn" name="envoi" id="loginBtn">
						</div>

					</div>
					
				</div>

		</form>
			

		</body>
		<?php 
	} 



	function connexion_form() { 


		session_start();
		$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
		session_destroy();
		?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/connexion_form.css?v=<?php echo time(); ?>">
			<!-- <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap_min.css">
			<script src="bootstrap/js/bootstrap_min.js"></script>
			<script src="bootstrap/js/jquery.js"></script> -->
			<body>
				
				
			<form action="connexion.php" method="REQUEST">
				
					<div class="formContainer">
						
						<div class="formSection">

							<h1>Connexion</h1>

							<div class="inputRow">
								<div class="inputIcon">
									<img src="image/user.png">
								</div>
								<input type="text" name="Login" id="userName" placeholder="Entrez votre pseudonyme" value="<?=(isset($_REQUEST['Login'])&&$_REQUEST['Login']!='')?$_REQUEST['Login']:'';?>">
							</div>

							<div class="inputRow">
								<div class="inputIcon">
									<img src="image/lock.png">
								</div>
								<input type="password" name="Mot_de_passe" id="userPassword" placeholder="Entrez votre mot de passe" value="<?=(isset($_REQUEST['Mot_de_passe'])&&$_REQUEST['Mot_de_passe']!='')?$_REQUEST['Mot_de_passe']:'';?>">
							</div>

							<div class="row">
								<div class="col">
									<input type="checkbox" name="rememberMe" id="rememberMe">
									<label for="rememberMe">Se souvenir de moi</label>
								</div>
							</div>

							<div class="btnRow">
								<input type="submit" value="Se connecter" class="btn" name="envoi" id="loginBtn">
							</div>
							<div>
								<a href="modifier_password_form.php" id="forgotPassword">Mot de passe oublié ?</a>
								<a href="inscription_form.php" id="link">S'Inscrire !</a>
							</div>
							
						</div>

					</div>

			
			</form>
			

			</body>
		<?php 
	} 






	function deconnexion_form1() {

		session_start();


		if (empty($_SESSION['Mot_de_passe'])) { // Si la session password n'est pas actif sur le site
		 	header('Location: connexion_form.php');
		}

		if (isset($_SESSION['Mot_de_passe_admin'])) { 
		 	header('Location: deconnexion_admin_form1.php');
		}

		?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1.css?v=<?php echo time(); ?>">
			<body>
				<iframe src="deconnexion_form1_1.php" id="corps" name="zone1"></iframe>
			</body>
		<?php  
	} 

	function deconnexion_form1_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><h1 id="titre">Tableau de bord</h1></li>
					
						        <li class="menu-item"><a href="deconnexion_form1_2.php" target="zone1"><button><img src="image/task.png">&nbsp;&nbsp;Etape du planning</button></a></li>
						        <li class="menu-item"><a href="deconnexion_form1_3.php" target="zone1"><button><img src="image/calendar.png">&nbsp;&nbsp;Suivi du stage</button></a></li>
						        <li class="menu-item"><a href="deconnexion_form1_4.php" target="zone1"><button><img src="image/cloture.png">&nbsp;&nbsp;Clôturer un stage</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion_form1_2_1.php" target="zone1"><button><img src="image/compte.png">&nbsp;&nbsp;Mon compte</button></a></li>
						        <li class="menu-item"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_form1_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						       
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			  <div class="form">


					<h3><p>Définir un planning</p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_2.php">

							<input hidden="" type="number" name="Matricule_personnel" value="<?= $_SESSION['Matricule_personnel']; ?>">
							<input hidden="" type="number" name="Id_planning" value="<?= isset($_REQUEST['Id_planning'])?$_REQUEST['Id_planning']:'';?>">

							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTitre">Titre</label>
									        </div>

									        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîï-ðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomTitre" name="titre" placeholder="Titre de la tâche" required="" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['titre'])&&$_REQUEST['titre']!='')?$_REQUEST['titre']:'';?>">
									        <?php if (!isset($_REQUEST['titre1'])): ?>
									        	<span>au moin trois (3) lettres ou chiffre!</span>
									       	<?php endif ?>

									       	<?php if (isset($_REQUEST['titre1'])): ?>
									        	<p><?= $_REQUEST['titre1']; ?></P>
									       	<?php endif ?>
									        
									    </div>
									    
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateDebut">Démarrage</label>
									        </div>

									        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateDebut" name="Date_debut" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['Date_debut'])&&$_REQUEST['Date_debut']!='')?$_REQUEST['Date_debut']:date('Y-m-d');?>">

									        <?php if (!isset($_REQUEST['Date_debut1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['Date_debut1'])): ?>
									        	<p><?= $_REQUEST['Date_debut1']; ?></P>
									       	<?php endif ?>


									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateFin">Fin</label>
									        </div>

									       	<input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateFin" name="Date_fin" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['Date_fin'])&&$_REQUEST['Date_fin']!='')?$_REQUEST['Date_fin']:date('Y-m-d');?>">

									       	<?php if (!isset($_REQUEST['Date_fin1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['Date_fin1'])): ?>
									        	<p><?= $_REQUEST['Date_fin1']; ?></P>
									       	<?php endif ?>
									        

								     	</div>
							   		</div>	


							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemarrage"></label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="first" id="validationCustomDemarrage" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['first'])&&$_REQUEST['first']!='')?$_REQUEST['first']:'08:00';?>" >
									        <?php if (!isset($_REQUEST['first1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['first1'])): ?>
									        	<p><?= $_REQUEST['first1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFin"></label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="last" id="validationCustomFin" aria-describedby="inputGroupPrepend" value="<?=(isset($_REQUEST['last'])&&$_REQUEST['last']!='')?$_REQUEST['last']:'20:00';?>" >
									        <?php if (!isset($_REQUEST['last1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['last1'])): ?>
									        	<p><?= $_REQUEST['last1']; ?></P>
									       	<?php endif ?>
									        

								     	</div>
							   		</div>	

							   		<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <label class="input-group-text" id="inputGroupPrepend" for="validationCustomTache">Tâche</label>
									        

									        <textarea class="form-control"  maxlength="250" name="tache" id="validationCustomTache" placeholder="Tâche" aria-describedby="inputGroupPrepend"  style="resize: none; height: 80px;" required=""><?=(isset($_REQUEST['tache'])&&$_REQUEST['tache']!='')?$_REQUEST['tache']:'';?></textarea>
									        <?php if (!isset($_REQUEST['tache1'])): ?>
									        	<span>Renseignez une tâche!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['tache1'])): ?>
									        	<p><?= $_REQUEST['tache1']; ?></P>
									       	<?php endif ?>

									    </div>
							   		</div>	

							</div>

							</div>

							

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
		 					
								    		<input type="submit" class="bouton" name="envoi" value="Enregistrer le planning">

									    </div>

							   		</div>	

							</div>

							<?php

								$conn = mysqli_connect("127.0.0.1", "root", "", "gestion_de_stage");
								if (!$conn) 
								{ ?>
									<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
									<div class="container" style="position: absolute; z-index: 3; width: 100%; left: 100px;">
										<div class="row py-3 justify-content-center">
											<div class="col-md-7">
												<div class="alert alert-danger">
													<h1 class="py-3 text-center">Erreur !</h1>
													<h4 style="text-align: center;">Une erreur est survenue dans la base de données!<a href="deconnexion_form1_2.php" style="position: relative; left: 35px; color: brown">X</a></h4>
												</div>
											</div>
										</div>
									</div>					

									<?php
									exit;
								}

								$req = "SELECT * FROM planning ORDER BY Date_debut ASC";
								$result = mysqli_query($conn, $req);
								?>

									<table class="table">
									<tr>
										<th class="th">Titre</th>
										<th class="th">Tâche</th>
										<th class="th">Date de debut</th>
										<th class="th">Date de fin</th>
										<th class="th">Opération</th>
									</tr>
								<?php

								while($row=mysqli_fetch_assoc($result))
								{?>
									<tr>
										<td class="td"><?=$row['Titre'];?></td>
										<td class="td"><?=$row['Tache'];?></td>
										<td class="td"><?=$row['Date_debut'];?></td>
										<td class="td"><?=$row['Date_fin'];?></td>
										<td class="bout">
											<input type="button" class="bouton1" name="envoi" value="Modifier" onclick="window.location.href='deconnexion_form1_2_modifier.php?Id_planning=<?=$row['Id_planning'];?>&Matricule_personnel=<?=$row['Matricule_personnel'];?>&titre=<?=$row['Titre'];?>&tache=<?=$row['Tache'];?>&Date_debut=<?=$row['Date_debut'];?>&Date_fin=<?=$row['Date_fin'];?>';">
											<input type="button" class="bouton1" name="envoi" value="Supprimer" onclick="window.location.href='deconnexion_form1_2_supprimer.php?Id_planning=<?=$row['Id_planning'];?>&Matricule_personnel=<?=$row['Matricule_personnel'];?>;?>';">
										</td>
									</tr>
									
									<?php
								}
								mysqli_close($conn);

							?>
									</table>

						 	

						</form>
				</div>	

			</body>
			<?php
	}

	function deconnexion_form1_2_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_2_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php" target="zone1"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="deconnexion_form1_2_1_1.php" target="zone1"><button class="solo">Modifier mon compte</button></a></li>
						        <li class="menu-item"><a href="deconnexion_form1_2_1_2.php" target="zone1"><button class="solo">Supprimer mon compte</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion.php" target="zone1"><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
						        
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_form1_2_1_1() {

			if (session_status() === PHP_SESSION_NONE) {
			    session_start();
			}
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_2_1_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_2_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>


			  <div class="form">

					<h3><p>Changez vos coordonnées</p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_2_1_1.php">

<!-- ggg -->
							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomLogin">Login</label>
									        </div>
									        
									 
									        <input type="text" pattern="[A-Za-z0-9'àáâãäåèéêëìíîï-ðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomLogin" name="Login" required="" aria-describedby="inputGroupPrepend" placeholder="Login" value="<?=$_REQUEST['Login']??$_SESSION['Login'];?>">
									        <?php if (!isset($_REQUEST['Login1'])): ?>
									        	<span>* : Renseignez un login!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['Login1'])): ?>
									        	<p><?= $_REQUEST['Login1']?></P>
									       	<?php endif ?>


									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomMatricule">Matricule</label>
									        </div>
									 
									        <input type="text" disabled="" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Matricule_personnel'];?>">

								     	</div>
							   		</div>	
							   		

							   		<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPassword">Mot de passe</label>
									        </div>
									 
									        <input type="password" maxlength="50"  pattern=".{4,50}" class="form-control" id="validationCustomPassword" name="Mot_de_passe" required="" aria-describedby="inputGroupPrepend" placeholder="Nouveau mot de passe" value="<?= isset($_REQUEST['Mot_de_passe'])?$_REQUEST['Mot_de_passe']:'';?>">
									        <?php if (!isset($_REQUEST['password'])): ?>
									        	<span>? : Facultatif!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['password'])): ?>
									        	<p><?= $_REQUEST['password']?></P>
									       	<?php endif ?>

									    </div>
									    
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPassword1">Mot de passe</label>
									        </div>
									 
									        <input type="password" maxlength="50"  pattern=".{4,50}" class="form-control" id="validationCustomPassword1" name="Mot_de_passe1" required="" aria-describedby="inputGroupPrepend" placeholder="Mot de passe à nouveau" value="<?= isset($_REQUEST['Mot_de_passe1'])?$_REQUEST['Mot_de_passe1']:'';?>">
									        <?php if (!isset($_REQUEST['password1'])): ?>
									        	<span>? : Facultatif!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['password1'])): ?>
									        	<p><?= $_REQUEST['password1'];?></P>
									       	<?php endif ?>

									    </div>
									    
							   		</div>	
							</div>

							

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <input type="submit" class="bouton" name="envoi" value="Changer de coordonnée">

									    </div>
							   		</div>	

							</div>

						</form>
				</div>	

			</body>
			<?php
	}

	function deconnexion_form1_2_1_2() {

			if (session_status() === PHP_SESSION_NONE) {
			    session_start();
			}
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_2_1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" >

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_2_1.php" target="zone1"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
					
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
						       
						        
						        
					      </ul>
				    </nav>
			  </header>

			  <div class="form">

				<h3><p>Supprimer le compte</p></h3>

				<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_2_1_2.php">

<!-- ggg -->
						<div class="row">

						
								<div class="col-md-4 mb-3 block1">
						 
							    	<div class="input-group">

								    	<div class="input-group-prepend">
								         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomLogin">Login</label>
								        </div>
								        
								 	   <input type="text" hidden="" class="form-control" id="validationCustomLogin" name="Login" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Login'];?>">
								        <input type="text" disabled="" class="form-control" id="validationCustomLogin" name="Login" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Login'];?>">
								    


								    </div>
								    <div class="input-group input-group-left">
								        <div class="input-group-prepend">
								         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomMatricule">Matricule</label>
								        </div>
								 
								 		<input type="text" hidden="" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Matricule_personnel'];?>">
								        <input type="text" disabled="" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" required="" aria-describedby="inputGroupPrepend" value="<?=$_SESSION['Matricule_personnel'];?>">

							     	</div>
						   		</div>	
						   	
						</div>



						

						<div class="row">
						
								<div class="col-md-4 mb-3 block1">
						 
							    	<div class="input-group input-groupD">
							   
								        <input type="submit" class="bouton" name="envoi" value="Supprimer le compte">

								    </div>
						   		</div>	

						</div>

					</form>
			</div>

			</body>
			<?php
	}

	function deconnexion_form1_3() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			require('Month.php');
	  		require('Events.php');
	  		$events = new Events();
	  	 	$month = new Month($_GET['month'] ?? null, $_GET['year'] ?? null); 

	  	 	$start = $month->getStartingDay();
	  	 	$start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');

	  	 	$weeks = $month->getWeeks();
	  	 	$end = (clone $start)->modify('+'.(6 + 7 * ($weeks - 1)).' days');
	  	 	$events = $events->getEventsBetweenByDay($start, $end);
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_3.css?v=<?php echo time(); ?>">
			<body>
				
				<header>

				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						     
						       
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>

			  </header>

			  <div class="corps">

			  	<div class="calendar">
			 	
			 	<h3>Mon calendrier</h3>

			  	<!--$month->getWeeks() : Affiche le nombre de semaine-->

			  	<div class="d-flex flex-row align-items-center justify-content-between mx-sm-3">

			  		<h4><?= $month->toString(); ?></h4>

			  		<a href="deconnexion_form1_3_2.php" class="calendar__button">+</a>

			  		<div>
			  			<a style="background-color: #787d34; border: 3px solid azure; border-radius: 20px;" href="deconnexion_form1_3.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class="btn btn-dark">&lt;&lt;</a>
			  			<a style="background-color: #787d34; border: 3px solid azure; border-radius: 20px;" href="deconnexion_form1_3.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-dark">&gt;&gt;</a>
			  		</div>
			  	</div>

			  	<table class="calendar__table calendar__table--<?= $weeks; ?>weeks">
			  		<?php for ($i = 0; $i < $weeks; $i++): ?>
			  			<tr>

			  				<?php foreach($month->days as $k => $day): 
			  					$date = (clone $start)->modify("+".($k + $i * 7)." days");
			  					$eventsForDay = $events[$date->format('Y-m-d')] ?? [];
			  					$isToday = date('Y-m-d') === $date->format('Y-m-d');
			  					?>
			  				<td class="<?= $month->withinMonth($date)? '':'calendar__othermonth'; ?> <?= $isToday? 'today':''; ?>">

			  					<?php if ($i === 0): ?> 
			  						<div class="calendar__weekday"><?= $day; ?></div>
			  					<?php endif; ?>

			  					<a class="calendar__day" href="deconnexion_form1_3_2.php?date=<?= $date->format('Y-m-d'); ?>"><?= $date->format('d'); ?></a>

			  					<?php foreach ($eventsForDay as $event): ?>
			  						<div class="calendar__event">
			  							<?= (new DateTime($event['Date_debut']))->format('H:i'); ?> - <a href="deconnexion_form1_3_1.php?Id_evenement=<?= $event['Id_evenement']; ?>"><?= htmlentities($event['Titre']); ?></a>
			  						</div>
			  					<?php endforeach; ?>

			  				</td>
			  				<?php endforeach; ?>
			  			</tr>
			  		<?php endfor; ?>
			  	</table>
			  	<!-- <a href="deconnexion_form1_3_2.php" class="calendar__button">+</a> -->
			  	</div>

			  </div>

			</body>
			<?php
	}

	function deconnexion_form1_3_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			require('Events.php');
			$events = new Events();
			$event = $events->find($_GET['Id_evenement']);
			// echo htmlentities($event['Id_evenement']);
			// echo "<pre>";
			// print_r(var_dump($event));
			// echo "</pre>";
			?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_3_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_3.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						      	
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			  <div class="form">

					<h3><p>Editer l'événement : <?= htmlentities($event['Titre']); ?></p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_3_1.php">

							<input hidden="" type="number" name="Id_evenement" value="<?= htmlentities($event['Id_evenement']); ?>">
							<input hidden="" type="number" name="Matricule_personnel" value="<?= $_SESSION['Matricule_personnel']; ?>">

							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTitre">Titre</label>
									        </div>
									        <!--  "#^[A-Za-z'àáâãäåçèéêëìíîïðòóôõöùúûüýÿ -]+$#" -->
									        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomTitre" name="titre" placeholder="Titre de l'événement" required="" aria-describedby="inputGroupPrepend"  value="<?= htmlentities($event['Titre']); ?>">

									        <?php if (!isset($_REQUEST['titre1'])): ?>
									        	<span>au moin trois (3) lettres ou chiffres!</span>
									       	<?php endif ?>

									       	<?php if (isset($_REQUEST['titre1'])): ?>
									        	<p><?= $_REQUEST['titre1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDate">Date</label>
									        </div>

									        <input type="date" maxlength="50" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" required="" class="form-control" id="validationCustomDate" name="date" aria-describedby="inputGroupPrepend"  value="<?= (new DateTime($event['Date_debut']))->format('Y-m-d'); ?>">
									        <?php if (!isset($_REQUEST['date1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['date1'])): ?>
									        	<p><?= $_REQUEST['date1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemarrage">Démarrage</label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="first" id="validationCustomDemarrage" aria-describedby="inputGroupPrepend"  value="<?= (new DateTime($event['Date_debut']))->format('H:i'); ?>" >
									        <?php if (!isset($_REQUEST['first1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['first1'])): ?>
									        	<p><?= $_REQUEST['first1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFin">Fin</label>
									        </div>

									        <input type="time" maxlength="50" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="last" id="validationCustomFin" aria-describedby="inputGroupPrepend" value="<?= (new DateTime($event['Date_fin']))->format('H:i'); ?>" >
									        <?php if (!isset($_REQUEST['last1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['last1'])): ?>
									        	<p><?= $_REQUEST['last1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <label for="validationCustomDescription" class="input-group-text" id="inputGroupPrepend">Description</label>
									        

									        <textarea class="form-control"  maxlength="250" name="description" id="validationCustomDescription" placeholder="Description" aria-describedby="inputGroupPrepend"  style="resize: none; height: 100px;" required=""><?= htmlentities($event['Description']); ?></textarea>
									        <?php if (!isset($_REQUEST['description1'])): ?>
									        	<span>Renseignez une description!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['description1'])): ?>
									        	<p><?= $_REQUEST['description1']; ?></P>
									       	<?php endif ?>

									    </div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <input type="submit" class="bouton" name="envoi" value="Modifier l'événement">
						 					<input type="submit" class="bouton" name="envoi2" value="Supprimer l'événement">

									    </div>
							   		</div>	

							</div>

						</form>
				</div>	

			</body>
			<?php
	}

	function deconnexion_form1_3_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}

			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<link rel="stylesheet" href="css/deconnexion_form1_3_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_3.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						      
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

				<div class="form">

					<h3><p>Ajouter un événement</p></h3>

					<form class="needs-validation" novalidate method="REQUEST" action="deconnexion1_3_2.php">

							<input hidden="" type="number" name="Matricule_personnel" value="<?= $_SESSION['Matricule_personnel']; ?>">

							<div class="row">

							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTitre">Titre</label>
									        </div>

									        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{3,50}" class="form-control" id="validationCustomTitre" name="titre" placeholder="Titre de l'événement" required="" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['titre'])&&$_REQUEST['titre']!='')?$_REQUEST['titre']:'';?>">
									        <?php if (!isset($_REQUEST['titre1'])): ?>
									        	<span>au moin trois (3) lettres ou chiffres!</span>
									       	<?php endif ?>

									       	<?php if (isset($_REQUEST['titre1'])): ?>
									        	<p><?= $_REQUEST['titre1']; ?></P>
									       	<?php endif ?>
									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDate">Date</label>
									        </div>

									        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDate" name="date" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['date'])&&$_REQUEST['date']!='')?$_REQUEST['date']:date('Y-m-d');?>">
									        <?php if (!isset($_REQUEST['date1'])): ?>
									        	<span>Renseigneez une date!</span>
									       	<?php endif ?>


									        <?php if (isset($_REQUEST['date1'])): ?>
									        	<p><?= $_REQUEST['date1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							   		<div class="col-md-4 mb-3 block2">
							 
								    	<div class="input-group">

									    	<div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDemarrage">Démarrage</label>
									        </div>

									        <input type="time" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="first" id="validationCustomDemarrage" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['first'])&&$_REQUEST['first']!='')?$_REQUEST['first']:'08:00';?>" >
									        <?php if (!isset($_REQUEST['first1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['first1'])): ?>
									        	<p><?= $_REQUEST['first1']; ?></P>
									       	<?php endif ?>

									    </div>
									    <div class="input-group input-group-left">
									        <div class="input-group-prepend">
									         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomFin">Fin</label>
									        </div>

									        <input type="time" maxlength="50" required="" pattern="(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])" class="form-control" name="last" id="validationCustomFin" aria-describedby="inputGroupPrepend" value="<?=(isset($_REQUEST['last'])&&$_REQUEST['last']!='')?$_REQUEST['last']:'20:00';?>" >
									        <?php if (!isset($_REQUEST['last1'])): ?>
									        	<span>Renseignez une heure!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['last1'])): ?>
									        	<p><?= $_REQUEST['last1']; ?></P>
									       	<?php endif ?>

								     	</div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
								   
									        <label for="validationCustomDescription" class="input-group-text" id="inputGroupPrepend">Description</label>
									        

									        <textarea  class="form-control"  maxlength="250" name="description" id="validationCustomDescription" placeholder="Description" aria-describedby="inputGroupPrepend"  style="resize: none; height: 100px;" required=""><?=(isset($_REQUEST['description'])&&$_REQUEST['description']!='')?$_REQUEST['description']:'';?></textarea>
									        <?php if (!isset($_REQUEST['description1'])): ?>
									        	<span>Renseignez une description!</span>
									       	<?php endif ?>

									        <?php if (isset($_REQUEST['description1'])): ?>
									        	<p><?= $_REQUEST['description1']; ?></P>
									       	<?php endif ?>

									    </div>
							   		</div>	

							</div>

							<div class="row">
							
									<div class="col-md-4 mb-3 block1">
							 
								    	<div class="input-group input-groupD">
		 					
								    		<input type="submit" class="bouton" name="envoi" value="Enregistrer">

									    </div>
							   		</div>	

							</div>

						 	

						</form>
				</div>	

				<!-- <script>
					// Example starter JavaScript for disabling form submissions if there are invalid fields
					(function() {
					  'use strict';
					  window.addEventListener('load', function() {
					    // Fetch all the forms we want to apply custom Bootstrap validation styles to
					    var forms = document.getElementsByClassName('needs-validation');
					    // Loop over them and prevent submission
					    var validation = Array.prototype.filter.call(forms, function(form) {
					      form.addEventListener('submit', function(event) {
					        if (form.checkValidity() === false) {
					          event.preventDefault();
					          event.stopPropagation();
					        }
					        form.classList.add('was-validated');
					      }, false);
					    });
					  }, false);
					})();
				</script> -->
						
	
			  	

			</body>
			<?php
	}

	function deconnexion_form1_4() {

			session_start();
			if (!$_SESSION['Mot_de_passe']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_form1_4.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_form1_1.php"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
						    
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button>Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			
			</body>
			<?php
	}

	


	function deconnexion_admin_form1() {

		session_start();
		if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
		 	header('Location: connexion_form.php');
		}

		?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1.css?v=<?php echo time(); ?>">
			<body>
				<iframe src="deconnexion_admin_form1_1.php" id="corps" name="zone1"></iframe>
			</body>
		<?php  
	}


	function deconnexion_admin_form1_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><h3 id="titre">Tableau de bord</h3></li>
					
						        <li class="menu-item" id="haut"><a href="deconnexion_admin_form1_2.php" target="zone1"><button><img src="image/add.png">&nbsp;&nbsp;&nbsp;&nbsp;Ajouter</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3.php" target="zone1"><button><img src="image/search.png">&nbsp;&nbsp;&nbsp;&nbsp;Consulter</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_4.php" target="zone1"><button><img src="image/bag.png">&nbsp;&nbsp;&nbsp;&nbsp;Affecter personnel</button></a></li>
						        <li class="menu-item" id="bas"><a href="deconnexion_admin_form1_6.php" target="zone1"><button><img src="image/compte.png">&nbsp;&nbsp;&nbsp;&nbsp;Mon compte</button></a></li>
						        <li class="menu-item"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap_min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" >

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php" target="zone1"><button id="retour">&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/back.png">&nbsp;&nbsp;&nbsp;&nbsp;</button></a></li>
					
						        <li class="menu-item" id="bas"><a href="deconnexion.php" ><button><img src="image/log-out.png">&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</button></a></li>
					      </ul>
				    </nav>
			  </header>	

  			<?php
  				$selected = '';

  				if (isset($_POST['select'])) {
  					$selected = $_POST['select'];
  				}

  				function select($select) {
  					$ajout = array('----Choix d\'ajout----' => 0, 'Personnel' => 1, 'Bureau' => 2, 'Fonction' => 3, 'Demande' => 4, 'Stage' => 5);
  					$options = '';
  					foreach ($ajout as $a => &$b) {
  						if ($select == $b) {
  							$options .= '<option value="'.$b.'" selected>'.$a.'</option>';
  						} else {
  							$options .= '<option value="'.$b.'" >'.$a.'</option>';
  						}

  					}
  					return $options;
  				}

  			?>

				
  			<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" class="form1">
  				<div class="select">
	  				<select class="select1" name="select" onchange="this.form.submit();">
						<?= select($selected); ?>
					</select>
				</div>
  			</form>

  			<?=select1($selected);?>
			  				


			

			</body>
			<?php
	}

	function select1($s) { 

		if ($s == 1) {
			
			?>

			<div class="form">

						<h3><p>Affecter un nouveau personnel</p></h3>

						<form class="needs-validation" novalidate method="REQUEST" action="select1_1.php">

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomMatricule">Matricule</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomMatricule" name="Matricule_personnel" placeholder="Matricule du personnel" required="" aria-describedby="inputGroupPrepend">

										        <?php if (!isset($_REQUEST['Matricule_personnel1'])): ?>
										        	<span>Saisissez le matricule!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Matricule_personnel1'])): ?>
										        	<p><?= $_REQUEST['Matricule_personnel1']; ?></P>
										       	<?php endif ?>

										    </div>

										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTelephone">Téléphone</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomTelephone" name="Telephone" placeholder="Téléphone du personnel" required="" aria-describedby="inputGroupPrepend">

										        <?php if (!isset($_REQUEST['Telephone1'])): ?>
										        	<span>Saisissez le téléphone!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Telephone1'])): ?>
										        	<p><?= $_REQUEST['Telephone1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	



								</div>

								<div class="row">

								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group">

										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomNom">Nom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomNom" name="Nom" placeholder="Nom du personnel" required="" aria-describedby="inputGroupPrepend">

										        <?php if (!isset($_REQUEST['nom1'])): ?>
										        	<span>Saisissez le nom!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['nom1'])): ?>
										        	<p><?= $_REQUEST['nom1']; ?></P>
										       	<?php endif ?>

										    </div>
										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomPrenom">Prénom</label>
										        </div>
										        
										        <input type="text" maxlength="50"  pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomPrenom" name="Nom" placeholder="Prénom du personnel" required="" aria-describedby="inputGroupPrepend">

										        <?php if (!isset($_REQUEST['prenom1'])): ?>
										        	<span>Saisissez le prenom!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['prenom1'])): ?>
										        	<p><?= $_REQUEST['prenom1']; ?></P>
										       	<?php endif ?>

										    </div>    
								   		</div>	

								   		<div class="col-md-4 mb-3 block2">
								 
									    	<div class="input-group">

										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateDebut">Début affectation</label>
										        </div>

										        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateDebut" name="dateD" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['dateD'])&&$_REQUEST['dateD']!='')?$_REQUEST['dateD']:date('Y-m-d');?>">
										        <?php if (!isset($_REQUEST['dateD1'])): ?>
										        	<span>Renseigneez une date!</span>
										       	<?php endif ?>


										        <?php if (isset($_REQUEST['dateD1'])): ?>
										        	<p><?= $_REQUEST['dateD1']; ?></P>
										       	<?php endif ?>

										    </div>
										    <div class="input-group input-group-left">
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomDateFin">Fin affectation</label>
										        </div>

										        <input type="date" required="" pattern="[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])" class="form-control" id="validationCustomDateFin" name="dateF" aria-describedby="inputGroupPrepend"  value="<?=(isset($_REQUEST['dateF'])&&$_REQUEST['dateF']!='')?$_REQUEST['dateF']:date('Y-m-d');?>">
										        <?php if (!isset($_REQUEST['dateF1'])): ?>
										        	<span>Renseigneez une date!</span>
										       	<?php endif ?>


										        <?php if (isset($_REQUEST['dateF1'])): ?>
										        	<p><?= $_REQUEST['dateF1']; ?></P>
										       	<?php endif ?>

									     	</div>
								   		</div>	

								</div>

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-group">
									   
										        <div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomAdresse">Adresse</label>
										        </div>
										        
										        <input type="text" pattern="[A-Za-z0-9'àáâãäåèéêëìíîïðòóôõöùúûüýÿ -]{2,50}" class="form-control" id="validationCustomAdresse" name="Adresse" placeholder="Adresse du personnel" required="" aria-describedby="inputGroupPrepend">

										        <?php if (!isset($_REQUEST['Adresse1'])): ?>
										        	<span>Saisissez l'adresse!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Adresse1'])): ?>
										        	<p><?= $_REQUEST['Adresse1']; ?></P>
										       	<?php endif ?>

										    </div>

										    <div class="input-group input-group-left">
										    	<div class="input-group-prepend">
										         	<label class="input-group-text" id="inputGroupPrepend" for="validationCustomTelephone">Téléphone</label>
										        </div>
										        
										        <input type="number"  pattern="[0-9]{1,50}" class="form-control" id="validationCustomTelephone" name="Telephone" placeholder="Téléphone du personnel" required="" aria-describedby="inputGroupPrepend">

										        <?php if (!isset($_REQUEST['Telephone1'])): ?>
										        	<span>Saisissez le téléphone!</span>
										       	<?php endif ?>

										       	<?php if (isset($_REQUEST['Telephone1'])): ?>
										        	<p><?= $_REQUEST['Telephone1']; ?></P>
										       	<?php endif ?>

										    </div>  
								   		</div>	



								</div>


								<div class="row">

								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group">

										    	<select>
										    		<option>1</option>
										    		<option>1</option>
										    		<option>1</option>
										    		<option>1</option>
										    	</select>	

										    </div>
										   
								   		</div>	

								   		<div class="col-md-4 mb-3 block2">
								 
									    	<div class="input-group">
	
										    	<select>
										    		<option>1</option>
										    		<option>1</option>
										    		<option>1</option>
										    		<option>1</option>
										    	</select>

										    </div>
										   
								   		</div>	

								</div>

								<div class="row">
								
										<div class="col-md-4 mb-3 block1">
								 
									    	<div class="input-group input-groupD">
									   
										        <input type="submit" class="bouton" name="envoi" value="Affeccter">
							 					

										    </div>
								   		</div>	

								</div>

							</form>
					</div>
					<?php 
		}

	}


	function deconnexion_admin_form1_2_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_2_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_2_3() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_3.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_2_4() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_4.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_2_5() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_5.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_2_6() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_6.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_2_7() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_7.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}


	function deconnexion_admin_form1_2_8() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_2_8.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_2.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="deconnexion_admin_form1_3_1.php" target="zone1"><button>Conslter un personnel</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3_2.php" target="zone1"><button>Conslter un bureau</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3_3.php" target="zone1"><button>Conslter une fonction</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3_4.php" target="zone1"><button>Conslter un stage</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3_5.php" target="zone1"><button>Conslter une demande</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3_6.php" target="zone1"><button>Conslter un établissement</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3_7.php" target="zone1"><button>Conslter un niveau</button></a></li>
						        <li class="menu-item"><a href="deconnexion_admin_form1_3_8.php" target="zone1"><button>Conslter une domaine</button></a></li>

						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3_3() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_3.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3_4() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_4.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3_5() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_5.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3_6() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_6.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_3_7() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_7.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}


	function deconnexion_admin_form1_3_8() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_3_8.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_3.php" target="zone1"><button id="retour">RETOUR</button></a></li>
					
						        <li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						        
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_4() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_4.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php" target="zone1"><button id="retour">RETOUR</button></a></li>
								<li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						       
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_5() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_5.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php" target="zone1"><button id="retour">RETOUR</button></a></li>
								<li class="menu-item" id="haut"><a href="deconnexion_admin_form1_5_1.php" target="zone1"><button>Imprimer les stages</button></a></li>
								<li class="menu-item"><a href="deconnexion_admin_form1_5_2.php" target="zone1"><button>Imprimer les stagiaires</button></a></li>
								<li class="menu-item"><a href="deconnexion_admin_form1_5_3.php" target="zone1"><button>Imprimer une attestation</button></a></li>
								<li class="menu-item"><a href="deconnexion_admin_form1_5_4.php" target="zone1"><button>Imprimer une carte stagiaire</button></a></li>
						       	
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_5_1() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_5_1.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_5.php" target="zone1"><button id="retour">RETOUR</button></a></li>
								<li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
					       	
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_5_2() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_5_2.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_5.php" target="zone1"><button id="retour">RETOUR</button></a></li>
								<li class="menu-item" id="haut"><a href="" target="zone1"></a></li>						
						       	
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_5_3() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_5_3.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_5.php" target="zone1"><button id="retour">RETOUR</button></a></li>
								<li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
						       	
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}

	function deconnexion_admin_form1_5_4() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_5_4.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_5.php" target="zone1"><button id="retour">RETOUR</button></a></li>
								<li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
								
						       	
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}





	function deconnexion_admin_form1_6() {

			session_start();
			if (!$_SESSION['Mot_de_passe_admin']) { // Si la session password n'est pas actif sur le site
			 	header('Location: connexion_form.php');
			}
			?>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/deconnexion_admin_form1_6.css?v=<?php echo time(); ?>">
			<body>
				
				<header>
				    <label for="menu-cb" class="menu-label">
					      <svg viewBox="0 0 32 32" fill="#D49D0D">
					        <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
					        <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
					      </svg>
					</label>

					<input id="menu-cb" type="checkbox" class="menu-cb" checked="">

					
					
				    <nav class="menu-nav">
					      <ul>
					      		<li><a href="deconnexion_admin_form1_1.php" target="zone1"><button id="retour">RETOUR</button></a></li>
						       	<li class="menu-item" id="haut"><a href="" target="zone1"></a></li>
					      </ul>
				    </nav>
			  </header>

			</body>
			<?php
	}


	function confirmer_password_form() {
		session_start();
		if (!$_SESSION['Id_utilisateurs']) { // Si la session password n'est pas actif sur le site
		 	header('Location: connexion_form.php');
		}
		if (isset($_SESSION['Login'])) {
			$Login = $_SESSION['Login'];
		}
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/confirmer_password_form.css?v=<?php echo time(); ?>">
		<body>
		<form action="confirmer_password.php" method="REQUEST">
		
				<div class="formContainer">

					<div class="formSection">

						<h2>Réinitialisez votre mot de passe maintenant!</h2>
						
						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/user.png">
							</div>
							<input type="text" name="Login" disabled="" id="Login" placeholder="Login" value="<?=$Login;?>" >
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe" id="userPassword" placeholder="Entrez votre mot de passe" value="<?=(isset($_REQUEST['Mot_de_passe'])&&$_REQUEST['Mot_de_passe']!='')?$_REQUEST['Mot_de_passe']:'';?>">
						</div>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/lock.png">
							</div>
							<input type="password" name="Mot_de_passe1" id="userPassword" placeholder="Mot de passe à nouveau" value="<?=(isset($_REQUEST['Mot_de_passe1'])&&$_REQUEST['Mot_de_passe1']!='')?$_REQUEST['Mot_de_passe1']:'';?>">
						</div>

						<div class="btnRow">
							<input type="submit" value="Modifier le mot de passe" class="btn" name="envoi" id="loginBtn">
						</div>

					</div>

		
			</div>

		</form>
			
		</body>
		
		<?php
	}

	function modifier_password_form() {
		
		session_start();
		$_SESSION = array(); // Stocker toutes les sessions du site dans le tableau
		session_destroy();
	
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/modifier_password_form.css?v=<?php echo time(); ?>">
		<body>
		<form action="modifier_password.php" method="REQUEST">

			<div class="formContainer">

					<div class="formSection">

						<h2>Récupérer votre mot de passe d'utilisateur</h2>

						<P>Veillez saisir votre matricule lors de la création de votre compte.</P>

						<div class="inputRow">
							<div class="inputIcon">
								<img src="image/user.png">
							</div>
							<input type="text" name="Login" id="userName" placeholder="Matricule" value="<?=(isset($_REQUEST['Login'])&&$_REQUEST['Login']!='')?$_REQUEST['Login']:'';?>">
						</div>

						<div class="btnRow">
							<input type="submit" value="Prochain" class="btn" name="envoi" id="loginBtn">
						</div>
						<div class="btnRow">
							<input type="button" value="Annuler" class="btn" name="envoi1" id="loginBtn1" onclick="window.location.href='connexion_form.php';">
						</div>

					</div>
					
			</div>
					

		</form>
			

		</body>
		<?php
	}

?>