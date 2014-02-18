<?php
require_once('sql.class.php');
class Article 
{
	private $_db;
	private $_id;
	private $_titre;
	private $_contenu;
	private $_datecreation;
	private $_datemodification;

	public function __construct($db, array $donnees)
	{
		$this->hydrate($donnees);
		$this->setDB();
	}
	public function hydrate($donnees)
	{
		foreach ($donnees as $key => $valeur)
		{
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method))
			{
				$this->$method($valeur);
			}
		}
	}
	public function id()
	{
		return $this->_id;
	}
	public function titre()
	{
		return $this->_titre;
	}
	public function contenu()
	{
		return $this->_contenu;
	}
	public function datecreation()
	{
		return $this->_datecreation;
	}
	
	public function datemodification()
	{
		return $this->_datemodification;
	}
	public function setId($id)
	{
		$id = (int) $id;

		if ($id > 0)
		{
			$this->_id = $id;
		}
	}
	public function setTitre($titre)
	{
		$this->_titre = $titre;
	}
	public function setContenu($contenu)
	{
		$this->_contenu = $contenu;
	}
	public function setDatecreation($date)
	{
		$this->_datecreation = $date;
	}
	
	public function setDatemodification($date)
	{
		$this->_datemodification = $date;
	}
	public function setDB()
	{
		$this->_db = sql::getBdd();
	}
	public function update()
	{
		try
		{
			$req = $this->_db->prepare('UPDATE news SET titre = :titre, contenu = :contenu,'
			.' date_modification = :datemodification WHERE id = :id');
			$req->bindParam(':id', $this->id(), PDO::PARAM_STR);
			$req->bindParam(':titre', $this->titre(), PDO::PARAM_STR);
			$req->bindParam(':contenu', $this->contenu(), PDO::PARAM_STR);
			$req->bindParam(':datemodification', $this->datemodification(), PDO::PARAM_STR);
			$req->execute();
			return 'OK';
		}
		catch(Exception $e)
		{
		        return 'Une erreur, c\'est produite, veuillez recommencer.';
		}
	}	
	public function save()
	{
		try
		{
			$req = $this->_db->prepare('INSERT INTO news(titre, contenu, date_creation,'
			.' date_modification) VALUES (:titre, :contenu, :datecreation, :datemodification) ');
			$req->bindParam(':titre', $this->titre(), PDO::PARAM_STR);
			$req->bindParam(':contenu', $this->contenu(), PDO::PARAM_STR);
			$req->bindParam(':datecreation', $this->datecreation(), PDO::PARAM_STR);
			$req->bindParam(':datemodification', $this->datemodification(), PDO::PARAM_STR);
			$req->execute();
			return 'OK';
		}
		catch(Exception $e)
		{
			return 'Une erreur c\'est produite, veuillez recommencer.';
		}
	}
}
