<?php
    session_start();
    @$email=$_POST["email"];
    @$passwords=$_POST["passwords"];
    @$save=$_POST["save"];
    $message="";
    if(isset($save)){
        require_once("config.php");
        $connexion = getConnexion();
		$sel=$connexion->prepare("select * from user where email=? and passwords=? limit 1");
		$sel->execute(array($email,$passwords));
		$tab=$sel->fetchAll();
		if(count($tab)>0){
			$_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
			" ".strtoupper($tab[0]["nom"]);
			$_SESSION["autoriser"]="oui";
			header("location:../index.php");
		}
        else{
			$message="Mauvais login ou mot de passe!";
			 
			header("location:../view/authentification/connexion.php");
		}	
    }