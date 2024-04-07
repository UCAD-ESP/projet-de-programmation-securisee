<?php

		if (isset($_REQUEST['Id_bureau']) && isset($_REQUEST['Code']) && isset($_REQUEST['Nom'])) {

			$Id_bureau = htmlspecialchars($_REQUEST['Id_bureau']);
			$Code = htmlspecialchars($_REQUEST['Code']);
			$Nom = htmlspecialchars($_REQUEST['Nom']);



			header('Location: deconnexion_admin_form1_2.php?Id_bureau='.urldecode($Id_bureau).'&Code='.$Code.'&Nom='.urldecode($Nom).'&select=2');


		} else if (isset($_REQUEST['Id_fonction']) && isset($_REQUEST['Code']) && isset($_REQUEST['Nom'])) {

			$Id_fonction = htmlspecialchars($_REQUEST['Id_fonction']);
			$Code = htmlspecialchars($_REQUEST['Code']);
			$Nom = htmlspecialchars($_REQUEST['Nom']);



			header('Location: deconnexion_admin_form1_2.php?Id_fonction='.urldecode($Id_fonction).'&Code='.urldecode($Code).'&Nom='.urldecode($Nom).'&select=3');


		} else if (isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['Date_debut_affectation']) && isset($_REQUEST['Date_fin_affectation']) && isset($_REQUEST['Nom']) && isset($_REQUEST['Prenom']) && isset($_REQUEST['Telephone']) && isset($_REQUEST['Adresse']) && isset($_REQUEST['Email']) && isset($_REQUEST['selectBureau']) && isset($_REQUEST['selectFonction'])) {

			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$Date_debut_affectation = htmlspecialchars($_REQUEST['Date_debut_affectation']);
			$Date_fin_affectation = htmlspecialchars($_REQUEST['Date_fin_affectation']);
			$Nom = htmlspecialchars($_REQUEST['Nom']);
			$Prenom = htmlspecialchars($_REQUEST['Prenom']);
			$Telephone = htmlspecialchars($_REQUEST['Telephone']);
			$Adresse = htmlspecialchars($_REQUEST['Adresse']);
			$Email = htmlspecialchars($_REQUEST['Email']);
			$selectBureau = htmlspecialchars($_REQUEST['selectBureau']);
			$selectFonction = htmlspecialchars($_REQUEST['selectFonction']);


			header('Location: deconnexion_admin_form1_2.php?Id_personnel='.urldecode($Id_personnel).'&Matricule_personnel='.urldecode($Matricule_personnel).'&Date_debut_affectation='.urldecode($Date_debut_affectation).'&Date_fin_affectation='.urldecode($Date_fin_affectation).'&Nom='.urldecode($Nom).'&Prenom='.urldecode($Prenom).'&Telephone='.urldecode($Telephone).'&Adresse='.urldecode($Adresse).'&Email='.urldecode($Email).'&selectBureau='.urldecode($selectBureau).'&selectFonction='.urldecode($selectFonction).'&select=1');

		} else if (isset($_REQUEST['Id_demande']) && isset($_REQUEST['Id_etablissement']) && isset($_REQUEST['Niveau']) && isset($_REQUEST['Domaine']) && isset($_REQUEST['NomD']) && isset($_REQUEST['PrenomD']) && isset($_REQUEST['dateN']) && isset($_REQUEST['Lieu']) && isset($_REQUEST['AdresseD']) && isset($_REQUEST['TelephoneD']) && isset($_REQUEST['EmailD']) && isset($_REQUEST['selectDecision']) && isset($_REQUEST['selectEtablissement']) && isset($_REQUEST['selectEtablissement'])) {

			
			$Id_demande = $_REQUEST['Id_demande'];
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




			header('Location: deconnexion_admin_form1_2.php?Id_demande='.urldecode($Id_demande).'&Id_etablissement='.urldecode($Id_etablissement).'&NomD='.urldecode($NomD).'&PrenomD='.urldecode($PrenomD).'&dateN='.urldecode($dateN).'&Lieu='.urldecode($Lieu).'&AdresseD='.urldecode($AdresseD).'&TelephoneD='.urldecode($TelephoneD).'&EmailD='.urldecode($EmailD).'&selectDecision='.urldecode($selectDecision).'&Niveau='.urldecode($Niveau).'&Domaine='.urldecode($Domaine).'&selectEtablissement='.urldecode($selectEtablissement).'&select=4');

		} else if (isset($_REQUEST['Id_etablissement']) && isset($_REQUEST['NomE']) && isset($_REQUEST['BP']) && isset($_REQUEST['villeE']) && isset($_REQUEST['AdresseE']) && isset($_REQUEST['TelephoneE']) && isset($_REQUEST['EmailE'])) {

			$Id_etablissement = htmlspecialchars($_REQUEST['Id_etablissement']);
			$NomE = htmlspecialchars($_REQUEST['NomE']);
			$BP = htmlspecialchars($_REQUEST['BP']);
			$selectPays = $_REQUEST['selectPays'];
			$villeE = $_REQUEST['villeE'];
			$AdresseE = htmlspecialchars($_REQUEST['AdresseE']);
			$TelephoneE = htmlspecialchars($_REQUEST['TelephoneE']);
			$EmailE = htmlspecialchars($_REQUEST['EmailE']);

			header('Location: deconnexion_admin_form1_2.php?Id_etablissement='.urldecode($Id_etablissement).'&NomE='.urldecode($NomE).'&BP='.urldecode($BP).'&selectPays='.urldecode($selectPays).'&villeE='.urldecode($villeE).'&AdresseE='.urldecode($AdresseE).'&TelephoneE='.urldecode($TelephoneE).'&EmailE='.urldecode($EmailE).'&select=6');


		} else if (isset($_REQUEST['Id_stage']) && isset($_REQUEST['Nom_stage']) && isset($_REQUEST['Sujet_stage']) && isset($_REQUEST['Niveau_stage']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Id_demande'])) {


			$Id_stage = htmlspecialchars($_REQUEST['Id_stage']);
			$Id_personnel = $_REQUEST['Id_personnel'];
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Nom_stage = htmlspecialchars($_REQUEST['Nom_stage']);
			$Sujet_stage = htmlspecialchars($_REQUEST['Sujet_stage']);
			$Niveau_stage = $_REQUEST['Niveau_stage'];



			header('Location: deconnexion_admin_form1_2.php?Id_stage='.urldecode($Id_stage).'&Id_personnel='.urldecode($Id_personnel).'&Id_demande='.urldecode($Id_demande).'&Stage='.urldecode($Nom_stage).'&Sujet='.urldecode($Sujet_stage).'&selectNiveau='.htmlspecialchars($Niveau_stage).'&selectEncadrant='.urldecode($Id_personnel).'&selectStagiaire='.urldecode($Id_demande).'&select=51');



		} else {
			header('Location: deconnexion_admin_form1_2.php');
		}







?>