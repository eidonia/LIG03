<?php
require_once('modele/User.class.php');
$user = new User();
$user->getUser($_SESSION["user"]["id"]);

require ('vue/profil.php');

?>
