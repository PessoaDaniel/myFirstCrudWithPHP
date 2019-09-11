<?php
include 'pdo.php';



$nome_poder = $_POST['nome_poder'];
$elemento = $_POST['elemento'];
$atrib = $_POST['atributo'];
$categoria = $_POST['categoria'];
$catalizador = $_POST['cat'];

        try{
            _cadastropoder($nome_poder,$elemento,$categoria,$atrib);
        } catch(Exception $e2){
            echo $e2->getMessage();
}