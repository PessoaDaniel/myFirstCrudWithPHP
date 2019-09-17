<?php
include 'pdo.php';



$nome_poder = $_POST['nome_poder'];
$elemento = $_POST['elemento'];
$atrib = $_POST['atributo'];
$categoria = $_POST['categoria'];
$cat = $_POST['cat'];
$idp = $_GET['a'];

        try{
            _cadastropoder($nome_poder,$elemento,$categoria,$atrib,$cat,$idp);
            header("location:listapoderes.php?a=$idp");
        } catch(Exception $e2){
            echo $e2->getMessage();

}