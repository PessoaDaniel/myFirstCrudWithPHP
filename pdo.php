<?php
$dsn = ('mysql: host=127.0.0.1; viewport=3306; dbname=projeto');
$user = 'root';
$pass = '';
try{
	$pdo = new PDO($dsn, $user, $pass);
}
catch(PDOException $ex){
	echo 'Erro: ' .$ex-> getMessage();
}




