<?php
require_once('titre.php');
require_once('blocdroit.php');
require_once('footer.php');

$_SESSION = array(); 

session_destroy();
$dTitre = 'Merci pour votre visite';
$dContenu = 'Vous avez été déconnecté.</p><p><a href="index.php">Cliquez ici pour revenir à l\'accueil.</a>';
require ("vue/template.php");

function contenu($donnees = NULL)
{
$message = $donnees;
$type = "success";
	require ('vue/message.php');
}
?>
