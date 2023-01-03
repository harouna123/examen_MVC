<?php

require_once 'config.php';

function addclasse($nom_classe, $frais_inscription, $mensualite, $frais_tenu, $frais_amical){

    $sql = "INSERT INTO classe VALUES (null,'$nom_classe','$frais_inscription','$mensualite','$frais_tenu','$frais_amical') ";

    $connex = getConnexion();

    return $connex->exec($sql);
}

function listeclasse(){
    $connexion = getConnexion();

    $les_classe = $connexion->query("select *from classe");
    return $les_classe;
}


function update($code_classe, $nom_classe, $frais_inscription, $mensualite, $frais_tenu, $frais_amical){
    $sql = "UPDATE classe SET nom_classe ='$nom_classe', frais_inscription =$frais_inscription, mensualite =$mensualite,frais_tenu = $frais_tenu, frais_amicale =$frais_amical where code_classe = $code_classe";
    $connex = getConnexion();
    return $connex->exec($sql); 
}