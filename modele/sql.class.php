<?php
abstract class sql{

	public function getBdd()
	{
		try
		{
			$db = new PDO('mysql:host=localhost;dbname=alex', 'alex', 'UUKaCHdThfXe9Vx4');
		}
		catch (Exeption $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		return $db;
	}
}
?>
