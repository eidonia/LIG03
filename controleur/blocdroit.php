<?php
require_once ('controleur/login.php');
var_dump($_SESSION);
if($_GET["action"] == "delfromcart")
{
	$id = $_POST["id"];
	$id = (int)$id;
        if($id > 0)
        {
		if((int)$_SESSION["panier"][$id]["nb"] > 0)
			$_SESSION["panier"][$id]["nb"] -= 1;
                else
                {
                        $_SESSION["panier"][$id] = NULL;
                }
        }
}


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
	echo '<div class="row">';
	if(isset($panier))
	{
		
		foreach($panier as $i => $id){
			echo '<div class="col-md-12">';
			echo '<a href="?page=shop&produit='. $i .'">';
			echo '<div class="col-md-1">'. $id["nb"] .'</div>';
			echo '<div class="col-md-8">'. $id["nom"] .'</div>';
			echo '<div class="col-md-2">'. $id["prix"] .'</div>';
			echo '</a>';
			echo '<form role="form" method="post" action="?action=delfromcart">';
			echo '<input type="hidden" name="id" value="'. $i .'">';
			echo '<div class="col-md-1"><button type="submit" class="close" aria-hidden="true">&times;</button></div>';
			echo '</form>';
			echo '</div>';
		}
		
	}
	else{
		echo '<div class="col-md-12">';
		echo '<p>Votre panier est vide</p>';
		echo '</div>';
	}
	echo '</div>';
}
?>
