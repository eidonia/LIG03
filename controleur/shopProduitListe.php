<?php
function contenu($donnees){
	// Les données sont transmit via un objet

	// On commence par nettoyer les données affiché
	foreach($donnees as $key => $produit)
	{
		$produit["nom"] = htmlspecialchars($produit["nom"]);
		$produit["description"] = htmlspecialchars($produit["description"]);
	}
	echo '<table class="table table-hover">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>Produit</th>';
	echo '<th>Prix</th>';
	echo '</tr>';
	echo '</thead>';
	// Affiche la liste des produits
	foreach($donnees as $key => $produit)
	{
		echo '<tr data-href="'. $produit["id"] .'">';
		echo '<td><img src="vue/image/produit/'. $produit["image"] .'" alt='. $produit["nom"] .'/></td>';
		echo '<td>'. $produit["nom"] .'</td>';
		echo '<td>'. $produit["prix"] .'€</td>';
		echo '</tr>';
	}
	echo '</table>';
}

?>
