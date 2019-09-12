<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Herois</title>
</head>
<body>
	<?php
	include'pdo.php';
	?>
<div class="container">

        <h1>Lista de Personagens</h1>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Anime</th>
            <th scope="col"></th>
            <th scope="col">Sexo</th>
            <th scope="col">Origem</th>
            <th scope="col">Ranking</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
        	
            <th scope="Lista">1</th>
            <td>
                <?php
            	_listnome();

            	?>
            </td>
            <td>teste</td>
            <td>teste</td>
            <td>teste</td>
            <td>teste</td>
            <td>
                <a href="updatepersonagem.html">
                    <button class="btn btn-dark">Editar</button>
                </a>
                <a href="infoPersona.php">
                    <button class="btn btn-dark">Ver</button>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    <div>
        <a href="cadastropersonagem.html">
            <button class="btn btn-primary">Cadastrar Novo Heroi</button>
        </a>
    </div>
</div>
<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</body>
</html>