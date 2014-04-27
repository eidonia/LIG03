<?php
function contenu($donnees){
	// Affiche le contenu du bloc centrale
	// Les données sont transmit via un array
	// Exemple :
	// 	$donnees = array(
	// 		"INT ID" => array("titre" => "STR TITRE", "contenu" => "STR MESSAGE", "date" => "STR DATE", "numCommentaire" => "INT AGE")
	// 		);
	// 		
	// On commence par nettoyer;
	foreach($donnees as $key => $cat)
	{
		$cat["nom"] = htmlspecialchars($cat["nom"]);
		$cat["contenu"] = htmlspecialchars($cat["contenu"]);
	}
	echo '<div class="categorieMain">';
	foreach($donnees as $key => $cat)
	{
		echo '<a href="?page=shop&cat='. $cat["id"] .'">';
		echo '<h1>'. $cat["nom"] .'</h1>';
		echo '<div class="categorieMainImage">';
			echo '<img src="vue/image/categorie/'. $cat["image"] .'" alt='. $cat["nom"] .'/>';
		echo '<p>'. $cat["contenu"] .'</p>';
		echo '</div>';
		echo '</a>';
	}
	echo '</div>';
}

?>
