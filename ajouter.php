<?php
session_start();
if (!isset($_SESSION['email'])){
  
}else{
    require ('database.php');
    $statement = $pdo ->prepare("SELECT id , sex FROM members");
    $statement->execute();
    $members = $statement->fetchAll(PDO::FETCH_ASSOC);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<nav class= "navbar navbar-light justify-content-center fs-3 mb-7" style = "background-color:#00ff5573" >
    ajouter un membre </nav>

   <div class="container d-flex-justify-content-center ">
           <form action="addMembers.php" method="POST" style = "width:50vw; min-width:300px ;">
              <div class="row mb-3">
               
                    <div class = "col">        
                    <label class ="form-label">Nom:</label>
                    <input type ="text" class = "form-control" name = "nom"
                        placeholder="nom">
                    </div>    
                

              </div>
              <div class="mb-3">
                <div class="col">
                    <label class ="form-label">Prenom:  </label>
                    <input type ="text" class = "form-control" name = "prenom"
                    placeholder="prenom" >
                </div>
                
                    
                </div>
                <div class="col">
                  <label class ="form-label">email : </label>
                  <input type="email"  class="form-control" name = "email"
                  placeholder="email">
                </div> 
                <div class="col">
                    <label class ="form-label">gender:  </label>
                    <select name = 'sex' class="form-select" aria-label="Default select example">
                        <option selected>choose ur gender</option>
                        <option value="1">male</option>
                        <option value="2">female</option>
                        <option value="3">other</option>
                    </select>
                <div class="col">
                    <label class ="form-label" >age : </label>
                    <input type="number"  class = "form-control" name='age'
                    placeholder="age">

                </div> 
                <div class="col">
                    <label class ="form-label" >password : </label>
                    <input type="password"  class = "form-control" name='password'
                    placeholder="password">

                </div> 
                   

             </div><br>
             <div>
                    <button type="submit" class="btn btn-success" name="ajouter" style ="position:relative; left:200px;width:100px" >Ajouter</button>
                  

             </div>
               
        

           </form>
        </div>
       


    

</body>
</html>