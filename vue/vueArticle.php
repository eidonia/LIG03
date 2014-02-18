<?php ob_start(); ?>
<div class="article">
	<h3><?= $titre ?></h3>
	<h4>Publié le <?= $datecreation ?></h4>
	<p class="article"><?= $contenu ?></p>
	<p class="commentaire">
		<em><a href="?action=comment&billet=<?= $id ?>">Commentaires</a></em>
	</p>
</div>
<?php
$contenu = ob_get_clean();
require ('template.php');
?>
