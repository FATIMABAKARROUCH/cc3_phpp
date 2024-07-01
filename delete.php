<?php

 $id = $_GET['id'];

   require 'database.php';
    $statement= $pdo->prepare('DELETE FROM members WHERE id = ?');
    $statement -> execute([$id]);
  
   
    
header('location:afficher.php');