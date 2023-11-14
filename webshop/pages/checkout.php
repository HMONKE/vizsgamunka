<?php
if(isset($_POST["lead"])){
    for($j=1; $j<$_POST["i"]; $j++){
        $data = array($_POST["order_id"],$_POST["product_id/$j"],$_POST["product_qty/$j"]);
        $order = new Controller;
        $order->ordersC($data);
    }
    echo'
    <div class="text-center my-5 py-5">
    <h4>Thank you for your order</h4>
    <p>After a few seconds, you will be redirected back to the home page</p>
    </div>';
    unset($_SESSION["cart"]);
    echo'<meta http-equiv="refresh" content="5; url=index.php">';
}
else{
    echo'
    <div class="container py-5">
    <h3 class="text-center">Purchase</h3>
    <form method="post">';
    $i=1;
    for($i; $i<=$_POST["allproducts"];$i++){
        echo'
        <p>'.$_POST["product_name/$i"].'<span class="ps-3">'.$_POST["product_qty/$i"].' piece</span></p>
        <input type="hidden" name="product_id/'.$i.'" value="'.$_POST["product_id/$i"].'">
        <input type="hidden" name="product_qty/'.$i.'" value="'.$_POST["product_qty/$i"].'"> 
        ';
    }
    $order_id= rand(0,100000);
    $checkId= new Controller;
    while(!$checkId->orderIdC($order_id)){
        $order_id= rand(0,100000);
    }
    echo'
    <p>Total: '.$_POST["total"].' Souls</p>
    <input type="hidden" name="order_id" value="'.$order_id.'">
    <input type="hidden" name="i" value="'.$i.'">
    <input type="submit" class="btn btn-success" name="lead" value="Purchase">
    </div>';
} ?>
