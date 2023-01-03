<?php
    require_once 'config.php';

    function addEtudiant($nom,$prenom,$naissance,$lieu,$diplome,$nom_tuteur,$code_classe){
        $sql = "INSERT INTO etudiant VALUES (null,'$nom','$prenom','$naissance','$lieu','$diplome','$nom_tuteur','$code_classe') ";

        $connex = getConnexion();
    
        return $connex->exec($sql);
    }

    function listeEtudiant(){
        $connexion = getConnexion();
    
        $les_etudiants = $connexion->query("select * from etudiant e,classe c where e.code_classe = c.code_classe  ");
        return $les_etudiants;
    }

    function update($id, $nom, $prenom, $naissance, $lieu, $diplome,$nom_tuteur,$code_classe){
        $sql = "UPDATE etudiant SET nom ='$nom', prenom ='$prenom', naissance ='$naissance',lieu = '$lieu', diplome ='$diplome',nom_tuteur ='$nom_tuteur',code_classe ='$code_classe' where id = $id";
        $connex = getConnexion();
        return $connex->exec($sql); 
       


    }