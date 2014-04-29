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
		echo 	'<div class="row">'
			.'	<a href=?page=shop&produit='. $produit["id"] .'>'
			.'	<div class="col-md-3">'
			.'		<img src="vue/image/produit/'. $produit["image"] .'" alt='. $produit["nom"] .'/>'
			.'	</div>'
			.'	<div class="col-md-7">'.
					$produit["nom"]
			.'	</div>'
			.'	<div class="col-md-2">'.
					$produit["prix"] .'€'
			.'	</div>'
			.'	</a>'
			.'</div>';
	}
	echo '</div>';
}

?>
