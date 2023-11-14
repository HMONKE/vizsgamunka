<?php
session_start();
if(isset($_GET["pro_id"])){
    $pro_id = $_GET["pro_id"];
    if(!empty($_SESSION["cart"])){
        $acol = array_column($_SESSION["cart"], 'pro_id');
        if(in_array($pro_id, $acol)){
            $_SESSION["cart"][$pro_id]['qty'] += 1;
        } 
        else{
            $item = [
                'pro_id' => $pro_id,
                'qty' => 1
            ];

            $_SESSION["cart"][$pro_id] = $item;
        }
    } 
    else{
        $item = [
            'pro_id' => $pro_id,
            'qty' => 1
        ];

        $_SESSION["cart"][$pro_id] = $item;

    }
}
?>