<?php

session_start(); 					// Démarrage de la session

$_SESSION['nom'] = 'Alex';

// $_SESSION['panier']['id'] = ['idProduit']['nom']['prix']['nb']
$_SESSION['panier'][0]['idProduit'] = '1';
$_SESSION['panier'][0]['nom'] = 'Barrette';
$_SESSION['panier'][0]['prix'] = '34,23';
$_SESSION['panier'][0]['nb'] = '2';

	$dContenu = array (
		"1" => array("titre" => "Coucou", "contenu" => "message description", "date" => "10/19/29", "numCommentaire" => "12"),
		"2" => array("titre" => "Kiki", "contenu" => "Caca", "date" => "10/32/2282", "numCommentaire" => "12")
		);
	$dFooter = array (
		"1" => array("1" => array("nom" => "Coucou", "url" => "index.php"), "2" => array("nom" => "Cuicui", "url" => "cuicui.php")),
		"2" => array("1" => array("nom" => "Caca", "url" => "caca.php"),)
		);

$produit = array(
	"id" => "1", "nom" => "Barrette memoire", "description" => "Barrette memoire 1GHz", "prix" => "30", "image" => "vue/image/barrette.png");

try {
	if (isset($_GET['page'])){ 			// Test $_GET
		// On récupère action=XX
		$action=strtolower($_GET['page']);
		require $action.'.php';
	}
	else{
		require 'main.php';			// $_GET vide
	}
}
catch (Exception $e) {
	erreur($e->getMessage());
	}
?>
