<?php
require_once('sql.class.php');

class Produit
{
	private $_db; // Instance PDO
	
	public function __construct()
	{
	}
	
	public function getProduit($id)
	{
		$this->setDb();
		$id = isset($id) ? (int)$id : 0;
		$q = $this->_db->prepare('SELECT id, nom, description, prix, image, stock FROM produit WHERE id = '. $id);
		$q->execute();
		$produit = $q->fetchAll();
		return $produit;
	}

	public function getList($offset, $limit, $id)
	{
		$this->setDb();
		$offset = isset($offset) ? (int) $offset : 0;
		$limit = isset($limit) ? (int)$limit : 10;
		$id = isset($id) ? (int)$id : 0;
		$q = $this->_db->prepare('SELECT id, nom, description, prix, stock, image FROM produit WHERE categorieID = '. $id .' ORDER BY id DESC LIMIT '. $offset .','. $limit);
		$q->execute();
		$list = $q->fetchAll();
		return $list;
	}

	private function setDb()
	{
		$this->_db = sql::getBdd();
	}
}
