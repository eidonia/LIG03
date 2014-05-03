<?php
require_once('sql.class.php');

class User
{
	private $_id;
	private $_login;
	private $_pass;
	private $_nom;
	private $_prenom;
	private $_adresse;
	private $_codepostale;
	private $_ville;
	private $_pays;
	private $_avatar;
	private $_sessionID;
	private $_db; // Instance PDO
	
	public function __construct()
	{
	}
	
	public function id()
	{
		return $this->_id;
	}
	public function login()
	{
		return $this->_login;
	}
	public function pass()
	{
		return $this->_pass;
	}
	public function nom()
	{
		return $this->_nom;
	}
	public function prenom()
	{
		return $this->_prenom;
	}
	public function adresse()
	{
		return $this->_adresse;
	}
	public function codepostale()
	{
		return $this->_codepostale;
	}
	public function ville()
	{
		return $this->_ville;
	}
	public function pays()
	{
		return $this->_pays;
	}
	public function avatar()
	{
		return $this->_avatar;
	}
	public function sessionID()
	{
		return $this->_sessionID;
	}

	public function setId($val)
	{
		$this->_id = $val;
	}
	public function setLogin($val)
	{
		$this->_login = $val;
	}
	public function setPass($val)
	{
		$this->_pass = $val;
	}
	public function setNom($val)
	{
		$this->_nom = $val;
	}
	public function setPrenom($val)
	{
		$this->_prenom = $val;
	}
	public function setAdresse($val)
	{
		$this->_adresse = $val;
	}
	public function setCodepostale($val)
	{
		$this->_codepostale = $val;
	}

	public function setVille($val)
	{
		$this->_ville = $val;
	}
	public function setPays($val)
	{
		$this->_pays = $val;
	}
	public function setAvatar($val)
	{
		$this->_avatar = $val;
	}
	public function setSessionID($val)
	{
		$this->_sessionID = $val;
	}



	public function getUser($id)
	{
		$db = new PDOConfig();
		$id = isset($id) ? (int)$id : NULL;
		if(isset($id))
		{
			$sql = 'SELECT userLogin, userPass, userNom, userPrenom, userAdresse,'
			.' userCodePostale, userVille, userPays, userGroup, userAvatar, userSessionID FROM user WHERE userId = '. $id;
			foreach($db->query($sql) as $row)
			{
				$taille = strlen($row);
				$method = substr($row, 4, ($taille - 4));
				$method = 'set'.$method;
var_dump($row);
				if(method_exists($this, $method))
				{
					$this->$method($row['user'. $method]);
				}
			}
		}
		else
		{
			echo "ID invalide";
		}
	}

	public function getList($offset, $limit)
	{
		$this->setDb();
		$offset = isset($offset) ? (int) $offset : 0;
		$limit = isset($limit) ? (int)$limit : 10;
		$q = $this->_db->prepare('SELECT userId, userLogin, userPass, userNom, userPrenom, userAdresse,'
		.' userCodePostale, userVille, userPays, userGroup, userAvatar FROM user ORDER BY id DESC LIMIT '. $offset .','. $limit);
		$q->execute();
		$list = $q->fetchAll();
		$q->closeCursor();
		return $list;
	}

	private function setDb()
	{
		$this->_db = sql::getBdd();
	}
}
