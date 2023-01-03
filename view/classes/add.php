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
    <form action="../../controllers/classeController.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom_classe:</label>
            <input type="text" name="nom_classe" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">frais_inscription:</label>
            <input type="number" name="frais_inscription" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">mensualite:</label>
            <input type="number" name="mensualite" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">frais_tenu:</label>
            <input type="number" name="frais_tenu" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">frais_amical:</label>
            <input type="number" name="frais_amical" class="form-control" id="exampleFormControlInput1">
        </div>

        <input type="submit" value="valider" class="btn btn-primary">
    </form>
</div>
</body>
</html>