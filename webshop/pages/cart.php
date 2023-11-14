<div class="container py-5">
    <h2 class="text-center">Cart</h2>
    <table class="table my-3 text-center tablecolor">
        <a href="cart/empty.php" class="btn btn-sm btn-danger mt-2">Empty cart</a>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th colspan="2">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            if(isset($_SESSION["cart"])){
                $i = 1;
                foreach($_SESSION["cart"] as $cart){
                    $prod = new View;
                    $total += $prod->productByIdV($cart["pro_id"], 'price') * $cart["qty"];
                    echo '
                    <tr class="text-center">
                        <td># '.$i.'</td>
                        <td>'.$prod->productByIdV($cart["pro_id"], 'product_name').'</td>
                        <td>'.$prod->productByIdV($cart["pro_id"], 'price').'</td>
                        <td>
                            <form action="cart/update.php" method="post">
                                <input type="number" value="'.$cart["qty"].'" name="qty" min="1">
                                <input type="hidden" name="upid" value="'.$cart["pro_id"].'">
                        </td>
                        <td>
                            <input type="submit" name="update" value="Edit" class="btn btn-warning">
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="cart/removeitem.php?id='.$cart["pro_id"].'">Delete</a>
                        </td>
                    </tr>                   
                    ';
                    $i++;
                }
            }
            else{
                 echo '<h4 class="text-center">The cart is empty</h4>';   
            }
            ?>
        </tbody>
    </table>
<div class="text-end" >
<h5>Total: <?= $total ?> Souls</h5>
</div>
<div class="col-md-4 mx-auto"> 
<form action="index.php?page=checkout" method="post">
<?php
if(isset($_SESSION["cart"])){
    $j=1;
    foreach($_SESSION["cart"] as $cart){
        $product = new View;
        
        echo'
        <input type="hidden" name="product_id/'.$j.'" value="'.$cart["pro_id"].'">

        <input type="hidden" name="product_qty/'.$j.'" value="'.$cart["qty"].'">

        <input type="hidden" name="product_name/'.$j.'" value="'.$product->productByIdV($cart["pro_id"],"product_name").'">
        ';
        $j++;
    }
    echo'<input type="hidden" name="allproducts" value="'.($j-1).'">
    <input type="hidden" name="total" value="'.$total.'">
    ';
}
?>
<button class="btn btn-success w-100" type="submit">Placing the order</button>
</form>
</div>
</div>
