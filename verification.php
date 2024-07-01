<?php
 session_start();

require( 'database-php');

if (empty($_POST[ 'email'])|| empty($_POST['password'])) {
$_SESSION[ 'loginError'] = "Les données d'authentification sont obligatoires";
header ("Location: connexion.php");
exit;
}


$statement = $pdo-›prepare("SELECT * FROM members WHERE email = :email AND password = :password");
$statement->execute([
':email' => $_POST[ 'email'],
':password' => $_POST[ 'password']



]);
$member = $statement -> fetch(PDO:: FETCH_ASSOC);

if($member) {
    $_SESSION[ "email"] = $member[ "email"];
    header ("Location: afficher.php");
    exit;
}




else{
$_SESSION[ 'loginError'] = "Les données d'authentification sont incorrects ";
header ('Location: connexion.php');
exit;
}
?>