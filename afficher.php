
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php
require 'database.php';
    $statement = $pdo->prepare("SELECT * FROM members");
    $statement->execute();
    $members = $statement ->fetchAll(PDO::FETCH_ASSOC);
     //var_dump($members)
?>              <button type="submit" class="btn btn-succes" name="ajouter"
                  style="width:50%" href="ajouter.php">ajouter un membre</button>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">email</th>
                        <th scope="col">age</th>
                        <th scope="col">gender</th>
                        <th scope="col">password</th>
                        </tr>
                    </thead>
                    <tbody><?php
                     foreach($results as $result){
                    ?>
                        <tr>
                            <td><?php echo $result ['id']?></td>
                            <td><?php echo $result ['nom']?></td>
                            <td><?php echo $result ['prenom']?></td>
                            <td><?php echo $result ['email']?></td>
                            <td><?php echo $result ['age']?></td>
                            <td><?php echo $result ['sex']?></td>
                            <td><?php echo $result ['password']?></td>
                            <td><a   id ="delLink" onclick = "return confirm('are u sure u wanna delete it')" href='delete.php?id=<?php echo $member['id']?>'>delete</a></td>

                        <?php
                }  
              ?>    

            </tbody>
            </table>


    
</body>
</html>