<?php
include_once ('modele/User.class.php');
include_once ('controleur/login.php');

//TODO: User connecté?
//Oui: On récupère les infos placé dans la session
//Non; On affiche un champ de connexion
//
//
//TODO: NavBar dynamique

genNavBar();

function genNavBar()
{
	echo '<li><a href="index.php" class="navbar-brand">TonShop</a></li>';
	echo '<li><a href="index.php"><span class="glyphicon glyphicon-home">Accueil</span></a></li>';
	echo '<li><a href="?page=shop"><span class="glyphicon glyphicon-shopping-cart">Shop</span></a></li>';
	echo '<li><a href="?page=contact"><span class="glyphicon glyphicon-headphones">Contact</span></a></li>';
}	
