<?php
function contenu($donnees){
	// Les données sont transmit via un objet

	// On commence par nettoyer les données affiché
	foreach($donnees as $key => $produit)
	{
		$produit["nom"] = htmlspecialchars($produit["nom"]);
		$produit["description"] = htmlspecialchars($produit["description"]);
	}
	echo '<div class="produitListe">';

	// Affiche la liste des produits
	foreach($donnees as $key => $produit)
	{
		echo '<a href="?page=shop&produit='. $produit["id"] .'">';
		echo '<h1>'. $produit["nom"] .'</h1>';
		echo '<div class="produitListeImage">';
		echo '<img src="vue/image/categorie/'. $produit["image"] .'" alt='. $produit["nom"] .'/>';
		echo '<p>'. $produit["description"] .'</p>';
		echo '</div>';
		echo '</a>';
	}
	echo '</div>';
}

?>
