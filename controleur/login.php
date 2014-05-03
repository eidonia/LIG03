<?php
include_once ('modele/User.class.php');

//TODO: User connecté?
//Oui: On récupère les infos placé dans la session
//Non; On affiche un champ de connexion
//
//
//TODO: NavBar dynamique


function estConnecte()
{
	$id = (NULL !== session_id()) ? session_id() : NULL;
	if(isset($id))
	{
		$user = new User();
		$user->getUser(1);
		if($user->sessionID == $id)
			return True;
		else
			return False;
	}
	else
	{
		return False;
	}
}


function login($id, $login, $pass)
{
	$id = isset($id) ? (int)$id : 0;
	$login = isset($login) ? htmlspecialchars($login) : 0;
	$pass = isset($pass) ? htmlspecialchars($pass) : 0;
	$user = new User();
	$user->getUser($id);
	if(($user->login() == $login) && ($user->pass() == $pass))
	{
		echo 'Bienvenu '. $user->prenom();
		$user->setSessionID(session_id());
	}
	else
	{
		echo 'Veuillez réessayer';

	}
}
