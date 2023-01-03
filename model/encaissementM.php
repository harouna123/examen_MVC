<?php 
    require_once 'config.php';

    function addEncaissement($id_caisse,$id_etudiant,$date_debut,$date_fin,$heure_encaissement){

        $sql = "INSERT INTO encaisser VALUES(null,$id_caisse,$id_etudiant,'$date_debut','$date_fin','$heure_encaissement',null,null,null) " ;

        $connex = getConnexion();

        return $connex->exec( $sql);
    }

    function liste(){
        $connexion = getConnexion();
    
        $les_caisse = $connexion->query("select *from encaisser e, etudiant etu, caissier c where e.id_etudiant = etu.id and e.id_caisse = c.id_caisse");
        return $les_caisse;
    }

    function update($id_encaissement,$id_caisse,$id_etudiant,$date_debut,$date_fin,$heure_encaissement){
        $sql = "UPDATE encaisser SET id_caisse ='$id_caisse', id_etudiant ='$id_etudiant', date_debut ='$date_debut',date_fin = '$date_fin', heure_encaissement ='$heure_encaissement' where id_encaissement = $id_encaissement";
        $connex = getConnexion();
        return $connex->exec($sql); 
    }


