<?php
include_once ('modele/Login.class.php');

//TODO: User connecté?
//Oui: On récupère les infos placé dans la session
//Non; On affiche un champ de connexion
//
//
//TODO: NavBar dynamique

// Test si les variable $_POST sont présentes
$mail = (NULL !== $_POST["email"]) ? $_POST["email"] : NULL;
$pass = (NULL !== $_POST["password"]) ? $_POST["password"] : NULL;

if(isset($mail) && isset($pass))
{
	$user = new Login();
	$user->checkLogin($mail, $pass);
	$_SESSION["user"]["login"] = $user->login();
	$_SESSION["user"]["id"] = $user->id();
	$_SESSION["user"]["mail"] = $user->mail();
	$_SESSION["user"]["prenom"] = $user->prenom();
	$_SESSION["user"]["nom"] = $user->nom();
	$_SESSION["user"]["avatar"] = $user->avatar();
}
else{
	$user = False;
}
