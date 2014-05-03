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
		$user->getSessionId($id);
		if($user->sessionID() == $id)
			return True;
		else
			return False;
	}
	else
	{
		return False;
	}
}


function login($login, $pass)
{
	$login = isset($login) ? htmlspecialchars($login) : NULL;
	$pass = isset($pass) ? htmlspecialchars($pass) : NULL;
	$user = new User();
	$user->getUserId($id);
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
