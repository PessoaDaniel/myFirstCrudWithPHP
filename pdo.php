<?php
//--------------------Conexão-------------------------------------------------------------------------------------------
function _conection()
{
    $pdo = new PDO("mysql:dbname=projeto;host=127.0.0.1;charset=utf8","root","");
    return $pdo;
}

//--------------------Create--------------------------------------------------------------------------------------------
function _createPersonagem($nomep, $animep, $origemp, $sexop, $rankp)
{
    $sql = 'INSERT INTO perssonagens(nome,anime,origem,sexo,ranking) VALUES(?,?,?,?,?)';
    $con = _conection();
    $stmt = $con->prepare($sql);
    $stmt->bindValue(1, $nomep);
    $stmt->bindValue(2, $animep);
    $stmt->bindValue(3, $origemp);
    $stmt->bindValue(4, $sexop);
    $stmt->bindValue(5, $rankp);
    $stmt->execute();
}

function _cadastropoder($nomepoder, $elemento, $categoria, $atributo,$cat)
{
  $sql = 'INSERT INTO teste(nome,elemento,categoria,atributo,catalizador) VALUES(?,?,?,?,?)';
    $con2 = _conection();
    $stmt = $con2->prepare($sql);
    $stmt->bindValue(1, $nomepoder);
    $stmt->bindValue(2, $elemento);
    $stmt->bindValue(3, $categoria);
    $stmt->bindValue(4, $atributo);
    $stmt->bindValue(5,$cat);
    $stmt->execute();
    

}


//-------------------Read-----------------------------------------------------------------------------------------------
function _buscadados()
{
    $sql = "SELECT * FROM perssonagens ORDER BY nome";
    $res = _conection()->query($sql);
    $info = $res->fetchAll(PDO::FETCH_ASSOC);
    return $info;

}


function _buscapoderes($id)
{

    $sql = "SELECT * FROM poderes WHERE id = :id ORDER BY nome";
    $res = _conection()->prepare($sql);
    $res->bindValue(':id',$id);
    $res->execute();
    $pod = $res->fetch(PDO::FETCH_ASSOC);
    return $pod;
}

/*
//--------------------Update--------------------------------------------------------------------------------------------
    $sql= "UPDATE perssonagens SET sexo = :o WHERE id = :id ";
    $res=$pdo->prepare($sql);
    $o='M';
    $id='9';
    $res->bindValue(':o',$o);
    $res->bindValue(':id',$id);
    $res->execute();
*/
//--------------------Delete--------------------------------------------------------------------------------------------

function _deletepessona($id)
{
    $sql = "DELETE FROM perssonagens WHERE   id = :id";
    $res = _conection()->prepare($sql);
    $res->bindValue(':id', $id);
    $res->execute();
}

function _deletepoder($idp)
{

    $sql = "DELETE FROM teste WHERE   id = :id";
    $res = _conection()->prepare($sql);
    $res->bindValue(':id', $idp);
    $res->execute();
}


