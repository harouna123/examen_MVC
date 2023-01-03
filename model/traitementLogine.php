<?php 
	session_start();
	@$nom=$_POST['nom'];
	@$prenom=$_POST['prenom'];
	@$email=$_POST['email'];
	@$passwords=$_POST['passwords'];
	@$rpass=$_POST['rpass'];
	@$save=$_POST['save'];
	$message='';

	if(isset($save)){
	if(empty($nom)) $message="<li>Nom ivalide</li>";
		if(empty($prenom)) $message="<li>prenom ivalide</li>";
		if(empty($email)) $message="<li>login ivalide</li>";
		if(empty($passwords)) $message="<li>pass ivalide</li>";
		if($passwords!=$rpass) $message="<li>le mot de pass doit etre identique</li>";
		if(empty($message)){
			require_once("config.php");
            $connexion= getConnexion();
			$res=$connexion->prepare("select id from user where email=? limit 1");
			$res->setFetchMode(PDO::FETCH_ASSOC);
			$res->execute(array($email));
			$tab=$res->fetchAll();
			if(count($tab)>0){
				$message="<li>login existe deja</li>";
			}
			else{
				$ins="insert into user(id,nom,prenom,email,passwords)
				values('','$nom','$prenom','$email','$passwords')";
				$connexion->exec($ins);
				header("location:../view/authentification/connexion.php");

			}
		}
	}

