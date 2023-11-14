<?php

    if(isset($_GET["category"])){
        echo'<div class="row g-0 mt-5">';
            $prod=new View;
            $prod->productsByCategoryV(htmlspecialchars($_GET["category"]));
        echo'</div>';
    } else{
        echo '<h4>No category specified</h4>';
    }

?>