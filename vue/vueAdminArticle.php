<?php ob_start(); ?>
<form action="?admin=news&<?= $method ?>=article" method="post">
	<fieldset>
		<legend>Envoyer une news</legend>
		<input size="0" type="text" name="id" id="id" hidden value="<?= $id ?>"/>
		<label for="titre">Titre:</label><input size="40" type="text" name="titre" id="titre" value="<?= $titre ?>"/>
		<br />
		<textarea name="contenu" rows="8" cols="45"><?= $contenu ?></textarea>
		<br />
		<input type="datetime" name="date" id="date" autocomplete = "on" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
	</fieldset>
	<p><input type="submit" value="Valider" /></p>
</form>
<?php
$contenu = ob_get_clean();
require 'template.php';
?>
