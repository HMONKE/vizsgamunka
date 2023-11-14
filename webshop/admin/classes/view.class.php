<?php

class View extends Model{
 
    public function torlesV(){
        $stmt = $this->termekekM();

        echo "<table class='col-md-4 mx-auto'>";
        while($row = $stmt->fetch()){
            echo "<tr>";
            echo '<td> <img src="../assets/images/products/'.$row["image"].'"> </td>';
            echo "<td>" . $row["product_name"] . "</td>";
            
            echo "<td> 
                <form method='post'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <input type='submit' name='torles' value='Delete'>
                </form>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function ordersV(){
        $stmt = $this->ordersM();


        echo "<table class='col-md-3 mx-auto'>";
        echo "<tr>";
            echo "<td>ID</td>";
            echo "<td>Order ID</td>";
            echo "<td>Product ID</td>";
            echo "<td>Product quantity</td>";
            echo "</tr>";
        while($row = $stmt->fetch()){
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["order_id"] . "</td>";
            echo "<td>" . $row["product_id"] . "</td>";
            echo "<td>" . $row["product_quantity"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>