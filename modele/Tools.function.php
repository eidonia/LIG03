<?php
include_once ('sql.class.php');

	function is_password_valid($password = NULL, $passwordCheck = NULL)
	{
		$passRegex = '~^(?=.{6})[-+%#a-zA-Z\d]+$~';
		$password = (NULL !== $password) ? htmlspecialchars($password) : NULL;
		$passwordCheck = (NULL !== $passwordCheck) ? htmlspecialchars($passwordCheck) : NULL;
		if((NULL !== $password && NULL !== $passwordCheck) && ($password == $passwordCheck))
		{
			if(preg_match($passRegex, $password))
				return True;
			else
				return False;
		}
		else
			return False;
	}
?>
