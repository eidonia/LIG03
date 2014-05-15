<?php
require_once('modele/User.class.php');
require_once('modele/rfc822.php');
require_once('modele/Tools.function.php');

$user = new User();

$type = "success";
$message = "Bienvenue :)";

// Test la validité du mdp
if(is_password_valid($_POST["password"], $_POST["passwordCheck"]))
	$user->setPass($password);
else
{
	$type = "danger";
	$message = "Le mot de passe est invalide";
}


// Test la validité du mail
$mail = (NULL !== $_POST["mail"]) ? htmlspecialchars($_POST["mail"]) : NULL;
if(is_valid_email_address($mail))
	$user->setMail($mail);
else
{
	$type = "danger";
	$message = "L'adresse email est invalide";
}
$id = getLastUserId();
$id++;
// Si un fichier à été envoyer on test la validitée du fichier. Sinon, on laisse un avatar par défaut.
if($_FILES['avatar']['error'] == 0)
{
	$extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
	$extension_upload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

	if(in_array($extension_upload, $extensions_valides))
	{
		$nomAvatar = 'avatar/'. $id .'/'. uniqid(rand(), true) .'.'. $extension_upload;
		mkdir('/vue/image/avatar/'. $id, 0777, true);
		$resImg = move_uploaded_file($_FILES['avatar']['tmp_name'], 'vue/image/'.$nomAvatar);
		$user->setAvatar($nomAvatar);
		
	}
	else
	{
		$type = "danger";
		$message = "L'extension de votre image est invalide";
	}
}
else
{
	mkdir('/vue/image/avatar/'. $id, 0777, true);
	$user->setAvatar("avatar/default.png");
}

// Si tout les check se sont bien passé, on complète le reste des informations
if($type == "success")
{
	// Nettoyage du POST
	foreach($_POST as $key => $value)
	{
		$key = htmlspecialchars($key);
		$value = htmlspecialchars($value);
	}
	$user->setPrenom($_POST["prenom"]);
	$user->setNom($_POST["nom"]);
	$user->setAdresse($_POST["adresse"]);
	$user->setCodePostale($_POST["codePostale"]);
	$user->setPays($_POST["pays"]);

	$user->insert();
	require ('vue/message.php');
}
else
{
	require ('vue/message.php');
}

?>
