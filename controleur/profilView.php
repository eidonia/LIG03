<?php
require_once('modele/User.class.php');
var_dump($_SESSION);
$user = new User();
$user->getUser($_SESSION["user"]["id"]);

require ('vue/profil.php');

?>
