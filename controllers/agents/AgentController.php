<?php
    require_once '../../model/AgentModel.php';

    extract($_POST);


    $result = addAgent($nom_agent,$salaire,$prime,$commission);

    header("location:../../view/agents/liste.php");






