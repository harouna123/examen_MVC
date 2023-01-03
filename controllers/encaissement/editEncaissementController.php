<?php
    require_once '../../model/encaissementM.php';

    extract($_POST);
    $result = update($id_encaissement,$id_caisse,$id_etudiant,$date_debut,$date_fin,$heure_encaissement);

    header("location:../../view/encaissement/liste.php");