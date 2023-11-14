<?php 

    $torles = new View;
    $torles->torlesV();

    if(isset($_POST["torles"])){
        $del = new Controller;
        $del->torlesC($_POST["id"]);
        echo '<meta http-equiv="refresh" content="0">';
    }




?>