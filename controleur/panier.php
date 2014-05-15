<?php
include_once('modele/User.class.php');
include_once('modele/Produit.class.php');


require_once('titre.php');
require_once('blocdroit.php');
require_once('footer.php');


if(isset($_GET["action"]))
{
	if($_GET["action"] == "order")
	{
		if($_GET["type"] == "submit")
		{
			$dTitre = "Commande envoyé…";
			$dContenu = "panierSubmit.php";
		}
		else
		{
			$dTitre = "Votre panier";
			$dContenu = "panierView.php";
		}
	}
	else
	{
		$dContenu = "main.php";
	}
}
else
{
	require("main.php");
}

require ("vue/template.php");

function contenu($donnees = NULL)
{
	if(isset($donnees)){
		require ($donnees);
	}
}
?>
