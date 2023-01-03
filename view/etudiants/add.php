<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <form action="../../controllers/etudiant/etudiantController.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom:</label>
            <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">prenom:</label>
            <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">naissance:</label>
            <input type="date" name="naissance" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">lieu:</label>
            <input type="text" name="lieu" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">diplome:</label>
            <input type="text" name="diplome" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom tuteur:</label>
            <input type="text" name="nom_tuteur" class="form-control" id="exampleFormControlInput1">
        </div>
        <?php 
            require_once "../../model/addClasse.php";

            $les_classe = listeclasse()->fetchall();
        ?>
        <select name="code_classe" id="" class="form-control">
            <option value="">selectionnez la classe:</option>
            <?php foreach($les_classe as $une_classe){ ?>
            <option value="<?php echo $une_classe["code_classe"] ?>">
                <?php echo $une_classe["nom_classe"]  ?>
            </option>
            <?php } ?>
        </select>

        <input type="submit" value="valider" class="btn btn-primary">
    </form>
</div>
</body>
</html>