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
    <form action="../../controllers/agents/AgentController.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom_agent:</label>
            <input type="text" name="nom_agent" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">salaire:</label>
            <input type="number" name="salaire" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">prime:</label>
            <input type="number" name="prime" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">commission:</label>
            <input type="number" name="commission" class="form-control" id="exampleFormControlInput1">
        </div>
        
       
        <input type="submit" value="valider" class="btn btn-primary">
    </form>
</div>
</body>
</html>