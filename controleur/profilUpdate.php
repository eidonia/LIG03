<?php
require_once('modele/User.class.php');
$user = new User();
$id = htmlspecialchars($_SESSION["user"]["id"]);

$user->getUser($id);
if($_POST["password"] == $_POST["passwordCheck"])
{
	if($_FILES['avatar']['error'] == 0)
	{
		$extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
		$extension_upload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
	
		if(in_array($extension_upload, $extensions_valides))
		{
			$nomAvatar = 'avatar/'. $id .'/'. uniqid(rand(), true) .'.'. $extension_upload;
			$resImg = move_uploaded_file($_FILES['avatar']['tmp_name'], 'vue/image/'.$nomAvatar);
			$user->setAvatar($nomAvatar);
			
		}
		else
		{
			$type = "danger";
			$message = "Votre image est invalide";
			require ('vue/message.php');
		}
	}
	foreach($_POST as $key => $value)
	{
		$key = htmlspecialchars($key);
		$value = htmlspecialchars($value);
		if(strlen($value) > 0)
		{
			$method = 'set'.ucfirst($key);
			if(method_exists($user, $method))
			{
				$user->$method($value);
			}
		}
	}
	foreach($_SESSION["user"] as $key => $value)
	{
		if($value != $user->$key())
		{	
			var_dump($key);
			$_SESSION["user"][$key] = $user->$key();
		}
	}
	$user->update();
	$type = "success";
	$message = "Information mis à jours";
	require ('vue/message.php');
}
else
{
	$type = "danger";
	$message = "Votre mot de passe est invalide";
	require ('vue/message.php');
}

?>
