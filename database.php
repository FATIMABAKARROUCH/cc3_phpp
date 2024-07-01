<?php
$host = 'localhost';
$port=3307;
$dbName = 'gestion_de_salle_de_sport';
$user ='root';
$password = 'Yuna123@456';

$dsn = "mysql:host ={$host};{$port};{$dbName};charset=UTF-8";

try{
    $pdo = new PDO ($dsn , $user, $password);
     //echo 'connection succesfuly';

}catch(PDOException $e){
    echo 'unconnected' .$e ->getMessage();
}


?>