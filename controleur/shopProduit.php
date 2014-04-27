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
		echo '<div class="produit">';
		echo '<h1>'. $produit["nom"] .'</h1>';
		echo '<img src="vue/image/categorie/'. $produit["image"] .'" alt='. $produit["nom"] .'/>';
		echo '<p>'. $produit["description"] .'</p>';
		if($produit["stock"] == 0)
		{
			echo "Ce produit n'est plus disponible";
		}
		else
		{
			echo 'Stock : <FONT color="green">'. $produit["stock"] .'</FONT>';
			echo '<form method=post action=".">';
			echo 'Ajouter au panier : ';
			echo '<select>';
			$i = 1;
			while($i <= $produit["stock"] && $i <= 5)
			{
				echo '<option>'. $i .'</option>';
				$i++;
			}
			echo '</select>';
			echo ' éléments ';
			echo '<button type="Submit" class="btn btn-default">Ajouter…';
			echo '</form>';
		}
		echo '</div>';
	}
	echo '</div>';
}

?>
