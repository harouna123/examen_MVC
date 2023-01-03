<?php
    require_once "../../model/config.php";
    $id = $_GET['id_encaissement'];

    $result = "DELETE from encaisser WHERE id_encaissement =".$id;
    $connex = getConnexion();
    $delete = $connex->exec($result);

    header("location:liste.php");

?>