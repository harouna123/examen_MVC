<?php 
    require_once '../../model/config.php';
    $code_classe = $_GET['code_classe'];
    $connexion = getConnexion();

    $la_classe = $connexion->query("select *from classe where code_classe = " .$code_classe)->fetch();
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <form action="../../controllers/classe/editclasseControllers.php" method="post">
        <input type="hidden" name="code_classe" value="<?php echo $la_classe["code_classe"]; ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom_classe:</label>
            <input type="text" name="nom_classe" class="form-control" id="exampleFormControlInput1" value="<?php echo $la_classe["nom_classe"]; ?>" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">frais_inscription:</label>
            <input type="number" name="frais_inscription" class="form-control" id="exampleFormControlInput1" value="<?php echo $la_classe["frais_inscription"]; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">mensualite:</label>
            <input type="number" name="mensualite" class="form-control" id="exampleFormControlInput1" value="<?php echo $la_classe["mensualite"]; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">frais_tenu:</label>
            <input type="number" name="frais_tenu" class="form-control" id="exampleFormControlInput1" value="<?php echo $la_classe["frais_tenu"]; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">frais_amical:</label>
            <input type="number" name="frais_amical" class="form-control" id="exampleFormControlInput1" value="<?php echo $la_classe["frais_amicale"]; ?>">
        </div>

        <input type="submit" value="valider" class="btn btn-primary">
    </form>
</div>
</body>
</html>