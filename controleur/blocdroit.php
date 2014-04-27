<?php
function blocDroit(){
	echo '<div id="login">';
	if(isset($_SESSION['nom'])){
		echo '<p>Bonjour '. $_SESSION['nom'] .'.</p>';
	}
	else{
		echo '<p>Veuillez vous connecter</p>';
	}
	echo '</div>';
	echo '<div id="panier">';
	if(isset($_SESSION['panier'])){
		echo '<ul>';
		foreach($_SESSION['panier'] as $i => $id){
			echo '<li>'. $id["nb"] .' <a href="voirProduit='. $id["idProduit"] .'">'. $id["nom"] .'</a> prix : '. $id["prix"] .'</li>';
		}
		echo '</ul>';
	}
	else{
		echo '<p>Votre panier est vide</p>';
	}
}
?>
