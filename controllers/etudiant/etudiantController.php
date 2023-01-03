<?php
    require_once '../../model/etudiantModel.php';

    extract($_POST);


    $result = addEtudiant($nom,$prenom,$naissance,$lieu,$diplome,$nom_tuteur,$code_classe);



    header("location:../../view/etudiants/liste.php");
