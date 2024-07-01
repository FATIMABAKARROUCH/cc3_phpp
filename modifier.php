<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editMember.php" method="POST" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">        
                <label class="form-label">Nom:</label>
                <input type="text" class="form-control" name="nom" placeholder="nom" value="<?php echo $member['nom']; ?>">
            </div>    
        </div>
        <div class="mb-3">
            <div class="col">
                <label class="form-label">Prenom:</label>
                <input type="text" class="form-control" name="prenom" placeholder="prenom" value="<?php echo $member['prenom']; ?>">
            </div>
        </div>
        <div class="col">
            <label class="form-label">email:</label>
            <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $member['email']; ?>">
        </div> 
        <div class="col">
            <label class="form-label">gender:</label>
            <select name="sex" class="form-select" aria-label="Default select example">
                <option selected>choose your gender</option>
                <?php foreach($members as $member): ?>
                    <option value="<?php echo $member['sex']; ?>"><?php echo $member['sex']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col">
            <label class="form-label">age:</label>
            <input type="number" class="form-control" name="age" placeholder="age" value="<?php echo $member['age']; ?>">
        </div> 
        <div class="col">
            <label class="form-label">password:</label>
            <input type="password" class="form-control" name="password" placeholder="password" value="<?php echo $member['password']; ?>">
        </div> 
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>        
</body>
</html>
