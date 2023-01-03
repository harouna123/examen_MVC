<?php
    session_start();
    if (!isset($_SESSION["autoriser"])) {
        header("location:view/authentification/connexion.php");
    }else{
        if(date("H")<18){
            $bienvenue="Bonjour et bienvenue ".$_SESSION["prenomNom"]." dans votre espace personnel";
        }
        else{
            $bienvenue="Bonsoir et bienvenue ". $_SESSION["prenomNom"]." dans votre espace personnel";
        }
    }
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>index</title>
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">UAHB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           gestion classe
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addClasse">ajouter</a></li>
            <li><a class="dropdown-item" href="view/classes/liste.php">lister</a></li>
        
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          gestion etudiant
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view/etudiants/add.php">ajouter</a></li>
            <li><a class="dropdown-item" href="view/etudiants/liste.php">lister</a></li>
        
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            gestion caisse
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view/caisses/add.php">ajouter</a></li>
            <li><a class="dropdown-item" href="view/caisses/liste.php">lister</a></li>
        
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            gestion encaissement
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view/encaissement/add.php">ajouter</a></li>
            <li><a class="dropdown-item" href="view/encaissement/liste.php">lister</a></li>
        
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            autres
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view/authentification/connexion.php">deconnexion</a></li>
        
          </ul>
        </li>
        
      </ul>

    </div>
  </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>