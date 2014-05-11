<?php
require_once('modele/User.class.php');
$user = new User();
$user->getUser($_SESSION["user"]["id"]);

$textPass = "Indiquer un nouveau mot de passe pour le changer…";
$textPassVerif = "Veuillez confirmer votre nouveau mot de passe";
$textAvatar = "Votre avatar";
$textAvatarAlt = "Avatar";
$imgAvatar = $user->avatar();
require ('vue/form.profil.php');

?>
