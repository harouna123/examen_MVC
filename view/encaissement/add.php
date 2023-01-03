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
    <form action="../../controllers/encaissement/addEncaissementController.php" method="post">

    <?php 
            require_once "../../model/config.php";

            $connexion = getConnexion();

            $les_etudiant = $connexion->query("select *from etudiant ")->fetchall();
            $les_caisse = $connexion->query("select *from caissier ")->fetchall();

            //$les_caisse = liste()->fetchall();
            //$les_etudiant = listetudiant()->fetchall();
        ?>
        <label for="exampleFormControlInput1" class="form-label">nom_caisse:</label>
        <select name="id_caisse" id="" class="form-control">
            <option value="">selectionnez la caisse:</option>
            <?php foreach($les_caisse as $une_caisse){ ?>
            <option value="<?php echo $une_caisse["id_caisse"] ?>">
                <?php echo $une_caisse["prenom_caisse"]." ".$une_caisse["nom_caisse"] ?>
            </option>
            <?php } ?>
        </select>

        <?php 
            //$les_etudiant = listetudiant()->fetchall();
        ?>
        <label for="exampleFormControlInput1" class="form-label">nom_etudiant:</label>
        <select name="id_etudiant" id="" class="form-control">
            <option value="">selectionnez un etudiant:</option>
            <?php foreach($les_etudiant as $un_etudiant){ ?>
            <option value="<?php echo $un_etudiant["id"] ?>">
                <?php echo $un_etudiant["prenom"] ." ".$un_etudiant["nom"] ?>
            </option>
            <?php } ?>
        </select>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">date debut:</label>
            <input type="date" name="date_debut" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">date fin:</label>
            <input type="date" name="date_fin" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">heure encaissement:</label>
            <input type="time" name="heure_encaissement" class="form-control" id="exampleFormControlInput1" >
        </div>




        <input type="submit" value="valider" class="btn btn-primary">
    </form>
</div>
</body>
</html>