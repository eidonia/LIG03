<?php
	require_once('sql.class.php');
class News 
{
	private $_db;	// Instance de PDO

	public function __construct($db)
	{
		$this->setDB();
	}
	
	public function count()
	{
		return $this->_db->query('SELECT COUNT(*) FROM news')->fetchColumn();
	}

	public function delete($article)
	{
		return $this->_db->exec('DELETE FROM news WHERE id = ' . $article->id());
	}

	public function get($id)
	{
		if ($id > 0)
		{
			$q = $this->_db->query('SELECT id, titre, contenu, date_creation as datecreation, date_modification as datemodification FROM news WHERE id = '.$id);
			$donnees = $q->fetch(PDO::FETCH_ASSOC);
			$article = new Article($db, $donnees);
			return $article;
		}
		else
		{
			
		}
	}
	public function getList($offset, $limit)
	{
		$offset = (int) $offset;
		$limit = (int) $limit;
		$q = $this->_db->prepare('SELECT id, titre, contenu, date_creation as datecreation, date_modification as datemodification FROM news ORDER BY id DESC LIMIT :offset, :limit');
		$q->bindParam(':offset', $offset, PDO::PARAM_INT);
		$q->bindParam(':limit', $limit, PDO::PARAM_INT);
		$q->execute();
		$list = $q->fetchAll();
		return $list;
	}
	public function setDb()
	{
		$this->_db = sql::getBdd();
	}
}
