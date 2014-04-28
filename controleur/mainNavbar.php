<?php
include_once ('modele/User.class.php');
include_once ('controleur/login.php');

//TODO: User connecté?
//Oui: On récupère les infos placé dans la session
//Non; On affiche un champ de connexion
//
//
//TODO: NavBar dynamique

if(isset($_SESSION['user']['id']))
	{
		if($id > 0)
		{
			$user = new User();
			$user->getUser($id);
			echo $user->login();
		}
		else
		{
			echo "ID user invalide";
		}
}
genNavBar();

function genNavBar()
{
	echo '<li><a href="index.php" class="navbar-brand">TonShop</a></li>';
	echo '<li><a href="index.php"><span class="glyphicon glyphicon-home">Accueil</span></a></li>';
	echo '<li><a href="?page=shop"><span class="glyphicon glyphicon-shopping-cart">Shop</span></a></li>';
	echo '<li><a href="?page=contact"><span class="glyphicon glyphicon-headphones">Contact</span></a></li>';
	echo '<li class="dropdown-menu">';
	// Connecté ?
	if(estConnecte())
	{
		echo '<li><a href="#">'. $_SESSION['user'] .'</a></li>';
	}
	else
	{
		echo '<form class="form-horizontal" role="form">';
		echo '<div class="form-group">';
		echo '<label for="inputEmail" class="col-sm-1 control-label">Login</label>';
		echo '<div class="col-sm-2">';
		echo '<input type="email" class="form-control" id="inputEmail" placeholder="Email">';
		echo '</div>';
		echo '</div>';
		echo '<div class="form-group">';
		echo '<label for="inputPassword" class="col-sm-1 control-label">Mot de passe: </label>';
		echo '<div class="col-sm-2">';
		echo '<input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">';
		echo '</div>';
		echo '<div class="form-group">';
		echo '<div class="col-sm-offset-2 col-sm-1">';
		echo '<div class="checkbox">';
		echo '<label>';
		echo '<input type="checkbox">Se souvenir de moi.';
		echo '</label>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '<div class="form-group">';
		echo '<div class="col-sm-offset-2 col-sm-1">';
		echo '<button type="submit" class="btn btn-default">Se connecter</button>';
		echo '</div>';
		echo '</div>';
		echo '</form>';
	}
	echo '</li>';
}	
