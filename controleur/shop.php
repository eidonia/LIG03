<?php
require_once('modele/Categorie.class.php');
require_once('modele/Produit.class.php');

require_once('titre.php');
require_once('blocdroit.php');
require_once('footer.php');

if(isset($_GET["cat"])){
	$cat = new Produit();
	$cat = $cat->getList(0, 5, $_GET["cat"]);
	$dTitre = "Sélectionnez un propuit";
	$dContenu = $cat;
	$dFooter = $dFooter;
	require ('controleur/shopProduitListe.php');
}
elseif(isset($_GET["produit"])){
	$id = isset($_GET["produit"]) ? (int)$_GET["produit"] : "0";
	$produit = new Produit();
	$produit->getProduit($id);
	$dTitre = $produit->nom();
	$dContenu = $produit;
	$dFooter = $dFooter;
	require ('controleur/shopProduit.php');

}
else{
	$cat = new Categorie();
	$cat = $cat->getCategorie(0, 5);
	$dTitre = "Sélectionnez une catégorie";
	$dContenu = $cat;
	$dFooter = $dFooter;
	require_once('controleur/shopCategorie.php');
}




require ("vue/template.php");

?>
