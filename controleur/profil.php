<?php
include_once('modele/User.class.php');

require_once('titre.php');
require_once('blocdroit.php');
require_once('footer.php');

if(isset($_GET["action"]))
{
	if($_GET["action"] == edit)
	{
		$dTitre = "Mettre à jour votre profil";
		$dContenu = "profilEdit.php";
	}
	elseif($_GET["action"] == view)
	{
		$dTitre = "Votre profil";
		$dContenu = "profilView.php";
	}
	elseif($_GET["action"] == submit)
	{
		$dTitre = "Mis à jour";
		$dContenu = "profilUpdate.php";
	}
	else{
		$dContenu = "main.php";
	}
}
else
{
		//require("main.php");
}

require ("vue/template.php");

function contenu($donnees = NULL)
{
	if(isset($donnees)){
		require ($donnees);
	}
}
?>
