<?php
require_once ('controleur/login.php');



function blocDroit(){
	echo '<div class="row">';
	echo '<div class="col-md-12">';
	// BLOC LOGIN
	// Connecté ?
	if(NULL !== $_SESSION["user"]["id"])
	{
		require('vue/logged.php');
	}
	else
	{
		require('vue/form.login.php');
	}
	echo '</div>';

	// Panier 
	$panier = (NULL !== $_SESSION['panier']) ? $_SESSION['panier'] : NULL;
	echo '<div class="col-md-12">';
	if(isset($panier))
	{
		echo '<div class="col-md-12">';
		
		foreach($panier as $i => $id){
			echo '<a href="?page=shop&produit='. $i .'">';
			echo '<div class="col-md-1">'. $id["nb"] .'</div>';
			echo '<div class="col-md-9">'. $id["nom"] .'</div>';
			echo '<div class="col-md-1">'. $id["prix"] .'</div>';
			echo '</a>';
		}
		echo '</div>';
	}
	else{
		echo '<p>Votre panier est vide</p>';
	}
	echo '</div>';
}
?>
