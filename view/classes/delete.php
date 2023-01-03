<?php
    require_once "../../model/config.php";
    $code_classe = $_GET['code_classe'];

    $result = "DELETE from classe WHERE code_classe =".$code_classe;
    $connex = getConnexion();
    $delete = $connex->exec($result);
    
    header("location:liste.php");


?>