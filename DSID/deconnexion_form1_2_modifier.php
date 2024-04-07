<?php

		if (isset($_REQUEST['Id_planning']) && isset($_REQUEST['Matricule_personnel']) && isset($_REQUEST['titre']) && isset($_REQUEST['tache']) && isset($_REQUEST['Date_debut']) && isset($_REQUEST['Date_fin'])) {

			$Id_planning = htmlspecialchars($_REQUEST['Id_planning']);
			$Matricule_personnel = htmlspecialchars($_REQUEST['Matricule_personnel']);
			$titre = htmlspecialchars($_REQUEST['titre']);
			$tache = htmlspecialchars($_REQUEST['tache']);

			$Date_debut = new DateTime(htmlspecialchars($_REQUEST['Date_debut']));
			$Date_fin = new DateTime(htmlspecialchars($_REQUEST['Date_fin']));

			$Date_debut_date =  $Date_debut->format('Y-m-d');
			$Date_debut_heure =  $Date_debut->format('H:i');
			$Date_fin_date =  $Date_fin->format('Y-m-d');
			$Date_fin_heure =  $Date_fin->format('H:i');
		
			


			//echo "$Id_planning $Matricule_personnel $tache $titre $Date_debut_date $Date_debut_heure $Date_fin_date $Date_fin_heure ";
			


			header('Location: deconnexion_form1_2.php?Id_planning='.urldecode($Id_planning).'&titre='.urldecode($titre).'&Date_debut='.urldecode($Date_debut_date).'&Date_fin='.urldecode($Date_fin_date).'&first='.urldecode($Date_debut_heure).'&last='.urldecode($Date_fin_heure).'&tache='.urldecode($tache).'');


		} 

		

		


?>