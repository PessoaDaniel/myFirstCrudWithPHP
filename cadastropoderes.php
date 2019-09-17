<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Poderes</title>
</head>
<body>
    <div class="container">
    <h1>Digite os Dados do Podeer</h1>
        <?php
        $id=$_GET['a'];
        ?>
    <div class="form-group">
        <form method="post" action="poderes.php?a=<?=$id?>">
            <lable for="nom">Nome</lable>
            <input type="text" name="nome_poder" id="nom" class="form-control">
            <label for="elmnt">Elemento</label>
            <input type="text" name="elemento" id="elmnt" class="form-control">
            <label for="atbt">Atributo</label>
            <input type="text" id="atbt" name="atributo" class="form-control">
            <label for="categ">Categoria</label>
            <input type="text" id="categ"  class="form-control" name="categoria">
            <label for="cat">Catalizador</label>
            <input type="text " class="form-control" name="cat" id="cat" >


            <br/>
            <a href="listapoderes.php?a=<?=$id?>">
            <button type="submit" class="btn btn-primary" >Cadastrar</button></a>
            <a href="listapoderes.php?a=<?=$id;?>">
                <button class="btn btn-ligth">Cancelar</button>
            </a>
        </form>
    </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</body>
</html>