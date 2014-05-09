<?php
function footer(){
	// affiche le footer de la page.
	// requiert un array ou un objet?
	// Exemple : 
	// 	$donnees = array(
	// 		"INT n° colonne" => array("INT n° ligne" => array("nom" => "CHAINE nom affiché", "url" => "STR URL"))
	// 		);
	if(isset($donnees)){
	foreach($donnees as $i => $col){
		echo '<ul>';
		foreach($col as $i => $ligne){
			echo '<li>';
			echo '<a href="'. $ligne["url"] .'">'. $ligne["nom"] .'</a>';
			echo '</li>';
			}
		echo '</ul>';
	}
	}
}
?>
