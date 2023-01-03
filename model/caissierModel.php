<?php
    require_once 'config.php';

    function addCaissier($nom_caisse,$prenom_caisse,$niveau){
        $sql = "INSERT INTO caissier VALUES (null,'$nom_caisse','$prenom_caisse','$niveau') ";


        $connex = getConnexion();
    
        return $connex->exec($sql);
    }
    

    function listeCaissier(){
        $connexion = getConnexion();
    
        $les_caissier = $connexion->query("select * from caissier ");
        return $les_caissier;
    }

    function update($id_caisse, $nom_caisse, $prenom_caisse, $niveau){
        $sql = "UPDATE caissier SET nom_caisse ='$nom_caisse', prenom_caisse ='$prenom_caisse', niveau ='$niveau' where id_caisse = $id_caisse";
        $connex = getConnexion();
        return $connex->exec($sql); 
    }