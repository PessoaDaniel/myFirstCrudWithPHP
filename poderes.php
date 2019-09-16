<?php
include 'pdo.php';



$nome_poder = $_POST['nome_poder'];
$elemento = $_POST['elemento'];
$atrib = $_POST['atributo'];
$categoria = $_POST['categoria'];
$cat = $_POST['cat'];
//$rel = $persona;

        try{
            _cadastropoder($nome_poder,$elemento,$categoria,$atrib,$cat);
            header('location:listapoderes.php');
        } catch(Exception $e2){
            echo $e2->getMessage();

}