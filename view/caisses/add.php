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
    <form action="../../controllers/caissier/addcaissierController.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom_caisse:</label>
            <input type="text" name="nom_caisse" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">prenom_caisse:</label>
            <input type="text" name="prenom_caisse" class="form-control" id="exampleFormControlInput1">
        </div>
        <select name="niveau" id="" class="form-control">
            <option value="">choisir un niveau</option>
            <option value="plein">plein</option>
            <option value="intermediaire">intermediaire</option>
            <option value="debutant">debutant</option>
        </select>
       
        <input type="submit" value="valider" class="btn btn-primary">
    </form>
</div>
</body>
</html>