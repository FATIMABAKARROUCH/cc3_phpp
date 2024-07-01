<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['age']) ||empty($_POST['sex']) || empty($_POST['password'])) {
        echo '<script>alert("Veuillez remplir tous les champs.")</script>';
    }else{
        $nom = $_POST['nom'];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $age = $_POST['age'];
        $sex = $_POST["sex"];
        $password = $_POST["password"];
    
        $statement = $pdo -> prepare("INSERT INTO members (nom,prenom,email,age ,sex,password) VALUES
        (:nom, :prenom, :email ,:age, :sex, :password)");
        $statement -> execute([
           
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':age' => $age,
            ':sex' => $sex,
            ':password' => $password
    
        ]);
        header("Location:afficher.php");
        exit;
    }
}