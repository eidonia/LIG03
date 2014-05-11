<?php
require_once('modele/User.class.php');
$user = new User();

$user->setPrenom("Votre prénom…");
$user->setNom("Votre nom…");
$user->setMail("Votre mail…");
$user->setAdresse("Votre adresse… (Ex: 42 rue de la chaussette)");
$user->setCodePostale("Votre code postale…");
$user->setPays("Votre pays…");

$textPass = "Votre mot de passe…";
$textPassVerif = "Veuillez confirmer votre mot de passe";
$textAvatar = "Insérer un avatar";
$textAvatarAlt = "Avatar";
$imgAvatar = "avatar/default.png";

require ('vue/form.profil.php');

?>
