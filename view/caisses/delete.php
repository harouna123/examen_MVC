<?php
    require_once "../../model/config.php";
    $id_caisse = $_GET['id_caisse'];

    $result = "DELETE from caissier WHERE id_caisse =".$id_caisse;
    $connex = getConnexion();
    return $connex->exec($result); 

    header("location:liste.php");

?>