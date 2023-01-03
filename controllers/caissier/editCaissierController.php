<?php
    require_once '../../model/caissierModel.php';

    extract($_POST);
    $result = update($id_caisse,$nom_caisse,$prenom_caisse,$niveau);

    header("location:../../view/caisses/liste.php");

    