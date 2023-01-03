<?php
    require_once "../../model/config.php";
    $id = $_GET['id'];

    $result = "DELETE from etudiant WHERE id =".$id;
    $connex = getConnexion();
    $delete = $connex->exec($result);
    
    header("location:liste.php");

?>