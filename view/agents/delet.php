<?php
    require_once "../../model/config.php";
    $id = $_GET['id'];

    $result = "DELETE from agent WHERE id =".$id;
    $connex = getConnexion();
    return $connex->exec($result); 

    header("location:liste.php");

?>