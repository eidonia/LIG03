<?php
/* Landing Page
 * File: index.php
 * Objet: Récupère les paramètres passé en $_GET et redirige le traffic
 */

require 'controleur/index.php';

try {
	if (isset($_GET))
	{
		if ($_GET['action'] == 'article')
		{
			if (isset($_GET['id']))
			{
				$idBillet = intval($_GET['id']);
				if ($idBillet != 0)
				{
					billet($idBillet);
				}
				else
					throw new Exception("Identifiant de billet non valide");
			}
			else
			{
				throw new Exception("Identifiant de billet non défini");
			}
		}
		elseif ($_GET['admin'] == 'news')
		{
			if (isset($_POST['id']))
			{
				$id = intval($_POST['id']);
				if($_GET['update'] == 'article')
				{	// Update ou créer un nouvelle news
					$titre = htmlspecialchars($_POST['titre']);
					$contenu = nl2br(htmlspecialchars($_POST['contenu']));
					$datemodification = htmlspecialchars($_POST['datemodification']);
					updateArticle($id, $titre, $contenu, $datemodification);
				}
				if ($_GET['create'] == 'article')
				{
					$titre = htmlspecialchars($_POST['titre']);
					$contenu = nl2br(htmlspecialchars($_POST['contenu']));
					$datecreation = htmlspecialchars($_POST['date']);
					var_dump($_POST);
					saveArticle($titre, $contenu, $datecreation);
				}

				elseif ($id == 0)
				{
					newArticle();
				}
				elseif ($id != 0)
				{
					editArticle($id);
				}
			}
			else	//Pas d'id fournie. Affichage de la list des news
			{
				adminNews();
			}
		}
		else
		{  // aucune action définie : affichage de l'accueil
			accueil(); 
		}
	}
}
catch (Exception $e) {
    erreur($e->getMessage());
}
