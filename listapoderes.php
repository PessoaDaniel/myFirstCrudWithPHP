<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lista de poderes</title>
</head>
<body>
<?php
include 'pdo.php';

?>
<div class="container">

    <h1>Poderes</h1>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Elemento</th>
        <th scope="col">Atributo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Catalizador</th>
    </tr>

    </thead>
    <tbody>
    <tr>
        <?php

        $podpers = $_GET['a'];
        $poderes = _buscapoderes($podpers);
        if (count($poderes) > 0) {
            for ($i = 0; $i < count($poderes); $i++) {
                echo "<tr>";
                foreach ($poderes[$i] as $key => $value) {
                    if ($key != "id") {
                        echo "<td>" . $value . "</td>";
                    }
                }
                ?>
                <td>
                    <a href="listapoderes.php?pod=<?php $poderes[$i]['id'];?>&a=<?=$podpers;?>"><button class="btn btn-dark">Excluir</button></a>
                    <?php
                    if(isset($_GET['pod'])){
                        $podpers=$_GET['a'];
                        $idperssona = $_GET['pod'];
                        $p = _deletepoder($idperssona);
                        header("location:listapoderes.php?a=$podpers");

                    }
                    ?>
                </td>
                <?php
              echo "</tr>";
            }

        }
        ?>
    </tr>
    </tbody>
</table>
<div>
    <a href="cadastropoderes.php?a=<?=$podpers;?>">
        <button class="btn btn-primary">Cadastrar novo Poder</button>
    </a>
    <a href="index.php?a=<?=$podpers;?>">
        <button class="btn btn-ligth">Voltar</button>
    </a>
</div>
</div>
<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</body>
</html>