<?php
include_once('modele/User.class.php');

require_once('titre.php');
require_once('blocdroit.php');
require_once('footer.php');

if(isset($_GET["action"]))
{
	if($_GET["action"] == "edit")
	{
		if($_GET["type"] == "submit")
		{
			$dTitre = "Mis à jour";
			$dContenu = "profilUpdate.php";
		}
		else
		{
			$dTitre = "Mettre à jour votre profil";
			$dContenu = "profilEdit.php";
		}
	}
	elseif($_GET["action"] == "view")
	{
		$dTitre = "Votre profil";
		$dContenu = "profilView.php";
	}
	elseif($_GET["action"] == "new")
	{
		if($_GET["type"] == "submit")
		{
			$dTitre = "Créer votre iueuieueicompte";
			$dContenu = "profilSubmit.php";
		}
		else
		{
			$dTitre = "Créer un compte";
			$dContenu = "profilNew.php";
		}
	}
	else
	{
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
