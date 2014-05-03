<?php
require_once('sql.class.php');

class Produit
{
	private $_db; // Instance PDO
	private $_id;
	private $_nom;
	private $_description;
	private $_image;
	private $_categorieID;
	private $_prix;
	private $_stock;

	public function __construct()
	{
	}

	public function id()
	{
		return $this->_id;
	}
	public function nom()
	{
		return $this->_nom;
	}
	public function description()
	{
		return $this->_description;
	}
	public function image()
	{
		return $this->_image;
	}
	public function categorieID()
	{
		return $this->_categorieID;
	}
	public function prix()
	{
		return $this->_prix;
	}
	public function stock()
	{
		return $this->_stock;
	}


	public function setId($val)
	{
		$this->_id = $val;
	}
	public function setNom($val)
	{
		$this->_nom = $val;
	}
	public function setDescription($val)
	{
		$this->_description = $val;
	}
	public function setImage($val)
	{
		$this->_image = $val;
	}
	public function setCategorieID($val)
	{
		$this->_categorieID = $val;
	}
	public function setPrix($val)
	{
		$this->_prix = $val;
	}
	public function setStock($val)
	{
		$this->_stock = $val;
	}



	public function getProduit($id)
	{
		$db = new PDOConfig();
		$id = isset($id) ? (int)$id : NULL;
		if(isset($id))
		{
			$sql = 'SELECT id, nom, description, prix, image, stock, categorieID FROM produit WHERE id = '. $id;
			foreach($db->query($sql) as $row)
			{
				if(isset($row))
				{
					$this->setId($row['id']);
					$this->setNom($row['nom']);
					$this->setDescription($row['description']);
					$this->setPrix($row['prix']);
					$this->setStock($row['stock']);
					$this->setCategorieID($row['categorieID']);
				}	
			}
		}
	}

	public function getList($offset, $limit, $id)
	{
		$db = new PDOConfig();
		$offset = isset($offset) ? (int) $offset : 0;
		$limit = isset($limit) ? (int)$limit : 10;
		$id = isset($id) ? (int)$id : 0;
		$sql = 'SELECT id, nom, description, prix, stock, image FROM produit WHERE categorieID = '. $id .' ORDER BY id DESC LIMIT '. $offset .','. $limit;
		$result = $db->prepare($sql);
		$result->execute();
		$list = $result->fetchAll();
		return $list;
	}

	private function setDb()
	{
		$this->_db = sql::getBdd();
	}
}
