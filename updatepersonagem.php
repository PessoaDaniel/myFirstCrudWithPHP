<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Personagens</title>
    <style>
        
        body{
            backgoun-color: #fff
        }
        .container
            background-color: whitesmoke;
        }
        .form-control{
            width: 350px;
        }
        
    </style>
</head>
<body>
<div class="container">
    <div class="row">
    <h1 class="col-md-12">Informações do Perssonagem</h1>
     <div>
         <?php
         include'pdo.php';
         if(isset($_GET['pes'])){
             $dado=$_GET['pes'];
             $inf = _buscadadospessoa($dado);
         }
         ?>
    <form method="POST" action="perssonagem.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom" class="col-md-1">NOME</label>
            <input type="text" name="cpnome" id="nom" class="form-control" value="<?=$inf["nome"]?>">
            <label for="ani" class="col-md-1">ANIME</label>
            <input type="text"  name="cpanime" id="ani" class="form-control" value="<?=$inf["anime"]?>">
            <label for="orig" class="col-md-1">ORIGEM</label>
            <input type="text" name="cporigem" id="orig" class="form-control" value="<?=$inf["origem"]?>">
            <br/>

            <?php
            if($inf['sexo']=="M"){
                echo '<label for="masc">MASCULINO</label>';
                echo '<input name="sexo" type="radio" id="masc" value="M" checked>';
                echo '<label for="fem">FEMININO</label>';
                echo '<input value="F" name="sexo" type="radio" id="fem">';
        }elseif($inf['sexo']=="F"){
                echo '<label for="masc">MASCULINO</label>';
                echo '<input name="sexo" type="radio" id="masc" value="M" >';
                echo '<label for="fem">FEMININO</label>';
                echo '<input value="F" name="sexo" type="radio" id="fem"checked>';
            }
        ?>
        <label for="rank">RANK</label>
        <select id="rank" name="rank">
            <option value="SS">SS</option>
            <option value="S">S</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
            <br/>
            <label for="up">Adicione foto do Personagem</label>
            <input type="file" name="foto" id="up">
            <br/>
        <button  class="btn btn-primary btn-lg" type="submit">Atualizar</button>
        </div>
    </form>
    </div>
</div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</body>
</html>