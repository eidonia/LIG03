<?php
require 'modele/sql.class.php';
require 'modele/News.class.php';
require 'modele/Article.class.php';

// Affiche la liste de tous les billets du blog
function accueil()
{
	$news = new News($db);
   	$news = $news->getList(0, 5);
    	require 'vue/vueNews.php';
}

// Affiche les détails sur un billet
function billet($id)
{
	$article = new News($db);
	$article = $article->get($id);
	$id = $article->id();
	$titre = $article->titre();
	$contenu = $article->contenu();
	$datecreation = $article->datecreation();
	$datemodification = $article->datemodification();
	//$commentaires = getCommentaires($idBillet);
	require 'vue/vueArticle.php';
}

// Admin list news
function adminNews()
{
		
	$news = new News($db);
	$news = $news->getList(0,5);
	
	// On effectue du traitement sur les données (controleur)
	// Ici, on doit surtout sécurise l'affichage
	foreach($news as $cle => $article) 
	{
		$article[$cle]['titre'] = htmlspecialchars($article['titre']);
		$article[$cle]['contenu'] = nl2br(htmlspecialchars($article['contenu']));
	}
	require 'vue/vueAdminNews.php';
} 
// Admin new article
function newArticle()
{
	$article = new News($db);
	$id = "0";
	$method = "create";
	require 'vue/vueAdminArticle.php';
}
// Admin save article
function saveArticle($titre, $contenu, $datecreation)
{
	$donnees["id"] = 0;
	$donnees["titre"] = $titre;
	$donnees["contenu"] = $contenu;
	$donnees["datecreation"] = $datecreation;
	$donnees["datemodification"] = $datecreation;
	$article = new Article($db, $donnees);
	$titre = "Nouvel article";
	$message = "Nouvel article OK";
	$article->save();
	require 'vue/vueTache.php';
}
// Admin edit article
function editArticle($id)
{
	$article = new News($db);
	$article = $article->get($id);
	$id = $article->id();
	$titre = $article->titre();
	$contenu = $article->contenu();
	$datecreation = $article->datecreation();
	$datemodification = $article->datemodification();
	$method = "update";
	require 'vue/vueAdminArticle.php';
}

// Admin update article
function updateArticle($id, $titre, $contenu, $datemodification)
{
	$article = new News($db);
	$article = $article->get($id);
	$article->setTitre($titre);
	$article->setContenu($contenu);
	$article->setDatemodification($datemodification);
	$article->update();
	$titre = "Update…";
	$message = "Mis à jours de l'article…";
	require 'vue/vueTache.php';
}

// Affiche une erreur
function erreur($msgErreur)
{
    require 'vue/vueErreur.php';
}
