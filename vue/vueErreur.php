<?php $titre = 'Erreur'; ?>
<?php ob_start(); ?>
<h1>Erreur</h1>
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
