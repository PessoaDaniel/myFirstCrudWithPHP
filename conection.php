<?php
 include 'pdo.php';

 $res=$pdo->prepare('INSERT INTO perssonagens(nome,anime,sexo,origem,ranking,descricaopersonagem) VALUES(:nom,:ani,:sex,:orig,:rank,:descricao)');
$res->bindValue(":nom",'Zero_TWO');
$res->bindValue(":ani",'Darling in the Franxx');
$res->bindValue(":sex",'F');
$res->bindValue(":orig",'Desconhecida');
$res->bindValue(":rank",'S');
$res->bindValue(":descricao",'Qualquer_coisa');
$res->execute();