<?php
    require_once '../../model/addClasse.php';

    extract($_POST);
    $result = update($code_classe,$nom_classe,$frais_inscription,$mensualite,$frais_tenu,$frais_amical);

    header("location:../../view/classes/liste.php");