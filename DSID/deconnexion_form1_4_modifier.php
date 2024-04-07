<?php

		if (isset($_REQUEST['Id_stage']) && isset($_REQUEST['Nom_stage']) && isset($_REQUEST['Sujet_stage']) && isset($_REQUEST['Niveau_stage']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Id_demande']) && isset($_REQUEST['Demandeur'])) {


			$Id_stage = htmlspecialchars($_REQUEST['Id_stage']);
			$Id_personnel = $_REQUEST['Id_personnel'];
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Nom_stage = htmlspecialchars($_REQUEST['Nom_stage']);
			$Sujet_stage = htmlspecialchars($_REQUEST['Sujet_stage']);
			$Niveau_stage = htmlspecialchars($_REQUEST['Niveau_stage']);
			$Demandeur = htmlspecialchars($_REQUEST['Demandeur']);



			header('Location: deconnexion_form1_4_1.php?Id_stage='.urldecode($Id_stage).'&Id_personnel='.urldecode($Id_personnel).'&Id_demande='.urldecode($Id_demande).'&Stage='.urldecode($Nom_stage).'&Sujet='.urldecode($Sujet_stage).'&selectNiveau='.htmlspecialchars($Niveau_stage).'&selectEncadrant='.urldecode($Id_personnel).'&Demandeur='.urldecode($Demandeur).'&selectStagiaire='.urldecode($Id_demande).'');



		} else if (isset($_REQUEST['Demandeur']) && isset($_REQUEST['Id_stage']) && isset($_REQUEST['Id_demande']) && isset($_REQUEST['Id_personnel']) && isset($_REQUEST['Stage']) && isset($_REQUEST['Sujet']) && isset($_REQUEST['Date_debut']) && isset($_REQUEST['Date_fin']) && isset($_REQUEST['Rapport']) && isset($_REQUEST['selectNote']) && isset($_REQUEST['Appreciations']) && isset($_REQUEST['Observation']) && isset($_REQUEST['Travail']) && isset($_REQUEST['Evaluation']) && isset($_REQUEST['Sociabilité']) && isset($_REQUEST['selectSatisfait']) && isset($_REQUEST['selectFormation'])) {


			$Demandeur = htmlspecialchars($_REQUEST['Demandeur']);
			$Id_stage = $_REQUEST['Id_stage'];
			$Id_demande = htmlspecialchars($_REQUEST['Id_demande']);
			$Id_personnel = htmlspecialchars($_REQUEST['Id_personnel']);
			$Stage = htmlspecialchars($_REQUEST['Stage']);
			$Sujet = htmlspecialchars($_REQUEST['Sujet']);
			$Date_debut = htmlspecialchars($_REQUEST['Date_debut']);
			$Date_fin = htmlspecialchars($_REQUEST['Date_fin']);
			$Rapport = htmlspecialchars($_REQUEST['Rapport']);
			$selectNote = htmlspecialchars($_REQUEST['selectNote']);
			$Appreciations = htmlspecialchars($_REQUEST['Appreciations']);
			$Observation = htmlspecialchars($_REQUEST['Observation']);
			$Travail = htmlspecialchars($_REQUEST['Travail']);
			$Evaluation = htmlspecialchars($_REQUEST['Evaluation']);
			$Sociabilité = htmlspecialchars($_REQUEST['Sociabilité']);
			$selectSatisfait = htmlspecialchars($_REQUEST['selectSatisfait']);
			$selectFormation = htmlspecialchars($_REQUEST['selectFormation']);



			header('Location: deconnexion_form1_4_1.php?Demandeur='.urldecode($Demandeur).'&Id_stage='.urldecode($Id_stage).'&Id_demande='.urldecode($Id_demande).'&Id_personnel='.urldecode($Id_personnel).'&Stage='.urldecode($Stage).'&Sujet='.htmlspecialchars($Sujet).'&Date_debut='.urldecode($Date_debut).'&Date_fin='.urldecode($Date_fin).'&Rapport='.urldecode($Rapport).'&selectNote='.urldecode($selectNote).'&Appreciations='.urldecode($Appreciations).'&Observation='.urldecode($Observation).'&Travail='.urldecode($Travail).'&Evaluation='.urldecode($Evaluation).'&Sociabilité='.urldecode($Sociabilité).'&selectSatisfait='.urldecode($selectSatisfait).'&selectFormation='.urldecode($selectFormation).'');



		} else {
			header('Location: deconnexion_form1_4.php');
		}



?>