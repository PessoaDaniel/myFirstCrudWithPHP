 <?php
 /*try {
	 
	 echo 'conexão bem sucedida';
 } catch (PDOException $e) {

 	echo $e->getMenssage();
 	
 }*/	


$pdo = new PDO("mysql:dbname=projeto;host=localhost","root","");
 
$sql ='INSERT INTO perssonagens(nome,anime,origem,sexo,ranking,descricaopersonagem) VALUES(?,?,?,?,?,?)'; 

$stmt=$pdo->prepare($sql);
$stmt->bindValue(1,'Zero_TWO');
$stmt->bindValue(2,'Darling in the Franxx');
$stmt->bindValue(3,'F');
$stmt->bindValue(4,'Desconhecida');
$stmt->bindValue(5,'S');
$stmt->bindValue(6,'Qualquer_coisa');
try {
	$stmt->execute();
	echo 'sucesso';

} catch (Exception $e) {
	echo $e->getMenssage();
}

?>