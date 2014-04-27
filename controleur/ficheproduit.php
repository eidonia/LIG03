<?php

// require "../modele/class.produit.php";
require_once("titre.php");
require_once("blocdroit.php");
require_once("footer.php");

$dTitre = $produit["nom"];
$dContenu = $produit;
$dFooter = $dFooter;
require ("vue/template.php");
function contenu($donnees){
	echo '<div id="ficheProduit">';
	echo '<h1>'. $donnees["nom"] .'</h1>';
	echo '<p>'. $donnees["description"] .'</p>';
	echo '<img src="'. $donnees["image"] .'" alt="'. $donnees["nom"] .'"/>';
	echo '</div>';
}	
?>
