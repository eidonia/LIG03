<?php
class PDOConfig extends PDO{

	public function __construct($file = 'config/sql.conf'){
try {
	if(!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open '. $file .'.');
	$dsn = $settings['database']['driver'] .
	':dbname='. $settings['database']['dbname'] .
	';host=' .$settings['database']['host'] .
	((!empty($setting['database']['port'])) ? (';port=' . $settings['database']['port']) : '');
var_dump($dsn);
	parent::__construct($dsn , $settings['database']['username'], $settings['database']['password']);
} catch (PDOException $e){
echo $e->getMessage();
}
	}
}
?>
