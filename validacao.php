<?php
include 'pdo.php';
    $nome = $_POST['cpnome'];
    $anime = $_POST['cpanime'];
    $origem = $_POST['cporigem'];
    $sexo = $_POST['sexo'];
    $rank = $_POST['rank'];



    _createPersonagem($nome,$anime,$origem,$sexo,$rank);

