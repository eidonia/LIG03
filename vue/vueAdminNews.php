<?php
	$titre = 'Admin News';
	ob_start();
?>
<form action="?admin=news" method="post">
	<table>
		<tr>
			<th>ID</th>
			<th>Titre</th>
			<th>Date création</th>
			<th>Date modification</th>
		</tr>
		<?php
			foreach($news as $cle => $article)
			{
				echo "<tr>";
				echo '<td><input type="radio" name="id" value=' . $article["id"] . ' /><label for="id"' . $article['id'] . '>' . $article["id"] . '</label>';
				echo "<td>" . $article['titre'] . "</td>";
				echo "<td>" . $article['datecreation'] . "</td>";
				echo "<td>" . $article['datemodification'] . "</td>";
				echo "</tr>";
			}
		?>
		<tr>
			<td><input type="radio" name="id" value="0" /></td>
		</tr>
	</table>
	<input type="submit" value="Valider"/>
</form>
<?php
	$contenu = ob_get_clean();
	require 'template.php';
?>_
