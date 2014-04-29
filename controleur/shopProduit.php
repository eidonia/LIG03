<?php
if(($_GET["action"] == "addtocart") && (isset($_POST["nb"])))
{
	$id = $produit->id();
	$nb = htmlspecialchars($_POST["nb"]);
	$nb = (int)$nb;
	if($nb > 0 && $id > 0)
	{
		if(isset($_SESSION["panier"][$id]))
		{
			$_SESSION["panier"][$id]["nb"] += $nb;
		}
		else
		{
			$_SESSION["panier"][$id]["nom"] = $produit->nom();
			$_SESSION["panier"][$id]["prix"] = $produit->prix();
			$_SESSION["panier"][$id]["nb"] = $nb;
		}
	}
}






function contenu($produit){
	// Les données sont transmit via un objet

	// On commence par nettoyer les données affiché
	
	echo '<div class="row">';
	// Affiche le produit
	echo	'<div class="row">'
		.'	<div class="col-md-12">'
		.'		<h1>'. $produit->nom() .'</h1>'
		.'	</div>'
		.'</div>'
		.'<div class="row">'
		.'	<div class="col-md-2">'
		.'		<img src="vue/image/produit/'. $produit->image() .'" alt='. $produit->nom() .' class="img-thumbnail"/>'
		.'	</div>'
		.'	<div class="col-md-10">'
		.'		<p>'. $produit->description() .'</p>'
		.'	</div>'
		.'</div>';
	if($produit->stock() == 0)
	{
		echo 	'<div class="row">'
			.'	<div class="col-md-4">'
			.'		<button class="bg-danger">Produit non disponible</p>'
			.'	</div>'
			.'</div>';
	}
	else
	{
		$bg = ($produit->stock() < 10) ? "bg-warning" : "bg-success";
		echo 	'<div class="row">'
			.'	<div class="col-md-2">'
			.'		<p class="'. $bg .'">'. $produit->stock() .' restants.</p>'
			.'	</div>'
			.'	<div class="col-md-5 col-md-offset-5">'
			.'		<form method="post" action="?page=shop&produit='. $produit->id() .'&action=addtocart">'
			.'			Ajouter au panier : '
			.'			<select name="nb">';
		$i = 1;
		while($i <= $produit->stock() && $i <= 5)
		{
			echo '<option>'. $i .'</option>';
			$i++;
		}
		echo 	'			</select>'
			.' 			éléments '
			.'			<button type="submit" class="btn btn-success">Ajouter…</button>'
			.'		</form>'
			.'	</div>'
			.'</div>';
	}
}
echo '</div>';


?>
