 <?php
//--------------------Conexão-------------------------------------------------------------------------------------------
    function _conection(){
    $pdo = new PDO("mysql:dbname=projeto;host=127.0.0.1;charset=utf8","root","");
    return $pdo;
}
//--------------------Create--------------------------------------------------------------------------------------------
function _createPersonagem($nomep,$animep,$origemp,$sexop,$rankp){
$sql ='INSERT INTO perssonagens(nome,anime,origem,sexo,ranking) VALUES(?,?,?,?,?)';
$con=_conection();
$stmt=$con->prepare($sql);
$stmt->bindValue(1,$nomep);
$stmt->bindValue(2,$animep);
$stmt->bindValue(3,$origemp);
$stmt->bindValue(4,$sexop);
$stmt->bindValue(5,$rankp);
$stmt->execute();
}
function _cadastropoder(){
$sql ='INSERT INTO poderes(nome,anime,origem,sexo,ranking) VALUES()';
    $con2 =_conection();

}

/*
//-------------------Read-----------------------------------------------------------------------------------------------
$sql="SELECT * FROM perssonagens WHERE id =:id";
$res=$pdo->prepare($sql);
//$res->bindValue(':x','*');
$res->bindValue(':id',1);
$res->execute();
$result=$res->fetch(PDO::FETCH_ASSOC);
foreach ($result as $key => $value){
    echo "$key". ":"."$value.<br>";
>>>>>>> c749f99a2c6ef4ecb19360df7667a02d116c07b1
}
//--------------------Update--------------------------------------------------------------------------------------------
    $sql= "UPDATE perssonagens SET sexo = :o WHERE id = :id ";
    $res=$pdo->prepare($sql);
    $o='M';
    $id='9';
    $res->bindValue(':o',$o);
    $res->bindValue(':id',$id);
    $res->execute();
//--------------------Delete--------------------------------------------------------------------------------------------
$sql = "DELETE FROM perssonagens WHERE   id = :id";
$res = $pdo->prepare($sql);
$id = 8;

    $res->bindValue(':id',$id);
    $res->execute();
*/



