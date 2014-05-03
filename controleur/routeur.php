<?php


// Test de session
//$_SESSION['nom'] = 'Alex';

// $_SESSION['panier']['id'] = ['idProduit']['nom']['prix']['nb']
//$_SESSION['panier'][0]['idProduit'] = '1';
//$_SESSION['panier'][0]['nom'] = 'Barrette';
//$_SESSION['panier'][0]['prix'] = '34,23';
//$_SESSION['panier'][0]['nb'] = '2';

	$dContenu = array (
		"1" => array("titre" => "Coucou", "contenu" => "message description", "date" => "10/19/29", "numCommentaire" => "12"),
		"2" => array("titre" => "Kiki", "contenu" => "Caca", "date" => "10/32/2282", "numCommentaire" => "12")
		);


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
