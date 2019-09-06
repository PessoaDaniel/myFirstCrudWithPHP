<?php
include 'pdo.php';
include 'validacao.php'
$con = getConection();

$sql = 'insert into herois (nome, descricao,origem,sexo,raca,ranking) values (?,?,?,?,?,?)';

$stmt = prepare($sql);

$stmt -> bindValue(1, 'Zero_Two');
$stmt -> bindValue(2, 'qualque coisa');
$stmt -> bindValue(3, 'Desconhecida');
$stmt -> bindValue(4, 'F');
$stmt -> bindValue(5, 'Urrossauro');
$stmt -> bindValue(6, 'S');