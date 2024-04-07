<?php

	if (isset($_REQUEST['valider_etablissement'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_2.php?select=6&valider_etablissement='.$rechercher.'');
	}

	if (isset($_REQUEST['valider_etablissement1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_3.php?select=6&valider_etablissement1='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_demande'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_2.php?select=4&valider_demande='.$rechercher.'');
	}

	if (isset($_REQUEST['valider_demande1_1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_3.php?select=4&valider_demande1_1='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_demande1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_2.php?select=5&valider_demande1='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_stage'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_2.php?select=51&valider_stage='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_stage1_1_1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_3.php?select=51&valider_stage1_1_1='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_stage1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_form1_4.php?valider_stage1='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_stage1_1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_form1_4_1.php?valider_stage1_1='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_planning'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_form1_2.php?valider_planning='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_fonction'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_2.php?select=3&valider_fonction='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_fonction1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_3.php?select=3&valider_fonction1='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_bureau'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_2.php?select=2&valider_bureau='.$rechercher.'');
	}

	if (isset($_REQUEST['valider_bureau1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_3.php?select=2&valider_bureau1='.$rechercher.'');
	}

	if (isset($_REQUEST['valider_personnel'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_2.php?select=1&valider_personnel='.$rechercher.'');
	}	

	if (isset($_REQUEST['valider_personnel1'])) {

		$rechercher = htmlspecialchars($_REQUEST['rechercher']);
		header('Location: deconnexion_admin_form1_3.php?select=1&valider_personnel1='.$rechercher.'');
	}	



?>