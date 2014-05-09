<?php
require_once('sql.class.php');

class User
{
	private $_id;
	private $_login;
	private $_pass;
	private $_nom;
	private $_prenom;
	private $_mail;
	private $_adresse;
	private $_codepostale;
	private $_ville;
	private $_pays;
	private $_avatar;
	private $_sessionID;
	
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
	public function mail()
	{
		return $this->_mail;
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
	public function setMail($val)
	{
		$this->_mail = $val;
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
			$this->setId($id);
			$sql = 'SELECT userLogin, userPass, userNom, userPrenom, userAdresse,'
			.' userCodePostale, userVille, userPays, userAvatar, userSessionID, userMail'
			.' FROM user WHERE userId = '. $this->id();
			foreach($db->query($sql) as $row)
			{
				if(isset($row))
				{
					$this->setLogin($row['userLogin']);
					$this->setPass($row['userPass']);
					$this->setNom($row['userNom']);
					$this->setPrenom($row['userPrenom']);
					$this->setAdresse($row['userAdresse']);
					$this->setCodePostale($row['userCodePostale']);
					$this->setVille($row['userVille']);
					$this->setPays($row['userPays']);
					$this->setAvatar($row['userAvatar']);
					$this->setMail($row['userMail']);
					$this->setSessionId($row['userSessionID']);
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
		$db = new PDOConfig();
		$offset = isset($offset) ? (int) $offset : 0;
		$limit = isset($limit) ? (int)$limit : 10;
		$sql = 'SELECT userId, userLogin, userPass, userNom, userPrenom, userAdresse,'
		.' userCodePostale, userVille, userPays, userGroup, userAvatar FROM user ORDER BY id DESC LIMIT '. $offset .','. $limit;
		$db->query($sql);
		$list = $db->fetchAll();
		return $list;
	}
	
	public function update()
	{
		$db = new PDOConfig();
		$sql =	'UPDATE user SET'
			.' userLogin = "'. $this->login() .'",'
			.' userPass = "'. $this->pass() .'",'
			.' userPrenom = "'. $this->prenom() .'",'
			.' userNom = "'. $this->nom() .'",'
			.' userMail = "'. $this->mail() .'",'
			.' userAdresse = "'. $this->adresse() .'",'
			.' userVille = "'. $this->ville() .'",'
			.' userCodePostale = "'. $this->codePostale() .'",'
			.' userPays = "'. $this->pays() .'",'
			.' userAvatar = "'. $this->avatar() .'",'
			.' userSessionID = "'. $this->sessionID() .'"'
			.' WHERE userId = "'. $this->id() .'"';
		var_dump($sql);
		$db->exec($sql);
	}

	public function insert()
	{
		$db = new PDOConfig();
		$sql =	'INSERT INTO user'
			.'(userLogin, userPass, userPrenom, userNom, userMail, userAdresse, userVille, userCodePostale, userPays, userAvatar, userSessionID)'
			.' VALUES '
			.'("'. $this->login() .'", '
			.'"'. $this->pass() .'", '
			.'"'. $this->prenom() .'", '
			.'"'. $this->nom() .'", '
			.'"'. $this->mail() .'", '
			.'"'. $this->adresse() .'", '
			.'"'. $this->ville() .'", '
			.'"'. $this->codePostale() .'", '
			.'"'. $this->pays() .'", '
			.'"'. $this->avatar() .'", '
			.'"'. $this->sessionID() .')';
		var_dump($sql);
		//$db->exec($sql);
	}
}
