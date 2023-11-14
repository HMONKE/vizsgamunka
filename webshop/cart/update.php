<?php

session_start();

if(isset($_POST["update"])){

    $pro_id = $_POST["upid"];

    $acol = array_column($_SESSION["cart"], 'pro_id');

    if(in_array($pro_id, $acol)){
        $_SESSION["cart"][$pro_id]['qty'] = $_POST["qty"];
    } 
    else{
        $item = [
            'pro_id' => $pro_id,
            'qty' => 1
        ];

        $_SESSION["cart"][$pro_id] = $item;
    }

    header("location: ../index.php?page=cart");


}

?>