<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $statement = $pdo -> prepare("UPDATE  members SET nom= :nom ,prenom= :prenom ,
    email = :email ,sex =:sex ,age =:age ,password= :password)");
   
   
        $nom = $_POST['nom'];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $sex = $_POST["sex"];
        $age = $_POST['age'];
        $password = $_POST["password"];
    
       
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
