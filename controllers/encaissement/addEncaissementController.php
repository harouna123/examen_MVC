<?php
    require_once '../../model/encaissementM.php';

    extract($_POST);


    $result = addEncaissement($id_caisse,$id_etudiant,$date_debut,$date_fin,$heure_encaissement);


    header("location:../../view/encaissement/liste.php");

