<?php
    require_once '../../model/caissierModel.php';

    extract($_POST);


    $result = addCaissier($nom_caisse,$prenom_caisse,$niveau);

    header("location:../../view/caisses/liste.php");






