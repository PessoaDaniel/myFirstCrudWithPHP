<?php

function getConection(){
	$dsn = ('mysql: host=127.0.0.1; viewport=3306; dbname=projeto; charset=utf8');
	$user = 'root';
	$pass = '';
	try{
		$pdo = new PDO($dsn, $user, $pass);
		return $pdo;
	}
		catch(PDOException $ex){
			echo 'Erro: ' .$ex-> getMessage();
	}
}  


