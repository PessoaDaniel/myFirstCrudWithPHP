<?php
include 'pdo.php';
include 'validacao.php';

    $con = getConection();

   function  create(){

     $sql = 'insert into herois (nome, descricao,origem,sexo,raca,ranking) values (?,?,?,?,?,?)';

     $stmt = prepare($sql);

     $stmt->bindValue(1, 'Zero_Two');
     $stmt->bindValue(2, 'qualque coisa');
     $stmt->bindValue(3, 'Desconhecida');
     $stmt->bindValue(4, 'F');
     $stmt->bindValue(5, 'Urrossauro');
     $stmt->bindValue(6, 'S');


   }


    function read()
    {
        $sql = "SELECT * FROM personagens WHERE id = :id ";
        $stmt = $con = getConection()->prepare($sql);
        $stmt->bindValue(":id", 1);
        $stmt->execute();
        $result = $stmt->fetchAll();
    }

    function update(){
       $sql = 'UPDATE peronagens SET nome =:dado WHERE id = :id';

        $stmt = prepare($sql);

        $stmt->bindValue(1, 'Naruto');

    }

    function delete(){

        $con =  getConection();
        $sql = 'DELETE FROM peronagens WHERE id = :id';
        $stmt = $con->prepare($sql);

        $stmt->bindValue(1, 1);
    }

/*$con = getConection();

function  setPersonagem(array[]){

    $sql = "insert into herois (nome, descricao,origem,sexo,raca,ranking) values ('02','qualquecoisa','desconhecida','F','Urrosauro','SS');";

    $con-> exec($sql);
*/


