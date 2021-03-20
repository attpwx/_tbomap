<?php
include_once('include/Database.php');
define('SS_DB_NAME', 'tbo_db');
define('SS_DB_USER', 'it');
define('SS_DB_PASSWORD', 'tbo039301442');
define('SS_DB_HOST', 'thebestone.thaiddns.com:3306');

$dsn	= 	"mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
$pdo	=	"";
try {
	$pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>