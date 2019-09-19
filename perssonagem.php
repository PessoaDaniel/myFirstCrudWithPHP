<?php
include 'pdo.php';
$nome = $_POST['cpnome'];
$anime = $_POST['cpanime'];
$origem = $_POST['cporigem'];
$sexo = $_POST['sexo'];
$rank = $_POST['rank'];
$dado=$_GET['pes'];
if(isset($dado)) {
    _atualizardadospersona($nome,$anime,$origem,$sexo,$rank,$dado);
//    _atualizardadospersona($nome,$anime,$origem,$sexo,$rank,$dado);
    header('location:index.php');
} else {
    try {
        _createPersonagem($nome, $anime, $origem, $sexo, $rank);

      header('location:index.php');
    } catch (Exception $e) {
        echo $e->getMenssage();
    }
}

