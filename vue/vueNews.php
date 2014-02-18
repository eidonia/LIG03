<?php
$titre = "Acceuil";
ob_start();
foreach($news as $article)
{
?>
	<div class="news">
		<h3>
			<a href="?action=article&id=<?php echo $article['id']; ?>"><?php echo $article['titre']; ?></a>
			<em>le <?php echo $article['datecreation']; ?></em>
		</h3> 
		<p>
			<?php echo $article['contenu']; ?>
			<br />
			<em><a href="?action=comment&billet=<?php echo $article['id']; ?>">Commentaires</a></em>
		</p>
	</div>
<?php
}

$contenu = ob_get_clean();
require "template.php";
