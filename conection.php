<?php
include 'pdo.php';
include 'validacao.php';

    $con = getConection();

   function  setPersonagem(array[]){

     $sql = 'insert into herois (nome, descricao,origem,sexo,raca,ranking) values (?,?,?,?,?,?)';

     $stmt = prepare($sql);

     $stmt->bindValue(1, nome );
     $stmt->bindValue(2, descpersona);
     $stmt->bindValue(3, );
     $stmt->bindValue(4, 'F');
     $stmt->bindValue(5, 'Urrossauro');
     $stmt->bindValue(6, 'S');


   }


   function getPersonagem(){


   }

