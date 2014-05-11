<?php
include_once ('modele/User.class.php');

class Login extends User
{
	
	public function checkLogin($mail = NULL, $pass = NULL, $sessionID = NULL)
	{
		$sessionID = (isset($sessionID)) ? $sessionID : session_id();
		if(isset($mail) && isset($pass))
	        {
			$db = new PDOConfig();
			$sql = 'SELECT userId, userLogin, userNom, userPrenom, userAdresse,'
			.' userCodePostale, userVille, userPays, userAvatar'
			.' FROM user WHERE userMail = "'. $mail .'" AND userPass = "'. $pass .'"';
			try{
				foreach($db->query($sql) as $row)
				{
					if(isset($row))
					{
						$this->setId($row['userId']);
						$this->setLogin($row['userLogin']);
						$this->setPass($pass);
						$this->setNom($row['userNom']);
						$this->setPrenom($row['userPrenom']);
						$this->setAdresse($row['userAdresse']);
						$this->setCodePostale($row['userCodePostale']);
						$this->setVille($row['userVille']);
						$this->setPays($row['userPays']);
						$this->setAvatar($row['userAvatar']);
						$this->setMail($mail);
						$this->setSessionId($sessionID);
						return $true;
					}
					else
					{
						return False;
					}
				}
			}catch(Exception $e)
			{
				echo $e;
			}
	        }
	        else
	        {
	                return False;
	        }
        }

	function checkSession($id = NULL)
	{
	        if(isset($id))
	        {
			$db = new PDOConfig();
			$sql = 'SELECT userId, userLogin, userPass, userNom, userPrenom, userAdresse,'
			.' userCodePostale, userVille, userPays, userAvatar, userMail'
			.' FROM user WHERE userSessionID = '. $id;
			try{
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
						$this->setSessionID($row['userSessionID']);
						return $this;
					}
					else
					{
						return False;
					}
				}
			}catch(Exception $e)
			{
				echo $e;
			}
	        }
	        else
	        {
	                return False;
	        }
	}
	function saveSessionID($userId = NULL, $sessionID = NULL)
	{
		if(isset($userId) && isset($sessionID))
		{
			$db = new PDOConfig();
			$sql = 'UPDATE user SET userSessionID = "'. $sessionID .'" WHERE userId = '. $userId;
			$db->exec($sql);
		}
	}
}
