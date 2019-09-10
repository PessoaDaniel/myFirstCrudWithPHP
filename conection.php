<?php
 include 'pdo.php';

 $res=$pdo->prepare('INSERT INTO perssonagens(nome,anime,sexo,origem,ranking,descricaopersonagem) VALUES(:nom,:ani,:sex,:orig,:rank,:descricao)');
$res->bindValue(":nom",'Naruto');
$res->bindValue(":ani",'naruto');
$res->bindValue(":sex",'M');
$res->bindValue(":orig",'Konoha');
$res->bindValue(":rank",'SS');
$res->bindValue(":descricao",'Badass');
$res->execute();