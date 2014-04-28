<?php
function contenu($donnees){
	// Les données sont transmit via un objet

	// On commence par nettoyer les données affiché
	foreach($donnees as $key => $produit)
	{
		$produit["nom"] = htmlspecialchars($produit["nom"]);
		$produit["description"] = htmlspecialchars($produit["description"]);
	}
	echo '<div class="row">';
	// Affiche la liste des produits
	foreach($donnees as $key => $produit)
	{
		echo '<div class="col-md-10">';
		echo '<a href=?page=shop&produit='. $produit["id"] .'>';
		echo '<div class="col-md-3">';
		echo '<img src="vue/image/produit/'. $produit["image"] .'" alt='. $produit["nom"] .'/>';
		echo '</div>';
		echo '<div class="col-md-5">';
		echo $produit["nom"];
		echo '</div>';
		echo '<div class="col-md-2">';
		echo $produit["prix"] .'€';
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
}

?>
