<?php
    require_once 'config.php';

    function addAgent($nom_agent,$salaire,$prime,$commission){
        $sql = "INSERT INTO agent VALUES (null,'$nom_agent','$salaire','$prime','$commission') ";


        $connex = getConnexion();
    
        return $connex->exec($sql);
    }
    

    function listeAgent(){
        $connexion = getConnexion();
    
        $les_Agents = $connexion->query("select * from agent ");
        return $les_Agents;
    }

    function update($id, $nom_agent, $salaire, $prime, $commission){
        $sql = "UPDATE agent SET nom_agent ='$nom_agent', salaire ='$salaire', prime ='$prime', commission ='$commission' where id = $id";
        $connex = getConnexion();
        return $connex->exec($sql); 
    }

    